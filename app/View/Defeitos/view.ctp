<div class="defeitos view">
<h2><?php echo __('Defeito'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($defeito['Defeito']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($defeito['Defeito']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Defeito'), array('action' => 'edit', $defeito['Defeito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Defeito'), array('action' => 'delete', $defeito['Defeito']['id']), null, __('Are you sure you want to delete # %s?', $defeito['Defeito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Defeitos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Defeito'), array('action' => 'add')); ?> </li>
	</ul>
</div>
