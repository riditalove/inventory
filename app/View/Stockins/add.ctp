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
				<li class="breadcrumb-item active"><?php echo __('Stockin'); ?></li>
			</ol>
		</div>
		<div class="col-md-6 col-4 align-self-center">
			<?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Stock In List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10">
			<div class="card card-body">
				<h3 class="box-title m-b-0"><?php echo __('Add Stock In'); ?></h3>
				<p class="text-muted m-b-30 font-13"> </p>

				<?php echo $this->Form->create('Stockin'); ?>
				<div class="row">
					<div class="col-md-6">
						<?php
						echo $this->Form->input('material_id');
						echo $this->Form->input('date', array('type' => 'text', 'class' => 'datepicker', 'readonly' => true, 'value' => date('Y-m-d')));
						echo $this->Form->input('quantity');
						echo $this->Form->input('quantity_unit', [
							'label' => 'Select Unit',
							'type' => 'select',
							'options' => ['kg' => 'Kg', 'g' => 'G', 'l' => 'L', 'ml' => 'ML', 'm' => 'M', 'cm' => 'CM', 'mm' => 'MM', 'pcs' => 'Pcs', 'box' => 'Box', 'roll' => 'Roll', 'bottle' => 'Bottle', 'piece' => 'Piece', 'unit' => 'Unit', 'set' => 'Set', 'pair' => 'Pair', 'dozen' => 'Dozen', 'pack' => 'Pack', 'case' => 'Case', 'carton' => 'Carton','rim' => 'Rim', 'pallet' => 'Pallet', 'ton' => 'Ton', 'yard' => 'Yard', 'foot' => 'Foot', 'inch' => 'Inch', 'square meter' => 'Square Meter', 'cubic meter' => 'Cubic Meter'],
							'empty' => 'Select Unit',
							'class' => 'form-control'
						]);
						
						echo $this->Form->input('unit_price',[
							'label' => 'Price Per Unit',
						]);

						echo $this->Form->input('currency',[
							'label' => 'Select Currency',
							'type' => 'select',
							'options' => ['USD' => 'USD', 'EUR' => 'EUR', 'GBP' => 'GBP', 'INR' => 'INR', 'JPY' => 'JPY', 'CNY' => 'CNY', 'AUD' => 'AUD', 'CAD' => 'CAD', 'CHF' => 'CHF', 'NZD' => 'NZD', 'SGD' => 'SGD', 'HKD' => 'HKD', 'SEK' => 'SEK', 'NOK' => 'NOK', 'MXN' => 'MXN', 'BRL' => 'BRL'],
							'empty' => 'Select Currency',
							'class' => 'form-control'
						]);


						echo $this->Form->input('supplier_id', [
							'label' => 'Supplier',
							'type' => 'select',
							'options' => $suppliers,
							'empty' => 'Select Supplier',
							'class' => 'form-control'
						]);
						
						?>
					</div>

				</div>
				<br>
				<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
</div>

