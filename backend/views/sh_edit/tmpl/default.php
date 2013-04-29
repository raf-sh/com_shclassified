<?php
// защита от прямого доступа
defined('_JEXEC') or die('Restricted access');
// кнопки
JToolBarHelper::save();
JToolBarHelper::cancel();
?>

<form action="index.php?option=com_shclassified" method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">
		<legend><?php echo JText::_('SHCLASS DETAILS'); ?></legend>
		<table class="admintable">
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS USERID'); ?>:</td>
			<td>
				<?php echo $this->row->id; ?>
			</td>
		</tr>
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS AUTHOR'); ?>:</td>
			<td>
				<input class="text_area" type="text" name="author" id="author" size="50" maxlength="50" value="<?php echo $this->row->author; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS PHONE'); ?>:</td>
			<td>
				<input class="text_area" type="text" name="phone" id="phone" size="50" maxlength="50" value="<?php echo $this->row->phone; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS TYPE'); ?>:</td>
			<td>
				<input class="text_area" type="text" name="type" id="type" size="17" maxlength="17" value="<?php echo $this->row->type; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS CAT'); ?>:</td>
			<td>
				<input class="text_area" type="text" name="cat" id="cat" size="32" maxlength="32" value="<?php echo $this->row->cat; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS TEXT'); ?>:</td>
			<td>
				<input class="text_area" type="text" name="text" id="text" size="32" maxlength="32" value="<?php echo $this->row->text; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS CHECKED'); ?>:</td>
			<td>
				<input class="text_area" type="text" name="checked" id="checked" size="60" maxlength="60" value="<?php echo $this->row->checked; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" class="key"><?php echo JText::_('SHCLASS MONEY'); ?>:</td>
			<td>
				<input class="text_area" type="text" name="money" id="money" size="60" maxlength="60" value="<?php echo $this->row->money; ?>" />
			</td>
		</tr>
		</table>
	</fieldset>
	<input type="hidden" name="id" value="<?php echo $this->row->id; ?>" />
	<input type="hidden" name="option" value="com_sh_classified" />
	<input type="hidden" name="task" value="" />
	<?php echo JHTML::_('form.token'); ?>
</form>