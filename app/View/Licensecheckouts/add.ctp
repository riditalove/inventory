<div class="container-fluid suppliers form">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('License Check-in/out'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> License Check-in/out List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('License Check-in/out'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>

                <?php echo $this->Form->create('Licensecheckout'); ?>
                <div class="row">
                    <div class="col-md-10">
                        <table class="table text-nowrap">
                            <tr><td>License Name</td><td><?php echo $licenses['License']['asset_name']; ?></td></tr>
                            <tr><td>Serial No.</td><td><?php echo $licenses['License']['serial_no']; ?></td></tr>
                            <?php if (!empty($this->request->data['Licensecheckout']['user_id'])) { ?>
                                <tr><td>Allocate to </td><td><?php echo $this->request->data['User']['name']; ?></td></tr>
                            <?php } ?>
                        </table>
                        <br>
                        <?php
                        
                        //pr($this->request->data);
                        if (empty($this->request->data['Licensecheckout']['user_id'])) {
                            echo $this->Form->input('user_id', array('label' => 'Allocate to'));
                            echo $this->Form->input('checkin_date', array('label' => 'Check-in Date', 'type' => 'text', 'class' => 'datepicker', 'readonly' => true, 'value' => date('Y-m-d')));
                        }
                        if (!empty($this->request->data['Licensecheckout']['user_id'])) {
                            unset($pstatus[0]);
                            echo $this->Form->input('status', array('label' => 'Change Status', 'empty' => 'Please Select', 'onchange' => 'getstatus(this.value)', 'options' => $pstatus));
                        }
                        ?>
                        <div id="Licenserecheckid">
                            <?php echo $this->Form->input('recheck_in', array('label' => 'Reallocate to', 'empty' => 'Please Select', 'options' => $users)); ?>
                        </div>

                        <?php echo $this->Form->input('note', array('rows' => 2)); ?>

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
        $('#LicensePurchaseDate').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        $('#Licenserecheckid').css('display', 'none');
    });

    function getstatus(id) {
        if (id == 2) {
            $('#Licenserecheckid').css('display', 'block');
        } else {
            $('#Licenserecheckid').css('display', 'none');
        }
    }
</script>

