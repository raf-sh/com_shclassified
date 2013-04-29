<?php
// защита от прямого доступа
defined('_JEXEC') or die('Restricted access');
// подключаем класс JView
jimport('joomla.application.component.view');

class SHClassifiedViewsh_edit extends Jview
{
	function display($tpl = null)
	{
		// инстанцируем объект таблицы #__cgcadmins
		$row = JTable::getInstance('classified', 'Table');
		// получаем доступ к значениям полей таблицы конкретной записи
		$cid = JRequest::getVar('cid', array(0), '', 'array');
		$id = (int)$cid[0];
		if (isset($id)) {
			$row->load($id);
		}
		// присваиваем значение виду
		$this->assignRef('row', $row);

		parent::display($tpl);
	}
}