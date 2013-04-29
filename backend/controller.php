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
 * Сохранение данных объявления
 */
public function save()
	{
		// проверяем токен
		JRequest::checkToken() or jexit('Invalid Token');

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
 * Редактирование объявления
 * 
 */
public function edit()
	{
		JRequest::setVar('view', 'sh_edit');
		$this->display();
	}

/**
* Метод по умолчанию
*
* @access public
*
*/ 
function display()
{
// Устанавливаем Вид и Модель
$view = JRequest::getVar( 'view', 'Default' );
$layout = JRequest::getVar( 'layout', 'default' );
$view =& $this->getView( $view, 'html' );
$model =& $this->getModel( 'classified' );
$view->setModel( $model, true );
$view->setLayout( $layout );
// Показ
$view->display(); 
}
}