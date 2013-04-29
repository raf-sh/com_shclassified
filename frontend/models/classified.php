<?php
/**
* Boxoffice Frontend Model 
* 
* @package com_boxoffice
* @subpackage components
* @link http://www.packtpub.com
* @license GNU/GPL
*/
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Load the base JModel class
jimport( 'joomla.application.component.model' );
/**
* Revue Model 
*/
class SHClassifiedModelclassified extends JModel
{
	function __construct()
	{
		parent::__construct();
	}

/**
 * ��������� ������ ����������
 * 
 * @return true on success
 */
public function save($data)
{
	$table = $this->getTable();

	$ads['text'] = iconv("cp1251", "UTF-8", $date['shptext']);
	$ads['phone'] = $data['shpphone'];
	$ads['quantity'] = $data['shpquantity'];
	$ads['author'] = iconv("cp1251", "UTF-8", $data['shpname']);
	$ads['ad_type'] = $data['shpview'];
	$ads['cat'] = $data['category'];
	$ads['publish_date'] = '01.01.1991';
	$ads['checked'] = 0;
	$ads['money'] = $data['OutSum'];
	// ����������� ���� ����� � �������
	if (!$table->bind($ads))
	{
		$this->setError($table->getError());
		return false;
	}
	// ��������� ������
	if ($table->check($ads))
	{
		// ��������� ������
		if (!$table->store($ads))
		{
			$this->setError($table->getError());
			return false;
		}
	}
	else
	{
		$this->setError($table->getError());
		return false;
	}
 
	return true;
}
	
	
}