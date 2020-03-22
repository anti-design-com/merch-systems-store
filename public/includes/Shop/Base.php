<?php

/*
 Plugin Name: merch.systems Storefront
 Version: 1.0.0
 Description: Fully integrates your merch.systems online store into your Wordpress website
 Plugin URI: https://merch.systems
 Author: anti-design.com GmbH & Co. KG
 Author URI: http://anti-design.com
 
 @package merchsys
 @subpackage merchsys/public/includes/Shop
 */
 
abstract class MerchSys_Shop_Base extends MerchSysStore_Common_Base {
	public $view_path = MerchSysStore_Public_Settings::SHOP_VIEWS_FOLDER;
}
