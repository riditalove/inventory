<div class="accessories view">
<h2><?php echo __('Accessory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accessory['Accessory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accessory['Company']['name'], array('controller' => 'companies', 'action' => 'view', $accessory['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accessory Name'); ?></dt>
		<dd>
			<?php echo h($accessory['Accessory']['accessory_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accessory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $accessory['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accessory['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $accessory['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accessory['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $accessory['Manufacturer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Number'); ?></dt>
		<dd>
			<?php echo h($accessory['Accessory']['order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($accessory['Accessory']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Cost'); ?></dt>
		<dd>
			<?php echo h($accessory['Accessory']['purchase_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($accessory['Accessory']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accessory'), array('action' => 'edit', $accessory['Accessory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accessory'), array('action' => 'delete', $accessory['Accessory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $accessory['Accessory']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Accessories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accessory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
	</ul>
</div>
