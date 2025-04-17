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
				<li class="breadcrumb-item active">Materials</li>
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
							<!-- Search Form -->
							<?php echo $this->Form->create('Stock', ['type' => 'get', 'class' => 'form-inline']); ?>
							<table class="table table-condensed table-bordered table-hover contact-list no-wrap">
								<tr>
									<th><?php echo __('Material Name'); ?></th>
									<td>
										<?php
										echo $this->Form->input('material_id', [
											'label' => false,
											'empty' => 'Please Select',
											'options' => $materials,
											'class' => 'form-control'
										]);
										?>
									</td>
									<td>
										<?php echo $this->Form->button('Search', ['class' => 'btn btn-info', 'name' => 'btnsrc']); ?>
									</td>
								</tr>
							</table>
							<?php echo $this->Form->end(); ?>

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
					<h4 class="card-title">Material List</h4>

					<div class="table-responsive">
						<table class="table table-condensed table-bordered table-hover contact-list no-wrap">
							<thead>
								<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('name'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>

							</thead>

							<tbody>
								<?php foreach ($filteredMaterials as $material): ?>
									<tr>
										<td>
											<?php echo $this->Html->link($material['Material']['id'], array('controller' => 'materials', 'action' => 'view', $material['Material']['id'])); ?>
										</td>
										<td>
											<?php echo $this->Html->link($material['Material']['name'], array('controller' => 'materials', 'action' => 'view', $material['Material']['id'])); ?>
										</td>

										<td class="actions">
											<?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $material['Material']['id']), array('escape' => false)); ?>
											<?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $material['Material']['id']), array('escape' => false)); ?>
											<?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $material['Material']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $material['Material']['id']), 'escape' => false)); ?>
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