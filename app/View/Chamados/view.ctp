<div class="chamados view">
<h2><?php echo __('Chamado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($chamado['Chamado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($chamado['Chamado']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcionario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($chamado['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $chamado['Funcionario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Abertura'); ?></dt>
		<dd>
			<?php echo h($chamado['Chamado']['data_abertura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Fechamento'); ?></dt>
		<dd>
			<?php echo h($chamado['Chamado']['data_fechamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($chamado['Chamado']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prioridade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($chamado['Prioridade']['id'], array('controller' => 'prioridades', 'action' => 'view', $chamado['Prioridade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($chamado['Chamado']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($chamado['Chamado']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chamado'), array('action' => 'edit', $chamado['Chamado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Chamado'), array('action' => 'delete', $chamado['Chamado']['id']), null, __('Are you sure you want to delete # %s?', $chamado['Chamado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prioridades'), array('controller' => 'prioridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prioridade'), array('controller' => 'prioridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Servicos'); ?></h3>
	<?php if (!empty($chamado['Servico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Tipo Servico Id'); ?></th>
		<th><?php echo __('Defeito Id'); ?></th>
		<th><?php echo __('Chamado Id'); ?></th>
		<th><?php echo __('Observacao'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($chamado['Servico'] as $servico): ?>
		<tr>
			<td><?php echo $servico['id']; ?></td>
			<td><?php echo $servico['descricao']; ?></td>
			<td><?php echo $servico['tipo_servico_id']; ?></td>
			<td><?php echo $servico['defeito_id']; ?></td>
			<td><?php echo $servico['chamado_id']; ?></td>
			<td><?php echo $servico['observacao']; ?></td>
			<td><?php echo $servico['created']; ?></td>
			<td><?php echo $servico['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicos', 'action' => 'view', $servico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicos', 'action' => 'edit', $servico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicos', 'action' => 'delete', $servico['id']), null, __('Are you sure you want to delete # %s?', $servico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
