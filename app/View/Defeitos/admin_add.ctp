<div class="defeitos form">
<?php echo $this->Form->create('Defeito'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Defeito'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Defeitos'), array('action' => 'index')); ?></li>
	</ul>
</div>
