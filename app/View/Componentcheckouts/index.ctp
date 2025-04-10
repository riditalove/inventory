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
                <li class="breadcrumb-item active">Accessory Check-in/out</li>
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
                    <h4 class="card-title">Accessories Check-in/out List</h4>

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
                                //pr($componentcheckouts);
                                foreach ($componentcheckouts as $componentcheckout): ?>
                                    <tr>
                                        <td><?php echo h($componentcheckout['Componentcheckout']['id']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($componentcheckout['Assetcomponent']['component_name'], array('controller' => 'accessories', 'action' => 'view', $componentcheckout['Assetcomponent']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($componentcheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $componentcheckout['User']['id'])); ?>
                                        </td>
                                        <td><?php echo h($componentcheckout['Componentcheckout']['checkin_date']); ?>&nbsp;</td>
                                        <td><?php echo h($componentcheckout['Componentcheckout']['checkout_date']); ?>&nbsp;</td>
                                        <td><?php echo $pstatus[$componentcheckout['Componentcheckout']['status']]; ?>&nbsp;</td>
                                        <td><?php echo h($componentcheckout['Componentcheckout']['note']); ?>&nbsp;</td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $componentcheckout['Componentcheckout']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $componentcheckout['Componentcheckout']['id']), array('confirm' => __('Are you sure you want to delete?'), 'escape' => false)); ?>
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












<div class="componentcheckouts index">
	<h2><?php echo __('Componentcheckouts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_id'); ?></th>
			<th><?php echo $this->Paginator->sort('checkin_date'); ?></th>
			<th><?php echo $this->Paginator->sort('checkout_date'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($componentcheckouts as $componentcheckout): ?>
	<tr>
		<td><?php echo h($componentcheckout['Componentcheckout']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($componentcheckout['User']['name'], array('controller' => 'users', 'action' => 'view', $componentcheckout['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($componentcheckout['Asset']['name'], array('controller' => 'assets', 'action' => 'view', $componentcheckout['Asset']['id'])); ?>
		</td>
		<td><?php echo h($componentcheckout['Componentcheckout']['checkin_date']); ?>&nbsp;</td>
		<td><?php echo h($componentcheckout['Componentcheckout']['checkout_date']); ?>&nbsp;</td>
		<td><?php echo h($componentcheckout['Componentcheckout']['note']); ?>&nbsp;</td>
		<td><?php echo h($componentcheckout['Componentcheckout']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $componentcheckout['Componentcheckout']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $componentcheckout['Componentcheckout']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $componentcheckout['Componentcheckout']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $componentcheckout['Componentcheckout']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Componentcheckout'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assets'), array('controller' => 'assets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset'), array('controller' => 'assets', 'action' => 'add')); ?> </li>
	</ul>
</div>
