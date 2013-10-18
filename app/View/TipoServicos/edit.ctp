<div class="tipoServicos form">
<?php echo $this->Form->create('TipoServico'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Servico'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoServico.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TipoServico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Servicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
