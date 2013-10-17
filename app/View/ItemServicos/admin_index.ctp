<div class="itemServicos index">
	<h2><?php echo __('Item Servicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('peca_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servico_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemServicos as $itemServico): ?>
	<tr>
		<td><?php echo h($itemServico['ItemServico']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemServico['Peca']['nome'], array('controller' => 'pecas', 'action' => 'view', $itemServico['Peca']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itemServico['Servico']['descricao'], array('controller' => 'servicos', 'action' => 'view', $itemServico['Servico']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemServico['ItemServico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemServico['ItemServico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemServico['ItemServico']['id']), null, __('Are you sure you want to delete # %s?', $itemServico['ItemServico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Item Servico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pecas'), array('controller' => 'pecas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peca'), array('controller' => 'pecas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
