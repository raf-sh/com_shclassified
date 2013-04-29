<?php defined('_JEXEC') or die('Restricted access');


JToolBarHelper::title(   JText::_( 'SH Classified Ads Mngr' ), 'generic.png' );
JToolBarHelper::deleteList();
JToolBarHelper::editListX();
JToolBarHelper::preferences('SH Classified');
?>
 
<form action="index.php?option=com_sh_classified" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<tr>
			<th></th>
			<th><?php echo JText::_('SHCLASS NAME'); ?></th>
			<th><?php echo JText::_('SHCLASS PHONE'); ?></th>
			<th><?php echo JText::_('SHCLASS VIEW'); ?></th>
			<th><?php echo JText::_('SHCLASS CAT'); ?></th>
			<th><?php echo JText::_('SHCLASS TEXT'); ?></th>
			<th><?php echo JText::_('SHCLASS CHECKED'); ?></th>
			<th><?php echo JText::_('SHCLASS SUMM'); ?></th>
			<th><?php echo JText::_('SHCLASS DATES'); ?></th>
		</tr>
		<?php if ($this->rows):
			foreach ($this->rows as $i => $row):
				$checked = JHTML::_('grid.id', $i, $row->id);
				$link = 'index.php?option=com_shclassified&task=edit&cid[]=' . $row->id;
			?>
				<tr class="row<?php echo $i % 2; ?>">
					<td><?php echo $checked; ?></td>
					<td><a href="<?php echo $link; ?>"><?php echo $row->author; ?></a></td>
					<td><?php echo $row->phone; ?></td>
					<td><?php echo $row->type; ?></td>
					<td><?php echo $row->cat; ?></td>
					<td><?php echo $row->text; ?></td>
					<td><?php echo $row->checked; ?></td>
					<td><?php echo $row->money; ?></td>
					<td><?php echo $row->dates; ?></td>
				</tr>
			<?php
			endforeach;
		else: ?>
			<tr>
				<td colspan="16"><?php echo JText::_('SHCLASS NO DATA'); ?></td>
			<tr>
		<?php endif; ?>
	</table>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>