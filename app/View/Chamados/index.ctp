<div class="chamados index">
	<h2><?php echo __('Chamados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('funcionario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_abertura'); ?></th>
			<th><?php echo $this->Paginator->sort('data_fechamento'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('prioridade_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($chamados as $chamado): ?>
	<tr>
		<td><?php echo h($chamado['Chamado']['id']); ?>&nbsp;</td>
		<td><?php echo h($chamado['Chamado']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chamado['Funcionario']['nome'], array('controller' => 'funcionarios', 'action' => 'view', $chamado['Funcionario']['id'])); ?>
		</td>
		<td><?php echo h($chamado['Chamado']['data_abertura']); ?>&nbsp;</td>
		<td><?php echo h($chamado['Chamado']['data_fechamento']); ?>&nbsp;</td>
		<td><?php echo h($chamado['Chamado']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chamado['Prioridade']['descricao'], array('controller' => 'prioridades', 'action' => 'view', $chamado['Prioridade']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $chamado['Chamado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $chamado['Chamado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $chamado['Chamado']['id']), null, __('Are you sure you want to delete # %s?', $chamado['Chamado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Chamado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prioridades'), array('controller' => 'prioridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prioridade'), array('controller' => 'prioridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
