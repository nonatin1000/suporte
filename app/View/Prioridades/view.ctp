<div class="prioridades view">
<h2><?php echo __('Prioridade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prioridade['Prioridade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($prioridade['Prioridade']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($prioridade['Prioridade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($prioridade['Prioridade']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prioridade'), array('action' => 'edit', $prioridade['Prioridade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prioridade'), array('action' => 'delete', $prioridade['Prioridade']['id']), null, __('Are you sure you want to delete # %s?', $prioridade['Prioridade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prioridades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prioridade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('controller' => 'chamados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Chamados'); ?></h3>
	<?php if (!empty($prioridade['Chamado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Funcionario Id'); ?></th>
		<th><?php echo __('Data Abertura'); ?></th>
		<th><?php echo __('Data Fechamento'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Prioridade Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($prioridade['Chamado'] as $chamado): ?>
		<tr>
			<td><?php echo $chamado['id']; ?></td>
			<td><?php echo $chamado['descricao']; ?></td>
			<td><?php echo $chamado['funcionario_id']; ?></td>
			<td><?php echo $chamado['data_abertura']; ?></td>
			<td><?php echo $chamado['data_fechamento']; ?></td>
			<td><?php echo $chamado['status']; ?></td>
			<td><?php echo $chamado['prioridade_id']; ?></td>
			<td><?php echo $chamado['created']; ?></td>
			<td><?php echo $chamado['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'chamados', 'action' => 'view', $chamado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'chamados', 'action' => 'edit', $chamado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'chamados', 'action' => 'delete', $chamado['id']), null, __('Are you sure you want to delete # %s?', $chamado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
