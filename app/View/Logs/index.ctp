<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Log List</li>
            </ol>
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
                                    <th><?php echo __('Name'); ?></th>
                                    <td><?php echo $this->Form->input('nm', array('label' => false, 'style' => 'width:90%')); ?></td>
                                    <th><?php echo __('Phone'); ?></th>
                                    <td><?php echo $this->Form->input('ph', array('label' => false, 'style' => 'width:90%')); ?></td>
                                    <th><?php echo __('Email'); ?></th>
                                    <td><?php echo $this->Form->input('em', array('label' => false, 'style' => 'width:90%')); ?></td>
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
                    <h4 class="card-title">Log List</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('ip'); ?></th>
                                    <th><?php echo $this->Paginator->sort('port'); ?></th>
                                    <th><?php echo $this->Paginator->sort('controller'); ?></th>
                                    <th><?php echo $this->Paginator->sort('action'); ?></th>
                                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($logs as $log): ?>
                                    <tr>
                                        <td><?php echo h($log['Log']['id']); ?></td>
                                        <td>
                                            <?php echo $this->Html->link($log['User']['name'], array('controller' => 'users', 'action' => 'view', $log['User']['id'])); ?>
                                        </td>
                                        <td><?php echo h($log['Log']['ip']); ?></td>
                                        <td><?php echo h($log['Log']['port']); ?></td>
                                        <td><?php echo h($log['Log']['controller']); ?></td>
                                        <td><?php echo h($log['Log']['action']); ?></td>
                                        <td><?php echo h($log['Log']['created']); ?></td>
                                        <td class="actions">
                                            <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $log['Log']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $log['Log']['id']), 'escape' => false)); ?>
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





