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
                    <h4 class="card-title">Accessories List</h4>

                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('accessory_name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('manufacturer_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('order_number'); ?></th>
                                    <th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('purchase_cost'); ?></th>
                                    <th><?php echo $this->Paginator->sort('quantity'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($accessories as $accessory): ?>
                                    <tr>
                                        <td><?php echo h($accessory['Accessory']['id']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($accessory['Company']['name'], array('controller' => 'companies', 'action' => 'view', $accessory['Company']['id'])); ?>
                                        </td>
                                        <td><?php echo h($accessory['Accessory']['accessory_name']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($accessory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $accessory['Category']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($accessory['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $accessory['Supplier']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($accessory['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $accessory['Manufacturer']['id'])); ?>
                                        </td>
                                        <td><?php echo h($accessory['Accessory']['order_number']); ?>&nbsp;</td>
                                        <td><?php echo h($accessory['Accessory']['purchase_date']); ?>&nbsp;</td>
                                        <td><?php echo h($accessory['Accessory']['purchase_cost']); ?>&nbsp;</td>
                                        <td><?php echo h($accessory['Accessory']['quantity']); ?>&nbsp;</td>
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











