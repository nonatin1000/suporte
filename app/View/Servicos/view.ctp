<div class="servicos view">
<h2><?php echo __('Servico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Servico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['TipoServico']['id'], array('controller' => 'tipo_servicos', 'action' => 'view', $servico['TipoServico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defeito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Defeito']['id'], array('controller' => 'defeitos', 'action' => 'view', $servico['Defeito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chamado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Chamado']['id'], array('controller' => 'chamados', 'action' => 'view', $servico['Chamado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['observacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Servico'), array('action' => 'edit', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Servico'), array('action' => 'delete', $servico['Servico']['id']), null, __('Are you sure you want to delete # %s?', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Servicos'), array('controller' => 'tipo_servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Servico'), array('controller' => 'tipo_servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Defeitos'), array('controller' => 'defeitos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Defeito'), array('controller' => 'defeitos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('controller' => 'chamados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
	</ul>
</div>
