<div class="defeitos view">
<h2><?php echo __('Defeito'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($defeito['Defeito']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($defeito['Defeito']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($defeito['Defeito']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($defeito['Defeito']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Defeito'), array('action' => 'edit', $defeito['Defeito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Defeito'), array('action' => 'delete', $defeito['Defeito']['id']), null, __('Are you sure you want to delete # %s?', $defeito['Defeito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Defeitos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Defeito'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Servicos'); ?></h3>
	<?php if (!empty($defeito['Servico'])): ?>
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
	<?php foreach ($defeito['Servico'] as $servico): ?>
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
