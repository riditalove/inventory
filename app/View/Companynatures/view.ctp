
<div class="container-fluid companynature view">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Company Nature Details</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Company Nature List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <?php echo __('Company Nature'); ?>                </div>
                    <div class="box-body">

                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Name'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($companynature['Companynature']['name']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Description'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($companynature['Companynature']['description']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $status[$companynature['Companynature']['status']]; ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($companynature['Companynature']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($companynature['Companynature']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>
            </div>
        </div>
    </section>
</div>

