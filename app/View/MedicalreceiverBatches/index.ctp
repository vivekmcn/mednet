<div class="medicalreceiverBatches index">
	<h2><?php echo __('Medicalreceiver Batches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('batch_id');?></th>
			<th><?php echo $this->Paginator->sort('group_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($medicalreceiverBatches as $medicalreceiverBatch): ?>
	<tr>
		<td><?php echo h($medicalreceiverBatch['MedicalreceiverBatch']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($medicalreceiverBatch['Batch']['name'], array('controller' => 'batches', 'action' => 'view', $medicalreceiverBatch['Batch']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($medicalreceiverBatch['Group']['name'], array('controller' => 'groups', 'action' => 'view', $medicalreceiverBatch['Group']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($medicalreceiverBatch['User']['id'], array('controller' => 'users', 'action' => 'view', $medicalreceiverBatch['User']['id'])); ?>
		</td>
		<td><?php echo h($medicalreceiverBatch['MedicalreceiverBatch']['created']); ?>&nbsp;</td>
		<td><?php echo h($medicalreceiverBatch['MedicalreceiverBatch']['modified']); ?>&nbsp;</td>
		<td><?php echo h($medicalreceiverBatch['MedicalreceiverBatch']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $medicalreceiverBatch['MedicalreceiverBatch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $medicalreceiverBatch['MedicalreceiverBatch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $medicalreceiverBatch['MedicalreceiverBatch']['id']), null, __('Are you sure you want to delete # %s?', $medicalreceiverBatch['MedicalreceiverBatch']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Medicalreceiver Batch'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Batches'), array('controller' => 'batches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Batch'), array('controller' => 'batches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
