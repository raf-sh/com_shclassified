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
class SHClassifiedViewDefault extends JView
{
	function display($tpl = null)
	{
		// получаем список объявлений
		$rows = $this->get('Ads');

		// присваиваем список виду
		$this->assignRef('rows', $rows);

		// отображаем наш вид
		parent::display($tpl);
	}
}