<div class="takeaways form">
<?php echo $this->Form->create('Takeaway'); ?>
	<fieldset>
		<legend><?php echo __('Add Takeaway'); ?></legend>
	<?php
		echo $this->Form->input('inventory_id');
		echo $this->Form->input('stockout_date');
		echo $this->Form->input('date');
		echo $this->Form->input('remaining_quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Takeaways'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
	</ul>
</div>
