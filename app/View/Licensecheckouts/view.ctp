<div class="licensecheckouts view">
<h2><?php echo __('Licensecheckout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($licensecheckout['Licensecheckout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($licensecheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $licensecheckout['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License'); ?></dt>
		<dd>
			<?php echo $this->Html->link($licensecheckout['License']['id'], array('controller' => 'licenses', 'action' => 'view', $licensecheckout['License']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkin Date'); ?></dt>
		<dd>
			<?php echo h($licensecheckout['Licensecheckout']['checkin_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkout Date'); ?></dt>
		<dd>
			<?php echo h($licensecheckout['Licensecheckout']['checkout_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($licensecheckout['Licensecheckout']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($licensecheckout['Licensecheckout']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Licensecheckout'), array('action' => 'edit', $licensecheckout['Licensecheckout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Licensecheckout'), array('action' => 'delete', $licensecheckout['Licensecheckout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $licensecheckout['Licensecheckout']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Licensecheckouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Licensecheckout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('controller' => 'licenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License'), array('controller' => 'licenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
