<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Company List</li>
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
                    <h4 class="card-title">Company List</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('companytype_id', 'Type'); ?></th>
                                    <th><?php echo $this->Paginator->sort('companynature_id', 'Nature'); ?></th>
                                    <th><?php echo $this->Paginator->sort('registration_no', 'Reg.No.'); ?></th>
                                    <th><?php echo $this->Paginator->sort('registration_date', 'Reg.Date'); ?></th>
                                    <th><?php echo $this->Paginator->sort('weekend'); ?></th>
                                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($companies as $company): ?>
                                    <tr>
                                        <td><?php echo h($company['Company']['id']); ?></td>
                                        <td><?php echo h($company['Company']['name']); ?></td>
                                        <td>
                                            <?php echo $this->Html->link($company['Companytype']['name'], array('controller' => 'companytypes', 'action' => 'view', $company['Companytype']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($company['Companynature']['name'], array('controller' => 'companynatures', 'action' => 'view', $company['Companynature']['id'])); ?>
                                        </td>

                                        <td><?php echo h($company['Company']['registration_no']); ?></td>
                                        <td><?php echo h($company['Company']['registration_date']); ?></td>
                                        <td><?php
                                            $weekend = explode(',', $company['Company']['weekend']);
                                            foreach ($weekend as $v) {
                                                echo '<span class="badge badge-info">' . $weekdays[$v] . '</span> ';
                                            }
                                            ?></td>
                                        <td><?php echo $status[$company['Company']['status']]; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $company['Company']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $company['Company']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $company['Company']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $company['Company']['id']), 'escape' => false)); ?>
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









