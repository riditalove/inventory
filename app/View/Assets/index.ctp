<?php
echo $this->Html->css(array('bootstrap-datepicker.min'));
echo $this->Html->script(array('bootstrap-datepicker.min'));
echo $this->Html->css('prnt', array('media' => 'print'));
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
                <li class="breadcrumb-item active">Assets</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

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
                                    <th><?php echo __('Company'); ?></th>
                                    <td><?php echo $this->Form->input('company_id', array('label' => false, 'empty' => 'Please Select')); ?></td>
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
                    <h4 class="card-title">Assets List</h4>

                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('serial_no'); ?></th>
                                    <th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('order_number'); ?></th>
                                    <th><?php echo $this->Paginator->sort('purchase_cost'); ?></th>
                                    <th><?php echo $this->Paginator->sort('warranty'); ?></th>
                                    <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('status','Check-in/out'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($assets as $asset): ?>
                                    <tr>
                                        <td><?php echo h($asset['Asset']['id']); ?>&nbsp;</td>
                                        <td><?php echo h($asset['Asset']['name']); ?>&nbsp;</td>
                                        <td><?php echo h($asset['Asset']['serial_no']); ?>&nbsp;</td>
                                        <td><?php echo h($asset['Asset']['purchase_date']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($asset['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $asset['Supplier']['id'])); ?>
                                        </td>
                                        <td><?php echo h($asset['Asset']['order_number']); ?>&nbsp;</td>
                                        <td><?php echo h($asset['Asset']['purchase_cost']); ?>&nbsp;</td>
                                        <td><?php echo h($asset['Asset']['warranty']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($asset['Company']['name'], array('controller' => 'companies', 'action' => 'view', $asset['Company']['id'])); ?>
                                        </td>
                                        <td><?php
                                            if ($asset['Asset']['last_status'] == 0) {
                                                $text = 'Check-in';
                                                $csscls = 'badge badge-success';
                                            } elseif ($asset['Asset']['last_status'] == 2) {
                                                $text = 'Checkout';
                                                $csscls = 'badge badge-danger';
                                            }else{
                                                $text = 'Checkout';
                                                $csscls = 'badge badge-danger';
                                            }
                                            echo $this->Html->link($text, array('controller' => 'assetcheckouts', 'action' => 'add', $asset['Asset']['id']), array('class' => $csscls, 'escape' => false));
                                            ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $asset['Asset']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $asset['Asset']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $asset['Asset']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $asset['Asset']['id']), 'escape' => false)); ?>
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


