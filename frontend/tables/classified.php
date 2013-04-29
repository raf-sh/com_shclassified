<?php 
// защита от прямого доступа
defined('_JEXEC') or die('Restricted access');
 
class Tableclassified extends JTable
{
	/**
	 * Первичный ключ
	 * 
	 * @var integer
	 */
	public $id = null;
 
	/**
	 * Текст объявления
	 * 
	 * @var text
	 */
	public $text = null;
 
	/**
	 * ФИО рекламодателя
	 * 
	 * @var varchar(50)
	 */
	public $author = null;
 
	/**
	 * Телефон рекламодателя
	 * 
	 * @var varchar(50)
	 */
	public $phone = null;
 
	/**
	 * Тип объявления
	 * 
	 * @var varchar(50)
	 */
	public $ad_type= null;
 
	/**
	 * Категория объявления
	 * 
	 * @var carchar(50)
	 */
	public $cat = null;
 
	/**
	 * Количество
	 * 
	 * @var integer(10)
	 */
	public $quantity = null;
 
	/**
	 * Дата выхода
	 * 
	 * @var date
	 */
	public $publish_date = 0;
 
	/**
	 * Проверенна ли оплата объявления
	 * 
	 * @var integer(1)
	 */
	public $checked = 0;
 
	/**
	 * Стоимость объявления
	 * 
	 * @var integer(10)
	 */
	public $money = 0;
 
	 
	/**
	 * Конструктор
	 * 
	 * @param object $db Объект базы данных JDatabase
	 */
	function __construct(&$db)
	{
		parent::__construct('#__sh_classified_ads', 'id', $db);
	}
}