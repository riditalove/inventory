
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
                <li class="breadcrumb-item active">Assetmaintenances</li>
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
                    <h4 class="card-title">Asset Maintenance List</h4>

                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('asset_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('maintenance_type'); ?></th>
                                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                                    <th><?php echo $this->Paginator->sort('is_warranty'); ?></th>
                                    <th><?php echo $this->Paginator->sort('start_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('completion_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('maintenance_time'); ?></th>
                                    <th><?php echo $this->Paginator->sort('notes'); ?></th>
                                    <th><?php echo $this->Paginator->sort('cost'); ?></th>
                                    <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($assetmaintenances as $assetmaintenance): ?>
                                    <tr>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['id']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($assetmaintenance['Asset']['name'], array('controller' => 'assets', 'action' => 'view', $assetmaintenance['Asset']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($assetmaintenance['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $assetmaintenance['Supplier']['id'])); ?>
                                        </td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['maintenance_type']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['title']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['is_warranty']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['start_date']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['completion_date']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['maintenance_time']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['notes']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['cost']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($assetmaintenance['User']['name'], array('controller' => 'users', 'action' => 'view', $assetmaintenance['User']['id'])); ?>
                                        </td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['created']); ?>&nbsp;</td>
                                        <td><?php echo h($assetmaintenance['Assetmaintenance']['modified']); ?>&nbsp;</td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $assetmaintenance['Assetmaintenance']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $assetmaintenance['Assetmaintenance']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $assetmaintenance['Assetmaintenance']['id']), array('confirm' => __('Are you sure you want to delete?'), 'escape' => false)); ?>
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


