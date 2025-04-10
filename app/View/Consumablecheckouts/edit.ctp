<div class="consumablecheckouts form">
<?php echo $this->Form->create('Consumablecheckout'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consumablecheckout'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('consumable_id');
		echo $this->Form->input('checkin_date');
		echo $this->Form->input('checkout_date');
		echo $this->Form->input('note');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Consumablecheckout.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Consumablecheckout.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Consumablecheckouts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumables'), array('controller' => 'consumables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumable'), array('controller' => 'consumables', 'action' => 'add')); ?> </li>
	</ul>
</div>
