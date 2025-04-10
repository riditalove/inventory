
<div class="container-fluid logs form">
    <section class="content-header">
        <h1>
            <?php echo __('Log Management'); ?>            <small>Entry Form</small>
        </h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home', array('controller'=>'pages','action' => 'home'), array('escape' => false)); ?></li>
            <li><a href="javascript:;">Forms</a></li>
            <li class="active"><?php echo __('Log Management'); ?></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo __('Edit Log'); ?></h3>
                    </div>
                    
                    <?php echo $this->Form->create('Log'); ?>
                    <div class="box-body">
                    
                    	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('ip');
		echo $this->Form->input('port');
		echo $this->Form->input('controller');
		echo $this->Form->input('action');
	?>
                    </div>
                    	<?php echo $this->Form->end(__('Submit')); ?>
                    
                </div>
            </div>
        </div>
    </section>

</div>

