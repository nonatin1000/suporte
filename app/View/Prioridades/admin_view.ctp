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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prioridade'), array('action' => 'edit', $prioridade['Prioridade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prioridade'), array('action' => 'delete', $prioridade['Prioridade']['id']), null, __('Are you sure you want to delete # %s?', $prioridade['Prioridade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prioridades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prioridade'), array('action' => 'add')); ?> </li>
	</ul>
</div>
