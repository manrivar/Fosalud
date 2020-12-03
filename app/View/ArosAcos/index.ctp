<div class="arosAcos index">
	<h2><?php echo __('Aros Acos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aro_id'); ?></th>
			<th><?php echo $this->Paginator->sort('aco_id'); ?></th>
			<th><?php echo $this->Paginator->sort('_create'); ?></th>
			<th><?php echo $this->Paginator->sort('_read'); ?></th>
			<th><?php echo $this->Paginator->sort('_update'); ?></th>
			<th><?php echo $this->Paginator->sort('_delete'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($arosAcos as $arosAco): ?>
	<tr>
		<td><?php echo h($arosAco['ArosAco']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $arosAco['Aro']['model']; ?>
		</td>
		<td>
			<?php echo $arosAco['Aco']['alias']; ?>
		</td>
                <td><?php if($arosAco['ArosAco']['_create']==1)echo "Si"; else echo "No"; ?>&nbsp;</td>
		<td><?php if($arosAco['ArosAco']['_read']==1)  echo "Si" ; else echo "No"; ?>&nbsp;</td>
		<td><?php if($arosAco['ArosAco']['_update']==1) echo "Si"; else echo "No";?>&nbsp;</td>
		<td><?php if($arosAco['ArosAco']['_delete']==1) echo "Si"; else echo "No"; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $arosAco['ArosAco']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $arosAco['ArosAco']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $arosAco['ArosAco']['id']), null, __('Are you sure you want to delete # %s?', $arosAco['ArosAco']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Aros Aco'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Aros'), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aro'), array('controller' => 'aros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acos'), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aco'), array('controller' => 'acos', 'action' => 'add')); ?> </li>
	</ul>
</div>
