<div class="accessorycheckouts view">
<h2><?php echo __('Accessorycheckout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accessorycheckout['Accessorycheckout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accessorycheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $accessorycheckout['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accessory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accessorycheckout['Accessory']['id'], array('controller' => 'accessories', 'action' => 'view', $accessorycheckout['Accessory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkout Date'); ?></dt>
		<dd>
			<?php echo h($accessorycheckout['Accessorycheckout']['checkout_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recheck In'); ?></dt>
		<dd>
			<?php echo h($accessorycheckout['Accessorycheckout']['recheck_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($accessorycheckout['Accessorycheckout']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accessorycheckout'), array('action' => 'edit', $accessorycheckout['Accessorycheckout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accessorycheckout'), array('action' => 'delete', $accessorycheckout['Accessorycheckout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $accessorycheckout['Accessorycheckout']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Accessorycheckouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accessorycheckout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accessories'), array('controller' => 'accessories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accessory'), array('controller' => 'accessories', 'action' => 'add')); ?> </li>
	</ul>
</div>
