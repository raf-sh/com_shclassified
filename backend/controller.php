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
 * ���������� ������ ����������
 */
public function save()
	{
		// ��������� �����
		JRequest::checkToken() or jexit('Invalid Token');

		// �������� �������� �����
		$data = JRequest::get('post');

		$model = $this->getModel('classified');
		// ���� ���������� ������ �������
		if ($model->save($data))
		{
			$message = JText::_('SHCLS AD SAVE OK');
		} // ���� ���
		else
		{
			$message = JText::_('SHCLS AD SAVE FAILED');
			$message .= ' ['.$model->getError().']'; // �������� ������ �� ������
		}
		// ��������������
		$this->setRedirect('index.php?option=com_shclassified', $message);
	}

/**
 * �������������� ����������
 * 
 */
public function edit()
	{
		JRequest::setVar('view', 'sh_edit');
		$this->display();
	}

/**
* ����� �� ���������
*
* @access public
*
*/ 
function display()
{
// ������������� ��� � ������
$view = JRequest::getVar( 'view', 'Default' );
$layout = JRequest::getVar( 'layout', 'default' );
$view =& $this->getView( $view, 'html' );
$model =& $this->getModel( 'classified' );
$view->setModel( $model, true );
$view->setLayout( $layout );
// �����
$view->display(); 
}
}