<div class="container-fluid users form">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Edit User'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> User List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <!-- Tabbed nav -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Employee Profile</h5>
        </div>

        <div class="card-body">

            <div class="pb-1">

                <div class="navbar navbar-expand-xl navbar-light navbar-component rounded-top mb-0">

                    <div class="navbar-collapse collapse" id="navbar-demo-light">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a href="#tab-light-1" class="navbar-nav-link active" data-toggle="tab">
                                    <i class="icon-cube3 mr-2"></i>
                                    Info
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#tab-light-2" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-puzzle4 mr-2"></i>
                                    Assets
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#tab-light-3" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-puzzle4 mr-2"></i>
                                    accessories
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#tab-light-4" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-puzzle4 mr-2"></i>
                                    Licenses
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#tab-light-5" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-puzzle4 mr-2"></i>
                                    Consumables
                                </a>
                            </li>


                            <li class="nav-item dropdown">
                                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-make-group mr-2"></i>
                                    Menu with tabs
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#tab-light-4" class="dropdown-item" data-toggle="tab"><i class="icon-train2"></i> Train tickets</a>
                                    <a href="#tab-light-5" class="dropdown-item" data-toggle="tab"><i class="icon-bus"></i> Bus tickets</a>
                                    <a href="#tab-light-6" class="dropdown-item" data-toggle="tab"><i class="icon-car"></i> Car rental</a>
                                </div>
                            </li>
                        </ul>


                    </div>
                </div>

                <div class="card card-body border-top-0 rounded-0 rounded-bottom tab-content">
                    <div class="tab-pane fade active show" id="tab-light-1">
                        <?php echo $this->Form->create('User'); ?>
                        <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('company_id');
                        echo $this->Form->input('department_id');
                        echo $this->Form->input('section_id');
                        echo $this->Form->input('designation_id');
                        echo $this->Form->input('role_id');
                        echo $this->Form->input('username');
                        echo $this->Form->input('password');
                        echo $this->Form->input('corporate_id_no');
                        echo $this->Form->input('name');
                        echo $this->Form->input('mobile');
                        echo $this->Form->input('phone');
                        echo $this->Form->input('email');
                        echo $this->Form->input('pabx');
                        echo $this->Form->input('skype');
                        echo $this->Form->input('viber');
                        echo $this->Form->input('whatsapp');
                        echo $this->Form->input('gender');
                        echo $this->Form->input('religion');
                        echo $this->Form->input('blood_group');
                        echo $this->Form->input('marital_status');
                        echo $this->Form->input('father_name');
                        echo $this->Form->input('mother_name');
                        echo $this->Form->input('present_address');
                        echo $this->Form->input('permanent_address');
                        echo $this->Form->input('emergency_person');
                        echo $this->Form->input('emergency_address');
                        echo $this->Form->input('emergency_phone');
                        echo $this->Form->input('emergency_relation');
                        echo $this->Form->input('nid');
                        echo $this->Form->input('machine_card_no');
                        echo $this->Form->input('nationality');
                        echo $this->Form->input('date_of_birth');
                        echo $this->Form->input('join_date');
                        echo $this->Form->input('job_responsibility');
                        echo $this->Form->input('ending_date');
                        echo $this->Form->input('companies');
                        echo $this->Form->input('authorized_person');
                        echo $this->Form->input('report_to');
                        echo $this->Form->input('balance');
                        echo $this->Form->input('paid');
                        echo $this->Form->input('advance');
                        echo $this->Form->input('passport_no');
                        echo $this->Form->input('entry_by');
                        echo $this->Form->input('edit_by');
                        echo $this->Form->input('status');
                        ?>
                        <?php echo $this->Form->end(__('Submit')); ?>
                    </div>
                    <div class="tab-pane fade" id="tab-light-2">
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
                                        <th><?php echo $this->Paginator->sort('status'); ?></th>
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
                                            <td><?php echo $status[$asset['Asset']['status']]; ?>&nbsp;</td>
                                            <td class="actions">
                                                <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $asset['Asset']['id']), array('escape' => false)); ?>
                                                <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $asset['Asset']['id']), array('escape' => false)); ?>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-light-3">
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
                                        <th class="actions"><?php echo __('Actions'); ?></th>
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
                                            <td class="actions">
                                                <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $accessory['Accessory']['id']), array('escape' => false)); ?>
                                                <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $accessory['Accessory']['id']), array('escape' => false)); ?>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-light-4">
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
                                        <th class="actions"><?php echo __('Actions'); ?></th>
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
                                            <td class="actions">
                                                <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $license['License']['id']), array('escape' => false)); ?>
                                                <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $license['License']['id']), array('escape' => false)); ?>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-light-5">
                        <h4 class="card-title">Consumables List</h4>

                        <div class="table-responsive">
                            <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('consumable_name'); ?></th>
                                        <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('manufacturer_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('item_no'); ?></th>
                                        <th><?php echo $this->Paginator->sort('order_number'); ?></th>
                                        <th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
                                        <th><?php echo $this->Paginator->sort('purchase_cost'); ?></th>
                                        <th><?php echo $this->Paginator->sort('quantity'); ?></th>
                                        <th><?php echo $this->Paginator->sort('min_qty'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($consumables as $consumable): ?>
                                        <tr>
                                            <td><?php echo h($consumable['Consumable']['id']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($consumable['Company']['name'], array('controller' => 'companies', 'action' => 'view', $consumable['Company']['id'])); ?>
                                            </td>
                                            <td><?php echo h($consumable['Consumable']['consumable_name']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($consumable['Category']['name'], array('controller' => 'categories', 'action' => 'view', $consumable['Category']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($consumable['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $consumable['Manufacturer']['id'])); ?>
                                            </td>
                                            <td><?php echo h($consumable['Consumable']['item_no']); ?>&nbsp;</td>
                                            <td><?php echo h($consumable['Consumable']['order_number']); ?>&nbsp;</td>
                                            <td><?php echo h($consumable['Consumable']['purchase_date']); ?>&nbsp;</td>
                                            <td><?php echo h($consumable['Consumable']['purchase_cost']); ?>&nbsp;</td>
                                            <td><?php echo h($consumable['Consumable']['quantity']); ?>&nbsp;</td>
                                            <td><?php echo h($consumable['Consumable']['min_qty']); ?>&nbsp;</td>
                                            <td class="actions">
                                                <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $consumable['Consumable']['id']), array('escape' => false)); ?>
                                                <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $consumable['Consumable']['id']), array('escape' => false)); ?>
                                                <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $consumable['Consumable']['id']), array('confirm' => __('Are you sure you want to delete?'), 'escape' => false)); ?>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-light-6">
                        Me smallness is existence attending he enjoyment favourite affection. Feebly do engage of narrow.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /tabbed nav -->


</div> 

