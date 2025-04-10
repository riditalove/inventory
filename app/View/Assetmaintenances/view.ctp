<div class="assetmaintenances view">
<h2><?php echo __('Assetmaintenance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetmaintenance['Asset']['name'], array('controller' => 'assets', 'action' => 'view', $assetmaintenance['Asset']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetmaintenance['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $assetmaintenance['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maintenance Type'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['maintenance_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Warranty'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['is_warranty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completion Date'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['completion_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maintenance Time'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['maintenance_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetmaintenance['User']['name'], array('controller' => 'users', 'action' => 'view', $assetmaintenance['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($assetmaintenance['Assetmaintenance']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assetmaintenance'), array('action' => 'edit', $assetmaintenance['Assetmaintenance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assetmaintenance'), array('action' => 'delete', $assetmaintenance['Assetmaintenance']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assetmaintenance['Assetmaintenance']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Assetmaintenances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assetmaintenance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assets'), array('controller' => 'assets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset'), array('controller' => 'assets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
