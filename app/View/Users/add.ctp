<div class="container-fluid users form">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Add User'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> User List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Add User'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>

                <?php echo $this->Form->create('User'); ?>
                <?php
                echo $this->Form->input('company_id');
                echo $this->Form->input('department_id');
                echo $this->Form->input('section_id');
                echo $this->Form->input('designation_id');
                echo $this->Form->input('role_id');
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('corporate_id_no');
                echo $this->Form->input('name');
                echo $this->Form->input('mobile');
                echo $this->Form->input('phone');
                echo $this->Form->input('email');
                echo $this->Form->input('pabx');
                echo $this->Form->input('skype');
                echo $this->Form->input('viber');
                echo $this->Form->input('whatsapp');
                echo $this->Form->input('gender');
                echo $this->Form->input('religion');
                echo $this->Form->input('blood_group');
                echo $this->Form->input('marital_status');
                echo $this->Form->input('father_name');
                echo $this->Form->input('mother_name');
                echo $this->Form->input('present_address');
                echo $this->Form->input('permanent_address');
                echo $this->Form->input('emergency_person');
                echo $this->Form->input('emergency_address');
                echo $this->Form->input('emergency_phone');
                echo $this->Form->input('emergency_relation');
                echo $this->Form->input('nid');
                echo $this->Form->input('machine_card_no');
                echo $this->Form->input('nationality');
                echo $this->Form->input('date_of_birth');
                echo $this->Form->input('join_date');
                echo $this->Form->input('job_responsibility');
                echo $this->Form->input('ending_date');
                echo $this->Form->input('companies');
                echo $this->Form->input('authorized_person');
                echo $this->Form->input('report_to');
                echo $this->Form->input('balance');
                echo $this->Form->input('paid');
                echo $this->Form->input('advance');
                echo $this->Form->input('passport_no');
                echo $this->Form->input('entry_by');
                echo $this->Form->input('edit_by');
                echo $this->Form->input('status');
                ?>
                <?php echo $this->Form->end(__('Submit')); ?>
            </div>
        </div>
    </div>
</div> 

