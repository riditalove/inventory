<div class="componentcheckouts view">
<h2><?php echo __('Componentcheckout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($componentcheckout['Componentcheckout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($componentcheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $componentcheckout['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset'); ?></dt>
		<dd>
			<?php echo $this->Html->link($componentcheckout['Asset']['name'], array('controller' => 'assets', 'action' => 'view', $componentcheckout['Asset']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkin Date'); ?></dt>
		<dd>
			<?php echo h($componentcheckout['Componentcheckout']['checkin_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkout Date'); ?></dt>
		<dd>
			<?php echo h($componentcheckout['Componentcheckout']['checkout_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($componentcheckout['Componentcheckout']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($componentcheckout['Componentcheckout']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Componentcheckout'), array('action' => 'edit', $componentcheckout['Componentcheckout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Componentcheckout'), array('action' => 'delete', $componentcheckout['Componentcheckout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $componentcheckout['Componentcheckout']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Componentcheckouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Componentcheckout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assets'), array('controller' => 'assets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset'), array('controller' => 'assets', 'action' => 'add')); ?> </li>
	</ul>
</div>
