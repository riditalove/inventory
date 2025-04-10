<div class="assets view">
<h2><?php echo __('Asset'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial No'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['serial_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asset['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $asset['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Number'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Cost'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['purchase_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Warranty'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['warranty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asset['Company']['name'], array('controller' => 'companies', 'action' => 'view', $asset['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Details'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['asset_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requestable'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['requestable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ext'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['ext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asset'), array('action' => 'edit', $asset['Asset']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asset'), array('action' => 'delete', $asset['Asset']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $asset['Asset']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Assets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
