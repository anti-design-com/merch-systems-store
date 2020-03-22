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
 
class MerchSys_Shop_Header extends MerchSysStore_Common_Header {
	public function __construct() {
		parent::__construct('header');
	}
}
