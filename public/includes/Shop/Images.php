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
 
class MerchSys_Shop_Images extends MerchSys_Shop_Base {
	public $items = array();
	
	public function __construct($images_array, $view = 'images') {
		parent::__construct($view);
		$this->items = $images_array;
	}
	
	public function get_items() {
		$this->view = $this->view;
		return MerchSys_Helper::get_view($this);
	}
}