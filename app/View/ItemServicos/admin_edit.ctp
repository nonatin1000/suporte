<div class="itemServicos form">
<?php echo $this->Form->create('ItemServico'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Item Servico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('peca_id');
		echo $this->Form->input('servico_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItemServico.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ItemServico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Item Servicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pecas'), array('controller' => 'pecas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peca'), array('controller' => 'pecas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
