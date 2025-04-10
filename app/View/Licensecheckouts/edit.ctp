<div class="licensecheckouts form">
<?php echo $this->Form->create('Licensecheckout'); ?>
	<fieldset>
		<legend><?php echo __('Edit Licensecheckout'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('license_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Licensecheckout.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Licensecheckout.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Licensecheckouts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('controller' => 'licenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License'), array('controller' => 'licenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
