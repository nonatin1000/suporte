<div class="defeitos form">
<?php echo $this->Form->create('Defeito'); ?>
	<fieldset>
		<legend><?php echo __('Edit Defeito'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Defeito.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Defeito.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Defeitos'), array('action' => 'index')); ?></li>
	</ul>
</div>
