<div class="chamados form">
<?php echo $this->Form->create('Chamado'); ?>
	<fieldset>
		<legend><?php echo __('Add Chamado'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('funcionario_id');
		echo $this->Form->input('data_abertura');
		echo $this->Form->input('data_fechamento');
		echo $this->Form->input('status');
		echo $this->Form->input('prioridade_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Chamados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prioridades'), array('controller' => 'prioridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prioridade'), array('controller' => 'prioridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
