<div class="consumablecheckouts view">
<h2><?php echo __('Consumablecheckout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consumablecheckout['Consumablecheckout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumablecheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $consumablecheckout['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumablecheckout['Consumable']['id'], array('controller' => 'consumables', 'action' => 'view', $consumablecheckout['Consumable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkin Date'); ?></dt>
		<dd>
			<?php echo h($consumablecheckout['Consumablecheckout']['checkin_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkout Date'); ?></dt>
		<dd>
			<?php echo h($consumablecheckout['Consumablecheckout']['checkout_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($consumablecheckout['Consumablecheckout']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($consumablecheckout['Consumablecheckout']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consumablecheckout'), array('action' => 'edit', $consumablecheckout['Consumablecheckout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consumablecheckout'), array('action' => 'delete', $consumablecheckout['Consumablecheckout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $consumablecheckout['Consumablecheckout']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumablecheckouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumablecheckout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('controller' => 'consumables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('controller' => 'consumables', 'action' => 'add')); ?> </li>
	</ul>
</div>
