<?php
echo $this->Html->css(array('bootstrap-datepicker.min'));
echo $this->Html->script(array('bootstrap-datepicker.min'));
echo $this->Html->css('prnt', array('media' => 'print'));
?>
<script>
	$(document).ready(function () {
		$('#SrcDf,#SrcDt').datepicker({ todayHighlight: true, autoclose: true });
	});
</script>

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-6 col-8 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?>
				</li>
				<li class="breadcrumb-item active">Inventory</li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="panel panel-info">
						<div class="panel-body">
							<?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
							<table class="table table-condensed table-bordered table-hover contact-list no-wrap">
								<tr>
									<?php
									if (!empty($this->request->data['Src']['df'])) {
										$df = $this->request->data['Src']['df'];
									} else {
										$df = '';
									}
									if (!empty($this->request->data['Src']['dt'])) {
										$dt = $this->request->data['Src']['dt'];
									} else {
										$dt = '';
									}
									?>
									<th><?php echo __('Company'); ?></th>
									<td><?php echo $this->Form->input('company_id', array('label' => false, 'empty' => 'Please Select')); ?>
									</td>
									<td><?php echo $this->Form->input('df', array('readonly' => 'readonly', 'label' => 'Date From', 'value' => $df)); ?>
									</td>
									<td><?php echo $this->Form->input('dt', array('readonly' => 'readonly', 'label' => 'Date To', 'value' => $dt)); ?>
									</td>
									<td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?>
									</td>
								</tr>
							</table>

							<p class="paginginfo float-left">
								<?php
								echo $this->Paginator->counter(array(
									'format' => __('Showing {:start} to {:end} of {:count} records')
								));
								?>
							</p>
							<ul class="pagination float-right">
								<?php
								echo $this->Paginator->first();
								echo $this->Paginator->prev();
								echo $this->Paginator->numbers();
								echo $this->Paginator->next();
								echo $this->Paginator->last();
								?>
							</ul>
							<div class="clear clearfix"></div>

							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="row">
		<!-- column -->

		<!-- column -->
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Inventories List</h4>

					<div class="table-responsive">
						<table class="table table-condensed table-bordered table-hover contact-list no-wrap">
							<thead>
								<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('entry_date'); ?></th>
									<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
									<th><?php echo $this->Paginator->sort('raw_material_name'); ?></th>
									<th><?php echo $this->Paginator->sort('order_no'); ?></th>
									<th><?php echo $this->Paginator->sort('order_quantity'); ?></th>
									<th><?php echo $this->Paginator->sort('doc'); ?></th>
									<th><?php echo $this->Paginator->sort('purchase_cost'); ?></th>
									<th><?php echo $this->Paginator->sort('inventory_details'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
									<th class="takeaway"><?php echo __('Take Away'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($inventories as $inventory): ?>
									<tr>
										<td><?php echo h($inventory['Inventory']['id']); ?>&nbsp;</td>
										<td><?php echo h($inventory['Inventory']['entry_date']); ?>&nbsp;</td>
										<td><?php echo h($suppliers[$inventory['Inventory']['supplier_id']]); ?>&nbsp;</td>
										<td><?php echo h($inventory['Inventory']['raw_material_name']); ?>&nbsp;</td>
										<td><?php echo h($inventory['Inventory']['order_no']); ?>&nbsp;</td>
										<td><?php echo h($inventory['Inventory']['order_quantity']); ?>&nbsp;</td>
										<td><?php echo h($inventory['Inventory']['doc']); ?>&nbsp;</td>
										<td><?php echo h($inventory['Inventory']['purchase_cost']); ?>&nbsp;</td>
										<td><?php echo h($inventory['Inventory']['inventory_details']); ?>&nbsp;</td>
										<!-- <td><?php
										if ($asset['Asset']['last_status'] == 0) {
											$text = 'Check-in';
											$csscls = 'badge badge-success';
										} elseif ($asset['Asset']['last_status'] == 2) {
											$text = 'Checkout';
											$csscls = 'badge badge-danger';
										} else {
											$text = 'Checkout';
											$csscls = 'badge badge-danger';
										}
										echo $this->Html->link($text, array('controller' => 'assetcheckouts', 'action' => 'add', $inventory['Inventory']['id']), array('class' => $csscls, 'escape' => false));
										?></td> -->
										<td class="actions">
											<?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $inventory['Inventory']['id']), array('escape' => false)); ?>
											<?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $inventory['Inventory']['id']), array('escape' => false)); ?>
											<?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $inventory['Inventory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inventory['Inventory']['id']), 'escape' => false)); ?>
										</td>
										<!-- <?php pr($inventory['Takeaway']) ?> -->
								
										<td class="takeaway">
											<?php echo $this->Html->link(
												__('<i class="fa fa-sign-out-alt" title="Takeaway"></i>'),
												array('controller' => 'takeaways', 'action' => 'list_for_inventory', $inventory['Inventory']['id']),
												array('escape' => false)
											); ?>
										</td>



									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>


					</div>

				</div>
			</div>
		</div>
		<!-- column -->

	</div>

</div>






<!-- <div class="inventories index">
	<h2><?php echo __('Inventories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_date'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_material_name'); ?></th>
			<th><?php echo $this->Paginator->sort('order_no'); ?></th>
			<th><?php echo $this->Paginator->sort('order_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('doc'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('inventory_details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inventories as $inventory): ?>
	<tr>
		<td><?php echo h($inventory['Inventory']['id']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['entry_date']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['supplier_id']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['raw_material_name']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['order_no']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['order_quantity']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['doc']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['purchase_cost']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['inventory_details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inventory['Inventory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inventory['Inventory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inventory['Inventory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inventory['Inventory']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
	echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inventory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
	</ul>
</div> -->