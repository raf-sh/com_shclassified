<?php
/**
* SH Classified frontend controller 
* 
* @package com_sh_classified
* @subpackage components
* @link http://www.edinstvo-news.ru
* @license 
*/
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Load the base JController class
jimport( 'joomla.application.component.controller' );
/**
* SH Classified Frontend Controller
*/
class SHClassifiedController extends JController
{
	function __construct()
	{
		parent::__construct();
	}

/**
* Method to Add the classified advert
*
* @access public
*
*/ 
function add(){
// Get Data
$data = JRequest::get('post');
$mrh_login = "";
$mrh_pass1 = "";
if($data){
	$out_summ = 20*3;
$inv_id = $data['inv_id'];

// Пользовательские данные
$shpcategory=$data["category"];
$shpname=iconv("UTF-8", "cp1251", $data["author"]);
$shpphone=$data["phone"];
$shpquantity=$data["quantity"];
$shptext=iconv("UTF-8", "cp1251", $data["ad-text"]);
$shpview=$data["type"];
$shpdate=$data["date"];

$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:shpcategory=$shpcategory:shpname=$shpname:shpphone=$shpphone:shpquantity=$shpquantity:shptext=$shptext:shpview=$shpview");
$data["inv_desc"] = "ROBOKASSA Advanced UserGuide";
$url = 'http://test.robokassa.ru/Index.aspx?MrchLogin='.$mrh_login .'&OutSum='.$out_summ.'&InvId='.$inv_id.'&Desc='.$data["inv_desc"].'&SignatureValue='.$crc.'&IncCurrLabel=&Culture=ru&shpcategory='.$shpcategory.'&shpname='.$shpname.'&shpphone='.$shpphone.'&shpquantity='.$shpquantity.'&shptext='.$shptext.'&shpview='.$shpview;
	header("Location:".$url);

                  die();}
				  else {echo "no";}

}

/**
* Method Success -- when user payed by Robokassa
*
* @access public
*
*/ 
function success(){
		// получаем значения формы
		$data = JRequest::get('post');

		$model = $this->getModel('classified');
		// если сохранение прошло успешно
		if ($model->save($data))
		{
			$message = JText::_('SHCLS AD SAVE OK');
		} // если нет
		else
		{
			$message = JText::_('SHCLS AD SAVE FAILED');
			$message .= ' ['.$model->getError().']'; // получаем ошибку из модели
		}
		// перенаправялем
		$this->setRedirect('index.php?option=com_shclassified', $message);
	}


/**
* Method to display the view
*
* @access public
*
*/ 
function display()
{
// Set the view and the model
$view = JRequest::getVar( 'view', 'default' );
$layout = JRequest::getVar( 'layout', 'default' );
$view =& $this->getView( $view, 'html' );
$model =& $this->getModel( 'classified' );
$view->setModel( $model, true );
$view->setLayout( $layout );
// Display the revue
$view->display(); 
}
}