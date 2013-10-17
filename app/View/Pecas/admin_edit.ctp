<div class="pecas form">
<?php echo $this->Form->create('Peca'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Peca'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Peca.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Peca.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pecas'), array('action' => 'index')); ?></li>
	</ul>
</div>
