<div class="pecas view">
<h2><?php echo __('Peca'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peca['Peca']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($peca['Peca']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($peca['Peca']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($peca['Peca']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Peca'), array('action' => 'edit', $peca['Peca']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Peca'), array('action' => 'delete', $peca['Peca']['id']), null, __('Are you sure you want to delete # %s?', $peca['Peca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pecas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peca'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Servicos'), array('controller' => 'item_servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Servico'), array('controller' => 'item_servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Item Servicos'); ?></h3>
	<?php if (!empty($peca['ItemServico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Peca Id'); ?></th>
		<th><?php echo __('Servico Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($peca['ItemServico'] as $itemServico): ?>
		<tr>
			<td><?php echo $itemServico['id']; ?></td>
			<td><?php echo $itemServico['peca_id']; ?></td>
			<td><?php echo $itemServico['servico_id']; ?></td>
			<td><?php echo $itemServico['created']; ?></td>
			<td><?php echo $itemServico['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'item_servicos', 'action' => 'view', $itemServico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'item_servicos', 'action' => 'edit', $itemServico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'item_servicos', 'action' => 'delete', $itemServico['id']), null, __('Are you sure you want to delete # %s?', $itemServico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item Servico'), array('controller' => 'item_servicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
