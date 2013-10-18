<div class="historicoChamados view">
<h2><?php echo __('Historico Chamado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historicoChamado['HistoricoChamado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($historicoChamado['HistoricoChamado']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chamado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historicoChamado['Chamado']['id'], array('controller' => 'chamados', 'action' => 'view', $historicoChamado['Chamado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historicoChamado['User']['id'], array('controller' => 'users', 'action' => 'view', $historicoChamado['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($historicoChamado['HistoricoChamado']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($historicoChamado['HistoricoChamado']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Historico Chamado'), array('action' => 'edit', $historicoChamado['HistoricoChamado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Historico Chamado'), array('action' => 'delete', $historicoChamado['HistoricoChamado']['id']), null, __('Are you sure you want to delete # %s?', $historicoChamado['HistoricoChamado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Historico Chamados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico Chamado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('controller' => 'chamados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
