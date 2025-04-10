<div class="container-fluid suppliers form">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Asset Maintenance'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Asset Maintenance List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Edit Assetmaintenance'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>

                <?php echo $this->Form->create('Assetmaintenance'); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('title');
                        echo $this->Form->input('supplier_id');
                        echo $this->Form->input('start_date', array('type' => 'text', 'class' => 'datepicker', 'readonly' => true, 'value' => date('Y-m-d')));
                        echo $this->Form->input('user_id',array('label'=>'Assign to Maintenance'));
                        echo $this->Form->input('file', array('type' => 'file', 'id' => 'input-file-now-custom-2', 'data-height'=>'90', 'class' => 'dropify', 'label' => 'Upload Parcel Document')) . '<br>';
                         echo $this->Form->input('is_warranty', array('type' => 'checkbox', 'class' => 'form-check-input'));
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('asset_id');
                        echo $this->Form->input('maintenance_type');
                        echo $this->Form->input('completion_date', array('type' => 'text', 'class' => 'datepicker', 'readonly' => true, 'value' => date('Y-m-d')));
                        echo $this->Form->input('cost');
                        echo $this->Form->input('notes',array('rows'=>3));
                        ?>
                    </div>
                </div>

                <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
            </div>
        </div>
    </div>
</div> 
<script type="text/javascript">
    $(document).ready(function () {
        $('#AssetPurchaseDate').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    });
</script>

<?php echo $this->Html->css(array('dropify.min')); ?>
<?php echo $this->Html->script(array('dropify.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>
<?php echo $this->Html->script(array('spectrum', 'uniform.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.form-check-input').uniform({
            wrapperClass: 'border-primary text-primary'
        });
    });
</script>
<style type="text/css">
    .border-primary {float:left;margin-right:5px}
</style>










