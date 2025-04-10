<div class="manufacturers view">
<h2><?php echo __('Manufacturer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Support Phone'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['support_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Support Email'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['support_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manufacturer'), array('action' => 'edit', $manufacturer['Manufacturer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manufacturer'), array('action' => 'delete', $manufacturer['Manufacturer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $manufacturer['Manufacturer']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
