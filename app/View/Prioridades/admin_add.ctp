<div class="prioridades form">
<?php echo $this->Form->create('Prioridade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Prioridade'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prioridades'), array('action' => 'index')); ?></li>
	</ul>
</div>
