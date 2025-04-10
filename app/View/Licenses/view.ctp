<div class="licenses view">
<h2><?php echo __('License'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($license['License']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Name'); ?></dt>
		<dd>
			<?php echo h($license['License']['asset_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($license['Category']['name'], array('controller' => 'categories', 'action' => 'view', $license['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Key'); ?></dt>
		<dd>
			<?php echo h($license['License']['product_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seats'); ?></dt>
		<dd>
			<?php echo h($license['License']['seats']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($license['Company']['name'], array('controller' => 'companies', 'action' => 'view', $license['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($license['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $license['Manufacturer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Licensed To Name'); ?></dt>
		<dd>
			<?php echo h($license['License']['licensed_to_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Licensed To Email'); ?></dt>
		<dd>
			<?php echo h($license['License']['licensed_to_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($license['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $license['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Number'); ?></dt>
		<dd>
			<?php echo h($license['License']['order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Cost'); ?></dt>
		<dd>
			<?php echo h($license['License']['purchase_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($license['License']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration Date'); ?></dt>
		<dd>
			<?php echo h($license['License']['expiration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Termination Date'); ?></dt>
		<dd>
			<?php echo h($license['License']['termination_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Order Number'); ?></dt>
		<dd>
			<?php echo h($license['License']['purchase_order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($license['License']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit License'), array('action' => 'edit', $license['License']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete License'), array('action' => 'delete', $license['License']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $license['License']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
	</ul>
</div>
