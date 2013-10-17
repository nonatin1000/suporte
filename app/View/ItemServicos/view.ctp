<div class="itemServicos view">
<h2><?php echo __('Item Servico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemServico['ItemServico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemServico['Peca']['nome'], array('controller' => 'pecas', 'action' => 'view', $itemServico['Peca']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemServico['Servico']['descricao'], array('controller' => 'servicos', 'action' => 'view', $itemServico['Servico']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Servico'), array('action' => 'edit', $itemServico['ItemServico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Servico'), array('action' => 'delete', $itemServico['ItemServico']['id']), null, __('Are you sure you want to delete # %s?', $itemServico['ItemServico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Servicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Servico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pecas'), array('controller' => 'pecas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Peca'), array('controller' => 'pecas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
