<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Add Company</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Company List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Add Company</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Company', array('class' => 'form-horizontal')); ?>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Company Type</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('companytype_id', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Company Nature</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('companynature_id', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Name</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('name', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Address</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('address', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Registration No</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('registration_no', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Registration Date</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('registration_date', array('type' => 'text', 'label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Reader Device No.</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('reader_device_no', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Google Address</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('google_address', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('weekend', array('type'=>'select', 'multiple' => 'checkbox', 'options' => $weekdays)); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('status'); ?>
                    </div>
                </div>

                <div class="form-group m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <?php echo $this->Form->end(__('Submit')); ?>

                    </div>
                </div>


            </div>
        </div>

    </div> 

</div>

<?php echo $this->Html->css(array('jquery-clockpicker.min')); ?>
<?php echo $this->Html->script(array('jquery-clockpicker.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#CompanyRegistrationDate').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        $('.clockpicker').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        })

    })

</script>