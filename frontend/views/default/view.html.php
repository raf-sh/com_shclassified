<?php
/**
* Boxoffice Frontend HTML Revue View
* 
* @package com_boxoffice
* @subpackage components
* @link http://www.packtpub.com
* @license GNU/GPL
*/
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Load the base JView class 
jimport( 'joomla.application.component.view' );
/**
* Revue HTML view class
*/
class SHClassifiedViewdefault extends JView
{
function display( $tpl = null )
{
// Необходимые для Robokassa параметры. Пока что hardcoded
$mrh_login = "";
$mrh_pass1 = "";
// номер заказа
// number of order
$inv_id = 0;

// описание заказа
// order description
$inv_desc = "ROBOKASSA Advanced User Guide";

// сумма заказа
// sum of order
$out_summ = "8.96";

// тип товара
// code of goods
$shp_item = "2";

// предлагаемая валюта платежа
// default payment e-currency
$in_curr = "";

// язык
// language
$culture = "ru";

// формирование подписи
// generate signature
$this->assignRef('mrh_login', $mrh_login); 
$this->assignRef('mrh_pass1', $mrh_pass1);
$this->assignRef('mrh_login', $mrh_login); 


// Display the view
parent::display( $tpl );
}
}