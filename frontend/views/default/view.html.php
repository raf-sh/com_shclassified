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
// ����������� ��� Robokassa ���������. ���� ��� hardcoded
$mrh_login = "";
$mrh_pass1 = "";
// ����� ������
// number of order
$inv_id = 0;

// �������� ������
// order description
$inv_desc = "ROBOKASSA Advanced User Guide";

// ����� ������
// sum of order
$out_summ = "8.96";

// ��� ������
// code of goods
$shp_item = "2";

// ������������ ������ �������
// default payment e-currency
$in_curr = "";

// ����
// language
$culture = "ru";

// ������������ �������
// generate signature
$this->assignRef('mrh_login', $mrh_login); 
$this->assignRef('mrh_pass1', $mrh_pass1);
$this->assignRef('mrh_login', $mrh_login); 


// Display the view
parent::display( $tpl );
}
}