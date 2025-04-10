<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Edit Config</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Config List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Edit Config</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Config', array('class' => 'form-horizontal', 'type' => 'file')); ?>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">COMPANY NAME</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('COMPANY_NAME', array('required' => true, 'value' => COMPANY_NAME, 'label' => FALSE)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">COMPANY WEB</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('COMPANY_WEB', array('required' => true, 'value' => COMPANY_WEB, 'label' => FALSE)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">COMPANY EMAIL</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('COMPANY_EMAIL', array('required' => true, 'value' => COMPANY_EMAIL, 'label' => FALSE)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">ADMIN</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('ADMIN', array('required' => true, 'value' => ADMIN, 'label' => FALSE, 'options' => $roles)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">HR</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('HR', array('required' => true, 'value' => HR, 'label' => FALSE, 'options' => $roles)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">EXCLUDE DESIGNATION</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('EXCLUDE_DESIGNATION', array('required' => true, 'value' => EXCLUDE_DESIGNATION, 'label' => FALSE, 'options' => $designations)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">SUPPLIER ROLE</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('SUPPLIER_ROLE', array('required' => true, 'value' => SUPPLIER_ROLE, 'label' => FALSE, 'options' => $roles)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">LOGIN BACKGROUND</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('User.image', array('label' => 'Only .jpg image', 'type' => 'file', 'class' => 'dropify')); ?>
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
<?php echo $this->Html->css(array('dropify.min')); ?>
<?php echo $this->Html->script(array('dropify.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>