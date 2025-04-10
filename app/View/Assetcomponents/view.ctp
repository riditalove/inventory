<div class="assetcomponents view">
<h2><?php echo __('Assetcomponent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Component Name'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['component_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetcomponent['Category']['name'], array('controller' => 'categories', 'action' => 'view', $assetcomponent['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Qty'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['min_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetcomponent['Company']['name'], array('controller' => 'companies', 'action' => 'view', $assetcomponent['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Number'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Cost'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['purchase_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial No'); ?></dt>
		<dd>
			<?php echo h($assetcomponent['Assetcomponent']['serial_no']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assetcomponent'), array('action' => 'edit', $assetcomponent['Assetcomponent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assetcomponent'), array('action' => 'delete', $assetcomponent['Assetcomponent']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assetcomponent['Assetcomponent']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Assetcomponents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assetcomponent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
