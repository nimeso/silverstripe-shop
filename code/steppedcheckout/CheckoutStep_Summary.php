<?php

class CheckoutStep_Summary extends CheckoutStep{
	
	static $allowed_actions = array(
		'summary',
		'ConfirmationForm',
	);
	
	function summary(){
		$form = $this->ConfirmationForm();
		$this->owner->extend('updateConfirmationForm',$form);
		return array(
			'Form' => $form 
		);
	}
	
	function ConfirmationForm(){
		$cff = CheckoutFieldFactory::singleton();

		$gateway = Checkout::get()->getSelectedPaymentMethod(false);

		$factory = new GatewayFieldsFactory($gateway);
		$fields = $gateway ? $factory->getFields() : new FieldList();
		$fields->push($cff->getNotesField());

		if($tf = $cff->getTermsConditionsField()){
			$fields->push($tf);
		}
		$actions = new FieldList(
			new FormAction("place",_t("Checkout.CONFIRMANDPAY","Confirm and Pay"))
		);
		$validator = new CheckoutValidator();

		$form = new Form($this->owner,"ConfirmationForm",$fields,$actions,$validator);
		$this->owner->extend('updateConfirmationForm',$form);
		return $form;
	}
	
	function place($data, $form){
		$order = ShoppingCart::curr();
		$form->saveInto($order);
		$order->write();
		$processor = OrderProcessor::create($order);

		//TODO: should payment details be validated first?

		//try to place order
		if(!$processor->placeOrder(Member::currentUser())){
			$form->sessionMessage($processor->getError(), 'bad');
			$this->owner->redirectBack();
			return false;
		}
		$redirecturl = $processor->makePayment(
			Checkout::get($order)->getSelectedPaymentMethod(false),
			$form->getData()
		);
		if(!$this->owner->redirectedTo()){ //only redirect if one hasn't been done already
			return $this->owner->redirect($redirecturl);
		}
		return;
	}
	
}