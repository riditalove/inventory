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
				<li class="breadcrumb-item active"><?php echo __('Stock'); ?></li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Stock List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10">
			<div class="card card-body">
				<h3 class="box-title m-b-0"><?php echo __('Edit Stock'); ?></h3>
				<p class="text-muted m-b-30 font-13"> </p>

				<?php echo $this->Form->create('Stock'); ?>
				<div class="row">
					<div class="col-md-6">
						<?php
						echo $this->Form->input('id');

						if (!empty($this->request->data['Material']['name'])) {
							echo $this->Form->label('material_id', 'Material Name');
							echo $this->Form->text('material_name', [
								'value' => $this->request->data['Material']['name'],
								'readonly' => true,
								'class' => 'form-control'
							]);
							echo $this->Form->hidden('material_id');
						} else {
							echo $this->Form->input('material_id'); // fallback
						}
						
						echo $this->Form->input('quantity');
						?>
					</div>
				</div>
               <br>
				<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
</div>


