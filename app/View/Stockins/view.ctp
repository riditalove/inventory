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
				<h3 class="box-title font-weight-medium text-uppercase m-b-0">STOCK IN</h3>
				<p class="text-muted m-b-30 font-13"> </p>


				<div class="row">
					<div class="col-md-3">
						<label><b>Id</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockin['Stockin']['id']); ?>
						</p>
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-md-3">
						<label><b>Name</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo $this->Html->link(
								$stockin['Material']['name'],
								array('controller' => 'materials', 'action' => 'view', $stockin['Material']['id']),
								array('escape' => false, 'style' => 'color: white;')
							); ?>
						</p>
					</div>
				</div>
				<br>


				<div class="row">
					<div class="col-md-3">
						<label><b>Date</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockin['Stockin']['date']); ?>
						</p>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-3">
						<label><b>Quantity</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockin['Stockin']['quantity']); ?>
						</p>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-3">
						<label><b>Size</b></label>
					</div>
					<div class="col-md-2">
						<p style="margin: 0;" class="badge bg-info">
							<?php echo h($stockin['Stockin']['size']); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>


</div>

