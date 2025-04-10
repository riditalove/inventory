<div class="takeaways view">
<h2><?php echo __('Takeaway'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($takeaway['Takeaway']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inventory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($takeaway['Inventory']['id'], array('controller' => 'inventories', 'action' => 'view', $takeaway['Inventory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stockout Date'); ?></dt>
		<dd>
			<?php echo h($takeaway['Takeaway']['stockout_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($takeaway['Takeaway']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remaining Quantity'); ?></dt>
		<dd>
			<?php echo h($takeaway['Takeaway']['remaining_quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Takeaway'), array('action' => 'edit', $takeaway['Takeaway']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Takeaway'), array('action' => 'delete', $takeaway['Takeaway']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $takeaway['Takeaway']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Takeaways'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Takeaway'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
	</ul>
</div>
