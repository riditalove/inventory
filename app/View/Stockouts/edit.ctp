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
				<li class="breadcrumb-item active"><?php echo __('Stockout'); ?></li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Stock Out List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10">
			<div class="card card-body">
				<h3 class="box-title m-b-0"><?php echo __('Add Stock out'); ?></h3>
				<p class="text-muted m-b-30 font-13"> </p>

				<?php echo $this->Form->create('Stockout'); ?>
				<div class="row">
					<div class="col-md-6">
						<?php
						echo $this->Form->input('id');
						echo $this->Form->input('out_date', array('type' => 'text', 'class' => 'datepicker', 'readonly' => true, 'value' => date('Y-m-d')));
						echo $this->Form->input('remaining_stocks', [
							'label' => 'Remaining Stocks',
							'type' => 'text',
							'readonly' => true,
							'value' => isset($this->request->data['Stockout']['remaining_stocks']) 
								? $this->request->data['Stockout']['remaining_stocks'] 
								: ''
						]);
						
						echo $this->Form->input('quantity_removed');
						echo $this->Form->input('note');
						?>
					</div>

				</div>
                <br>
				<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
	const materialDropdown = document.getElementById('StockoutMaterialId');
	const remainingStockInput = document.getElementById('StockoutRemainingStocks');

	materialDropdown.addEventListener('change', function () {
		const materialId = this.value;
		if (materialId) {
			fetch(`/assetmanagement/stockouts/get_stock_quantity/${materialId}`)
				.then(response => response.json())
				.then(data => {
					remainingStockInput.value = data.quantity;
				})
				.catch(error => {
					console.error("Error fetching stock:", error);
					remainingStockInput.value = '0';
				});
		} else {
			remainingStockInput.value = '';
		}
	});
});
</script>


