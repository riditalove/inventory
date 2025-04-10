
<div class="container-fluid countries index">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Country List'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-plus-circle"></i> Add New', array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
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
                                                                            <td><?php echo $this->Form->input('id'); ?></td>
                                                                            <td><?php echo $this->Form->input('name'); ?></td>
                                                                            <td><?php echo $this->Form->input('iso_code'); ?></td>
                                                                            <td><?php echo $this->Form->input('dial_code'); ?></td>
                                                                            <td><?php echo $this->Form->input('status'); ?></td>
                                                                        <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                                </tr>
                            </table>

                            <p class="paginginfo float-left">
                                <?php echo $this->Paginator->counter(array('format' => __('Showing {:start} to {:end} of {:count} records'))); ?>                   
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo __('Country List'); ?></h4>
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                                                                    <th><?php echo $this->Paginator->sort('iso_code'); ?></th>
                                                                    <th><?php echo $this->Paginator->sort('dial_code'); ?></th>
                                                                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                                                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($countries as $country): ?>
	<tr>
		<td><?php echo h($country['Country']['id']); ?></td>
		<td><?php echo h($country['Country']['name']); ?></td>
		<td><?php echo h($country['Country']['iso_code']); ?></td>
		<td><?php echo h($country['Country']['dial_code']); ?></td>
		<td><?php echo h($country['Country']['status']); ?></td>
		<td class="actions">
		<?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $country['Country']['id']), array('escape' => false, 'target' => '_blank')); ?>
		<?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $country['Country']['id']), array('escape' => false)); ?>
		<?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $country['Country']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $country['Country']['id']), 'escape' => false)); ?>
		</td>
	</tr>
<?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

