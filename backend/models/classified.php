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

	/**
	 * ������ �������
	 * 
	 * @var array ������ ��������
	 */
	private $_ads;
	
/**
 *  ������ ����������
 *
 * @var array ������ ��������
 */
 
 
/**
 * �����������
 */ 
	function __construct()
	{
		parent::__construct();
	}

/**
 * �������� ������ ����������
 * 
 * @return array ������ ��������
 */
public function getAds()
{
		if (empty($this->_ads))
		{
			$query 	= 'SELECT *'
					. ' FROM ' . $this->_db->nameQuote('#__sh_classified_ads');
			$this->_db->setQuery($query);
			$this->_ads = $this->_db->loadObjectList();
		}
		
		return $this->_ads;
}
/**
 * ��������� ������ ����������
 * 
 * @return true on success
 */
public function save($data)
{
	$table = $this->getTable();
 
	// ����������� ���� ����� � �������
	if (!$table->bind($data))
	{
		$this->setError($table->getError());
		return false;
	}
	// ��������� ������
	if ($table->check($data))
	{
		// ��������� ������
		if (!$table->store($data))
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