<div class="pecas form">
<?php echo $this->Form->create('Peca'); ?>
	<fieldset>
		<legend><?php echo __('Add Peca'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pecas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Servicos'), array('controller' => 'item_servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Servico'), array('controller' => 'item_servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
