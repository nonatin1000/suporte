<div class="tipoServicos form">
<?php echo $this->Form->create('TipoServico'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Tipo Servico'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Servicos'), array('action' => 'index')); ?></li>
	</ul>
</div>
