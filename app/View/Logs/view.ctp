
<div class="container-fluid log view">
    <section class="content-header">
        <h1>
            <?php echo __('Log Details'); ?>        </h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home', array('controller'=>'pages','action' => 'home'), array('escape' => false)); ?></li>
            <li class="active"><a href="javascript:;"><?php echo __('Log Management'); ?></a></li>
        </ol>
    </section>
    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <?php echo __('Log'); ?>                </div>
                <div class="box-body">

                    	<div class='row'>
		<div class='col-md-3'><?php echo __('Id'); ?></div>
		<div class='col-md-9'>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('User'); ?></div>
		<div class='col-md-9'>
			<?php echo $this->Html->link($log['User']['name'], array('controller' => 'users', 'action' => 'view', $log['User']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Ip'); ?></div>
		<div class='col-md-9'>
			<?php echo h($log['Log']['ip']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Port'); ?></div>
		<div class='col-md-9'>
			<?php echo h($log['Log']['port']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Controller'); ?></div>
		<div class='col-md-9'>
			<?php echo h($log['Log']['controller']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Action'); ?></div>
		<div class='col-md-9'>
			<?php echo h($log['Log']['action']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Created'); ?></div>
		<div class='col-md-9'>
			<?php echo h($log['Log']['created']); ?>
			&nbsp;
		</div>
	</div>              </div>
            </div>
        </div>
    </div>
        </section>
</div>

