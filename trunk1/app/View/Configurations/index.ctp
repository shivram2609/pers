<div class="configurations index">
	<h2><?php echo __('Configurations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('heading'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($configurations as $configuration): ?>
	<tr>
		<td><?php echo h($configuration['Configuration']['id']); ?>&nbsp;</td>
		<td><?php echo h($configuration['Configuration']['heading']); ?>&nbsp;</td>
		<td><?php echo h($configuration['Configuration']['value']); ?>&nbsp;</td>
		<td><?php echo h($configuration['Configuration']['created']); ?>&nbsp;</td>
		<td><?php echo h($configuration['Configuration']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $configuration['Configuration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $configuration['Configuration']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $configuration['Configuration']['id']), null, __('Are you sure you want to delete # %s?', $configuration['Configuration']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Configuration'), array('action' => 'add')); ?></li>
	</ul>
</div>
