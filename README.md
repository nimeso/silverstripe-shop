# Shop Module

The SilverStripe Shop module aims to provide developers with a framework for building, and customising ecommerce-based projects.
It includes facilities for customers to browse products and place orders, and for administrators to manage products and orders.
 
[![Build Status](https://secure.travis-ci.org/burnbright/silverstripe-shop.png?branch=1.0)](http://travis-ci.org/burnbright/silverstripe-shop)
[![Latest Stable Version](https://poser.pugx.org/burnbright/silverstripe-shop/v/stable.png)](https://packagist.org/packages/burnbright/silverstripe-shop)
[![Latest Unstable Version](https://poser.pugx.org/burnbright/silverstripe-shop/v/unstable.png)](https://packagist.org/packages/burnbright/silverstripe-shop)
[![Total Downloads](https://poser.pugx.org/burnbright/silverstripe-shop/downloads.png)](https://packagist.org/packages/burnbright/silverstripe-shop)
[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/burnbright/silverstripe-bootstrap-shop/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

Website: http://ss-shop.org
Demo: http://demo.ss-shop.org

We are looking for contributiors. There are many ways you can [contribute to this project](https://github.com/burnbright/silverstripe-shop/wiki/Contributing).
A tremendous thanks to [everyone that has already contributed](https://github.com/burnbright/silverstripe-shop/graphs/contributors).

## Maintainer Contact

 * Jeremy Shipman (Jedateach, jeremy@burnbright.net)

## Requirements

 * SilverStripe 3+ [framework](https://github.com/silverstripe/silverstripe-framework) & [cms](https://github.com/silverstripe/silverstripe-cms)
 * [Omnipay Module](https://github.com/burnbright/silverstripe-omnipay) + it's dependencies.

## Documentation

 * http://demo.ss-shop.org/docs - for Developers & Users
 * http://api.ss-shop.org - API

## Installation Instructions

To install silverstripe + shop into a directory called 'myshop', using [composer](http://doc.silverstripe.org/framework/en/installation/composer), run the following commands:
```
composer create-project silverstripe/installer myshop
composer require -d myshop "burnbright/silverstripe-shop:dev-master"
```

## Configuration

You can view various configuration options in the 'example_config.php' file.

*WARNING:* do not copy and paste entire configuration example file without
first understanding each line, otherwise the system may not work as documented.
In other words, only copy the lines which you need and understand.

## Migrating

Visit [yoursite]/dev/tasks/ShopMigrationTask to migrate your database to work properly.
Make sure you take a database backup, as perfect results aren't guaranteed.
