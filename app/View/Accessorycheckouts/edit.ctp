<div class="container-fluid suppliers form">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Accessory Checkout'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Accessory Checkout List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Accessory Checkout'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>

                <?php echo $this->Form->create('Accessorycheckout'); ?>
                <div class="row">
                    <div class="col-md-10">
                        <table class="table text-nowrap">
                            <tr><td>Accessory Name</td><td><?php echo $accessories['Accessory']['accessory_name']; ?></td></tr>
                            <tr><td>Accessory Category</td><td><?php echo $accessories['Category']['name']; ?></td></tr>
                        </table>
                        <br>
                        <?php
                        //pr($accessories);
                        echo $this->Form->input('id');
                        echo $this->Form->input('user_id',array('label'=>'Checkout to'));
                        echo $this->Form->input('checkout_date', array('type' => 'text', 'class' => 'datepicker', 'readonly' => true, 'value' => date('Y-m-d')));
                        echo $this->Form->input('recheck_in',array('label'=>'Re-checkout','empty'=>'Please Select','options'=>$users));
                        echo $this->Form->input('note',array('rows'=>3));
                        ?>
                    </div>
                    
                </div>
                <br>
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
