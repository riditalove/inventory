<div class="container-fluid country view">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Country Details'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Country List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Country Details'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box">
                    <div class="box-body">

                    	<div class='row'>
		<div class='col-md-3'><?php echo __('Id'); ?></div>
		<div class='col-md-9'>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Name'); ?></div>
		<div class='col-md-9'>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Iso Code'); ?></div>
		<div class='col-md-9'>
			<?php echo h($country['Country']['iso_code']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Dial Code'); ?></div>
		<div class='col-md-9'>
			<?php echo h($country['Country']['dial_code']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Status'); ?></div>
		<div class='col-md-9'>
			<?php echo h($country['Country']['status']); ?>
			&nbsp;
		</div>
	</div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="related">
        <h3><?php echo __('Related Customers'); ?></h3>
        <?php if (!empty($country['Customer'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Ownership'); ?></th>
		<th><?php echo __('Contact Number'); ?></th>
		<th><?php echo __('Currency'); ?></th>
		<th><?php echo __('Establishment Year'); ?></th>
		<th><?php echo __('Organizaion Structure'); ?></th>
		<th><?php echo __('Company Turn Over'); ?></th>
		<th><?php echo __('Price Level'); ?></th>
		<th><?php echo __('Work Type'); ?></th>
		<th><?php echo __('No Of Employee'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th><?php echo __('In House Design Structure'); ?></th>
		<th><?php echo __('Machineries Detail'); ?></th>
		<th><?php echo __('Lab Available'); ?></th>
		<th><?php echo __('Acreditation'); ?></th>
		<th><?php echo __('Equipment Detail'); ?></th>
		<th><?php echo __('Aql'); ?></th>
		<th><?php echo __('Production Capacity Per Month'); ?></th>
		<th><?php echo __('Production Category Detail'); ?></th>
		<th><?php echo __('Special Detail'); ?></th>
		<th><?php echo __('Minimum Order Value'); ?></th>
		<th><?php echo __('Minimum Order Lead Date'); ?></th>
		<th><?php echo __('Fob Port'); ?></th>
		<th><?php echo __('Factory Audit'); ?></th>
		<th><?php echo __('Audit Name'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
            </tr>
            	<?php foreach ($country['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['country_id']; ?></td>
			<td><?php echo $customer['ownership']; ?></td>
			<td><?php echo $customer['contact_number']; ?></td>
			<td><?php echo $customer['currency']; ?></td>
			<td><?php echo $customer['establishment_year']; ?></td>
			<td><?php echo $customer['organizaion_structure']; ?></td>
			<td><?php echo $customer['company_turn_over']; ?></td>
			<td><?php echo $customer['price_level']; ?></td>
			<td><?php echo $customer['work_type']; ?></td>
			<td><?php echo $customer['no_of_employee']; ?></td>
			<td><?php echo $customer['reference']; ?></td>
			<td><?php echo $customer['in_house_design_structure']; ?></td>
			<td><?php echo $customer['machineries_detail']; ?></td>
			<td><?php echo $customer['lab_available']; ?></td>
			<td><?php echo $customer['acreditation']; ?></td>
			<td><?php echo $customer['equipment_detail']; ?></td>
			<td><?php echo $customer['aql']; ?></td>
			<td><?php echo $customer['production_capacity_per_month']; ?></td>
			<td><?php echo $customer['production_category_detail']; ?></td>
			<td><?php echo $customer['special_detail']; ?></td>
			<td><?php echo $customer['minimum_order_value']; ?></td>
			<td><?php echo $customer['minimum_order_lead_date']; ?></td>
			<td><?php echo $customer['fob_port']; ?></td>
			<td><?php echo $customer['factory_audit']; ?></td>
			<td><?php echo $customer['audit_name']; ?></td>
			<td><?php echo $customer['comments']; ?></td>
			<td><?php echo $customer['status']; ?></td>
			<td><?php echo $customer['created']; ?></td>
			<td><?php echo $customer['modified']; ?></td>
			<td><?php echo $customer['entry_by']; ?></td>
			<td><?php echo $customer['edit_by']; ?></td>
		</tr>
	<?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>
    <div class="related">
        <h3><?php echo __('Related Developmentfabrics'); ?></h3>
        <?php if (!empty($country['Developmentfabric'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Development Id'); ?></th>
		<th><?php echo __('Developmentstyle Id'); ?></th>
		<th><?php echo __('Composition'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Construction'); ?></th>
		<th><?php echo __('Reference Number'); ?></th>
		<th><?php echo __('Mill'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Yarn Required For Sms'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
            </tr>
            	<?php foreach ($country['Developmentfabric'] as $developmentfabric): ?>
		<tr>
			<td><?php echo $developmentfabric['id']; ?></td>
			<td><?php echo $developmentfabric['development_id']; ?></td>
			<td><?php echo $developmentfabric['developmentstyle_id']; ?></td>
			<td><?php echo $developmentfabric['composition']; ?></td>
			<td><?php echo $developmentfabric['weight']; ?></td>
			<td><?php echo $developmentfabric['width']; ?></td>
			<td><?php echo $developmentfabric['construction']; ?></td>
			<td><?php echo $developmentfabric['reference_number']; ?></td>
			<td><?php echo $developmentfabric['mill']; ?></td>
			<td><?php echo $developmentfabric['country_id']; ?></td>
			<td><?php echo $developmentfabric['price']; ?></td>
			<td><?php echo $developmentfabric['yarn_required_for_sms']; ?></td>
			<td><?php echo $developmentfabric['entry_by']; ?></td>
			<td><?php echo $developmentfabric['edit_by']; ?></td>
			<td><?php echo $developmentfabric['status']; ?></td>
			<td><?php echo $developmentfabric['created']; ?></td>
			<td><?php echo $developmentfabric['modified']; ?></td>
		</tr>
	<?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>
    <div class="related">
        <h3><?php echo __('Related Materials'); ?></h3>
        <?php if (!empty($country['Material'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Name Local'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
            </tr>
            	<?php foreach ($country['Material'] as $material): ?>
		<tr>
			<td><?php echo $material['id']; ?></td>
			<td><?php echo $material['code']; ?></td>
			<td><?php echo $material['name']; ?></td>
			<td><?php echo $material['name_local']; ?></td>
			<td><?php echo $material['country_id']; ?></td>
			<td><?php echo $material['details']; ?></td>
			<td><?php echo $material['entry_by']; ?></td>
			<td><?php echo $material['edit_by']; ?></td>
			<td><?php echo $material['status']; ?></td>
			<td><?php echo $material['created']; ?></td>
			<td><?php echo $material['modified']; ?></td>
		</tr>
	<?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>
