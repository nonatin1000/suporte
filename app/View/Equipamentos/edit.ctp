<div class="equipamentos form">
<?php echo $this->Form->create('Equipamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Equipamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('numero_serie');
		echo $this->Form->input('tombamento');
		echo $this->Form->input('marca_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Equipamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Equipamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
