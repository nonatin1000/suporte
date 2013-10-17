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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Peca'), array('action' => 'edit', $peca['Peca']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Peca'), array('action' => 'delete', $peca['Peca']['id']), null, __('Are you sure you want to delete # %s?', $peca['Peca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pecas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peca'), array('action' => 'add')); ?> </li>
	</ul>
</div>
