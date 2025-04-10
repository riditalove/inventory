<div class="container">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<br><br>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php //echo $this->Html->link("<i class='fa fa-list-ul'></i> Travel Expensee  List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); 
			?>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card card-body">
				<h3 class="box-title font-weight-medium text-uppercase m-b-0">STOCK OUT</h3>
				<p class="text-muted m-b-30 font-13"> </p>


				<div class="row">
					<div class="col-md-3">
						<label><b>Id</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockout['Stockout']['id']); ?>
						</p>
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-md-3">
						<label><b>Out Date</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockout['Stockout']['out_date']); ?>
						</p>
					</div>
				</div>
				<br>


				<div class="row">
					<div class="col-md-3">
						<label><b>Remaining Stocks</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockout['Stockout']['remaining_stocks']); ?>
						</p>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-3">
						<label><b>Material</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo $this->Html->link(
								$stockout['Material']['name'],
								array('controller' => 'materials', 'action' => 'view', $stockout['Material']['id']),
								array('escape' => false, 'style' => 'color: white;')
							); ?>
						</p>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-3">
						<label><b>Quantity Removed</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockout['Stockout']['quantity_removed']); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>


</div>




<!-- <div class="stockouts view">
<h2><?php echo __('Stockout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stockout['Stockout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Out Date'); ?></dt>
		<dd>
			<?php echo h($stockout['Stockout']['out_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remaining Stocks'); ?></dt>
		<dd>
			<?php echo h($stockout['Stockout']['remaining_stocks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stockout['Material']['name'], array('controller' => 'materials', 'action' => 'view', $stockout['Material']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity Removed'); ?></dt>
		<dd>
			<?php echo h($stockout['Stockout']['quantity_removed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stockout'), array('action' => 'edit', $stockout['Stockout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stockout'), array('action' => 'delete', $stockout['Stockout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $stockout['Stockout']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Stockouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stockout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
	</ul>
</div> -->