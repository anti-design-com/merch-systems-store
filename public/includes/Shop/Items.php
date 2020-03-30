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
 
class MerchSys_Shop_Items extends MerchSys_Shop_Base {
	public $items;
	
	public function __construct($view, $items = null) {
		parent::__construct($view);
        
        var_dump($items);
        
		if ($items != null && count($items) == 1) $items = array($items);
		$this->items = $items;
		$this->has_items = count($this->items > 0) ? true : false;
	}
}
