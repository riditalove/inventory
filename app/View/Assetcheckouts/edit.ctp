<div class="assetcheckouts form">
<?php echo $this->Form->create('Assetcheckout'); ?>
	<fieldset>
		<legend><?php echo __('Edit Assetcheckout'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('asset_id');
		echo $this->Form->input('checkout_date');
		echo $this->Form->input('recheck_in');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Assetcheckout.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Assetcheckout.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Assetcheckouts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assets'), array('controller' => 'assets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset'), array('controller' => 'assets', 'action' => 'add')); ?> </li>
	</ul>
</div>
