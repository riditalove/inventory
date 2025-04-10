<div class="container-fluid suppliers form">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active"><?php echo __('Material'); ?></li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Material List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10">
			<div class="card card-body">
				<h3 class="box-title m-b-0"><?php echo __('Edit Material'); ?></h3>
				<p class="text-muted m-b-30 font-13"> </p>

				<?php echo $this->Form->create('Material'); ?>
				<div class="row">
					<div class="col-md-6">
						<?php
						echo $this->Form->input('id');
						echo $this->Form->input('name');
						?>
					</div>
					
				</div>
				<br>
				<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
</div>

<!-- <div class="materials form">
<?php echo $this->Form->create('Material'); ?>
	<fieldset>
		<legend><?php echo __('Edit Material'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Material.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Material.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Materials'), array('action' => 'index')); ?></li>
	</ul>
</div> -->