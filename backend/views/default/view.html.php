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
		// �������� ������ ����������
		$rows = $this->get('Ads');

		// ����������� ������ ����
		$this->assignRef('rows', $rows);

		// ���������� ��� ���
		parent::display($tpl);
	}
}