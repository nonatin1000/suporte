<div class="servicos form">
<?php echo $this->Form->create('Servico'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Servico'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('tipo_servico_id');
		echo $this->Form->input('defeito_id');
		echo $this->Form->input('chamado_id');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Servicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Servicos'), array('controller' => 'tipo_servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Servico'), array('controller' => 'tipo_servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Defeitos'), array('controller' => 'defeitos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Defeito'), array('controller' => 'defeitos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('controller' => 'chamados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
	</ul>
</div>
