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
	 * Список админов
	 * 
	 * @var array Список объектов
	 */
	private $_ads;
	
/**
 *  Список объявлений
 *
 * @var array Список объектов
 */
 
 
/**
 * Конструктор
 */ 
	function __construct()
	{
		parent::__construct();
	}

/**
 * Получает список объявлений
 * 
 * @return array Список объектов
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
 * Сохраняет данные объявления
 * 
 * @return true on success
 */
public function save($data)
{
	$table = $this->getTable();
 
	// привязываем поля формы к таблице
	if (!$table->bind($data))
	{
		$this->setError($table->getError());
		return false;
	}
	// проверяем данные
	if ($table->check($data))
	{
		// сохраняем данные
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