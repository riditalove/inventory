<div class="container-fluid countries form">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Edit Country'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Country List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Edit Country'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>

                <?php echo $this->Form->create('Country'); ?>
                	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('iso_code');
		echo $this->Form->input('dial_code');
		echo $this->Form->input('status');
	?>
                	<?php echo $this->Form->end(__('Submit')); ?>
            </div>
        </div>
    </div>
</div> 

