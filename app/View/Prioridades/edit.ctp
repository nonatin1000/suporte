<div class="prioridades form">
<?php echo $this->Form->create('Prioridade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Prioridade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Prioridade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Prioridade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prioridades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('controller' => 'chamados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
	</ul>
</div>
