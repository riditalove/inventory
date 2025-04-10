<?php
echo $this->Html->css(array('bootstrap-datepicker.min'));
echo $this->Html->script(array('bootstrap-datepicker.min'));
?>
<script>
    $(document).ready(function () {
        $('#SrcDf,#SrcDt').datepicker({todayHighlight: true, autoclose: true});
    });
</script>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Consumable Check-in/out</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
                            <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                                <tr>
                                    <?php
                                    if (!empty($this->request->data['Src']['df'])) {
                                        $df = $this->request->data['Src']['df'];
                                    } else {
                                        $df = '';
                                    }
                                    if (!empty($this->request->data['Src']['dt'])) {
                                        $dt = $this->request->data['Src']['dt'];
                                    } else {
                                        $dt = '';
                                    }
                                    ?>
                                    <td><?php echo $this->Form->input('accessory_name'); ?></td>
                                    <td><?php echo $this->Form->input('serial_no'); ?></td>
                                    <td><?php echo $this->Form->input('df', array('readonly' => 'readonly', 'label' => 'Date From', 'value' => $df)); ?></td>
                                    <td><?php echo $this->Form->input('dt', array('readonly' => 'readonly', 'label' => 'Date To', 'value' => $dt)); ?></td>
                                    <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                                </tr>
                            </table>

                            <p class="paginginfo float-left">
                                <?php
                                echo $this->Paginator->counter(array(
                                    'format' => __('Showing {:start} to {:end} of {:count} records')
                                ));
                                ?>                    
                            </p>
                            <ul class="pagination float-right">
                                <?php
                                echo $this->Paginator->first();
                                echo $this->Paginator->prev();
                                echo $this->Paginator->numbers();
                                echo $this->Paginator->next();
                                echo $this->Paginator->last();
                                ?>
                            </ul> 
                            <div class="clear clearfix"></div>

                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <!-- column -->

        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Consumable Check-in/out List</h4>

                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('accessory_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('user_id','Allocate to'); ?></th>
                                    <th><?php echo $this->Paginator->sort('checkout_date','Check-in Date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('checkout_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th><?php echo $this->Paginator->sort('note'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                //pr($consumablecheckouts);
                                foreach ($consumablecheckouts as $consumablecheckout): ?>
                                    <tr>
                                        <td><?php echo h($consumablecheckout['Consumablecheckout']['id']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($consumablecheckout['Consumable']['accessory_name'], array('controller' => 'accessories', 'action' => 'view', $consumablecheckout['Consumable']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($consumablecheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $consumablecheckout['User']['id'])); ?>
                                        </td>
                                        <td><?php echo h($consumablecheckout['Consumablecheckout']['checkin_date']); ?>&nbsp;</td>
                                        <td><?php echo h($consumablecheckout['Consumablecheckout']['checkout_date']); ?>&nbsp;</td>
                                        <td><?php echo $pstatus[$consumablecheckout['Consumablecheckout']['status']]; ?>&nbsp;</td>
                                        <td><?php echo h($consumablecheckout['Consumablecheckout']['note']); ?>&nbsp;</td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $consumablecheckout['Consumablecheckout']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $consumablecheckout['Consumablecheckout']['id']), array('confirm' => __('Are you sure you want to delete?'), 'escape' => false)); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- column -->

    </div>

</div>
