<div class="equipamentos index">
	<h2><?php echo __('Equipamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_serie'); ?></th>
			<th><?php echo $this->Paginator->sort('tombamento'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($equipamentos as $equipamento): ?>
	<tr>
		<td><?php echo h($equipamento['Equipamento']['id']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['numero_serie']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['tombamento']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipamento['Marca']['nome'], array('controller' => 'marcas', 'action' => 'view', $equipamento['Marca']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $equipamento['Equipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $equipamento['Equipamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $equipamento['Equipamento']['id']), null, __('Are you sure you want to delete # %s?', $equipamento['Equipamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Equipamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
