
<div class="container-fluid companytype view">
    <section class="content-header">
        <h1>
            <?php echo __('Company Type Details'); ?>        </h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home', array('controller'=>'pages','action' => 'home'), array('escape' => false)); ?></li>
            <li class="active"><a href="javascript:;"><?php echo __('Company Type Management'); ?></a></li>
        </ol>
    </section>
    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <?php echo __('Company Type'); ?>                </div>
                <div class="box-body">

                    	<div class='row'>
		<div class='col-md-3'><?php echo __('Id'); ?></div>
		<div class='col-md-9'>
			<?php echo h($companytype['Companytype']['id']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Name'); ?></div>
		<div class='col-md-9'>
			<?php echo h($companytype['Companytype']['name']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Description'); ?></div>
		<div class='col-md-9'>
			<?php echo h($companytype['Companytype']['description']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Entry By'); ?></div>
		<div class='col-md-9'>
			<?php echo h($companytype['Companytype']['entry_by']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Status'); ?></div>
		<div class='col-md-9'>
			<?php echo h($companytype['Companytype']['status']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Created'); ?></div>
		<div class='col-md-9'>
			<?php echo h($companytype['Companytype']['created']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Modified'); ?></div>
		<div class='col-md-9'>
			<?php echo h($companytype['Companytype']['modified']); ?>
			&nbsp;
		</div>
	</div>              </div>
            </div>
        </div>
    </div>
        </section>
</div>

