<div class="container-fluid config view">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Config Details'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Config List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Config Details'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box">
                    <div class="box-body">

                    	<div class='row'>
		<div class='col-md-3'><?php echo __('Id'); ?></div>
		<div class='col-md-9'>
			<?php echo h($config['Config']['id']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Key'); ?></div>
		<div class='col-md-9'>
			<?php echo h($config['Config']['key']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Value'); ?></div>
		<div class='col-md-9'>
			<?php echo h($config['Config']['value']); ?>
			&nbsp;
		</div>
	</div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

