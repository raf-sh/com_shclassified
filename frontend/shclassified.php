<?php
/**
 * SH Classified 0.1
 * @copyright (C) 2013 Rafail Akhmetshin
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.edinstvo-news.ru/ Official website
 **/


// no direct access 
defined( '_JEXEC' ) or die( 'Restricted access' );
// Require the base controller
require_once( JPATH_COMPONENT.DS.'controller.php' );
JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR . DS . 'tables');
// Create the controller
$controller = new SHClassifiedController();
//Perform the requested task
$controller->execute(JRequest::getVar('task', 'display'));
//Redirect if set by the controller
$controller->redirect();
