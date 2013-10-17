<div class="tipoServicos view">
<h2><?php echo __('Tipo Servico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoServico['TipoServico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoServico['TipoServico']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Servico'), array('action' => 'edit', $tipoServico['TipoServico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Servico'), array('action' => 'delete', $tipoServico['TipoServico']['id']), null, __('Are you sure you want to delete # %s?', $tipoServico['TipoServico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Servicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Servico'), array('action' => 'add')); ?> </li>
	</ul>
</div>
