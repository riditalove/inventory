<div class="assetcheckouts view">
<h2><?php echo __('Assetcheckout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetcheckout['Assetcheckout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetcheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $assetcheckout['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetcheckout['Asset']['name'], array('controller' => 'assets', 'action' => 'view', $assetcheckout['Asset']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkout Date'); ?></dt>
		<dd>
			<?php echo h($assetcheckout['Assetcheckout']['checkout_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recheck In'); ?></dt>
		<dd>
			<?php echo h($assetcheckout['Assetcheckout']['recheck_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($assetcheckout['Assetcheckout']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assetcheckout'), array('action' => 'edit', $assetcheckout['Assetcheckout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assetcheckout'), array('action' => 'delete', $assetcheckout['Assetcheckout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assetcheckout['Assetcheckout']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Assetcheckouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assetcheckout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assets'), array('controller' => 'assets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset'), array('controller' => 'assets', 'action' => 'add')); ?> </li>
	</ul>
</div>
