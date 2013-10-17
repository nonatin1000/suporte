<div class="historicoChamados index">
	<h2><?php echo __('Historico Chamados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('chamado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($historicoChamados as $historicoChamado): ?>
	<tr>
		<td><?php echo h($historicoChamado['HistoricoChamado']['id']); ?>&nbsp;</td>
		<td><?php echo h($historicoChamado['HistoricoChamado']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($historicoChamado['Chamado']['descricao'], array('controller' => 'chamados', 'action' => 'view', $historicoChamado['Chamado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($historicoChamado['Usuario']['nome'], array('controller' => 'usuarios', 'action' => 'view', $historicoChamado['Usuario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $historicoChamado['HistoricoChamado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $historicoChamado['HistoricoChamado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $historicoChamado['HistoricoChamado']['id']), null, __('Are you sure you want to delete # %s?', $historicoChamado['HistoricoChamado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Historico Chamado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('controller' => 'chamados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
