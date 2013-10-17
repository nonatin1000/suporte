<div class="equipamentos view">
<h2><?php echo __('Equipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Serie'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['numero_serie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tombamento'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['tombamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipamento['Marca']['nome'], array('controller' => 'marcas', 'action' => 'view', $equipamento['Marca']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipamento'), array('action' => 'edit', $equipamento['Equipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipamento'), array('action' => 'delete', $equipamento['Equipamento']['id']), null, __('Are you sure you want to delete # %s?', $equipamento['Equipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
