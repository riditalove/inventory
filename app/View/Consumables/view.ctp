<div class="consumables view">
<h2><?php echo __('Consumable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumable['Company']['name'], array('controller' => 'companies', 'action' => 'view', $consumable['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumable Name'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['consumable_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumable['Category']['name'], array('controller' => 'categories', 'action' => 'view', $consumable['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumable['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $consumable['Manufacturer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item No'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['item_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Number'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Cost'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['purchase_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Qty'); ?></dt>
		<dd>
			<?php echo h($consumable['Consumable']['min_qty']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consumable'), array('action' => 'edit', $consumable['Consumable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consumable'), array('action' => 'delete', $consumable['Consumable']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $consumable['Consumable']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
	</ul>
</div>
