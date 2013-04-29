<?php 
// ������ �� ������� �������
defined('_JEXEC') or die('Restricted access');
 
class Tableclassified extends JTable
{
	/**
	 * ��������� ����
	 * 
	 * @var integer
	 */
	public $id = null;
 
	/**
	 * ����� ����������
	 * 
	 * @var text
	 */
	public $text = null;
 
	/**
	 * ��� �������������
	 * 
	 * @var varchar(50)
	 */
	public $author = null;
 
	/**
	 * ������� �������������
	 * 
	 * @var varchar(50)
	 */
	public $phone = null;
 
	/**
	 * ��� ����������
	 * 
	 * @var varchar(50)
	 */
	public $ad_type= null;
 
	/**
	 * ��������� ����������
	 * 
	 * @var carchar(50)
	 */
	public $cat = null;
 
	/**
	 * ����������
	 * 
	 * @var integer(10)
	 */
	public $quantity = null;
 
	/**
	 * ���� ������
	 * 
	 * @var date
	 */
	public $publish_date = 0;
 
	/**
	 * ���������� �� ������ ����������
	 * 
	 * @var integer(1)
	 */
	public $checked = 0;
 
	/**
	 * ��������� ����������
	 * 
	 * @var integer(10)
	 */
	public $money = 0;
 
	 
	/**
	 * �����������
	 * 
	 * @param object $db ������ ���� ������ JDatabase
	 */
	function __construct(&$db)
	{
		parent::__construct('#__sh_classified_ads', 'id', $db);
	}
}