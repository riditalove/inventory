<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Licenses</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php //echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

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
                                    <th><?php echo __('Company'); ?></th>
                                    <td><?php echo $this->Form->input('company_id', array('label' => false, 'empty' => 'Please Select')); ?></td>
                                    <th><?php echo __('Name'); ?></th>
                                    <td><?php echo $this->Form->input('nm', array('label' => false, 'style' => 'width:90%')); ?></td>
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
                    <h4 class="card-title">Licenses List</h4>
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('asset_name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('product_key'); ?></th>
                                    <th><?php echo $this->Paginator->sort('seats'); ?></th>
                                    <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('manufacturer_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('licensed_to_name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('licensed_to_email'); ?></th>
                                    <th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('order_number'); ?></th>
                                    <th><?php echo $this->Paginator->sort('purchase_cost'); ?></th>
                                    <th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('expiration_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('termination_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('purchase_order_number'); ?></th>
                                    <th><?php echo $this->Paginator->sort('notes'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($licenses as $license): ?>
                                    <tr>
                                        <td><?php echo h($license['License']['id']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['asset_name']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($license['Category']['name'], array('controller' => 'categories', 'action' => 'view', $license['Category']['id'])); ?>
                                        </td>
                                        <td><?php echo h($license['License']['product_key']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['seats']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($license['Company']['name'], array('controller' => 'companies', 'action' => 'view', $license['Company']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($license['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $license['Manufacturer']['id'])); ?>
                                        </td>
                                        <td><?php echo h($license['License']['licensed_to_name']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['licensed_to_email']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($license['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $license['Supplier']['id'])); ?>
                                        </td>
                                        <td><?php echo h($license['License']['order_number']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['purchase_cost']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['purchase_date']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['expiration_date']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['termination_date']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['purchase_order_number']); ?>&nbsp;</td>
                                        <td><?php echo h($license['License']['notes']); ?>&nbsp;</td>
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

