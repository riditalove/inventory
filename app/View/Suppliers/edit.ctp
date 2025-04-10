<div class="container-fluid suppliers form">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Edit Supplier'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Supplier List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Edit Supplier'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>

                <?php echo $this->Form->create('Supplier'); ?>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('name');
                echo $this->Form->input('locations');
                echo $this->Form->input('ownership');
                echo $this->Form->input('contact_number');
                echo $this->Form->input('currency');
                echo $this->Form->input('establishment_year');
                echo $this->Form->input('payment_term');
                echo $this->Form->input('organizaion_structure');
                echo $this->Form->input('company_turn_over');
                echo $this->Form->input('price_level');
                echo $this->Form->input('work_type');
                echo $this->Form->input('no_of_employee');
                echo $this->Form->input('reference');
                echo $this->Form->input('in_house_design_structure');
                echo $this->Form->input('machineries_detail');
                echo $this->Form->input('lab_available');
                echo $this->Form->input('acreditation');
                echo $this->Form->input('equipment_detail');
                echo $this->Form->input('aql');
                echo $this->Form->input('production_capacity_per_month');
                echo $this->Form->input('production_category_detail');
                echo $this->Form->input('special_detail');
                echo $this->Form->input('minimum_order_value');
                echo $this->Form->input('minimum_order_lead_date');
                echo $this->Form->input('fob_port');
                echo $this->Form->input('factory_audit');
                echo $this->Form->input('audit_name');
                echo $this->Form->input('comments');
                echo $this->Form->input('status');
                ?>
                <?php echo $this->Form->end(__('Submit')); ?>
            </div>
        </div>
    </div>
</div> 

