<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Department Details</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Department List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Department Details</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box">
                    <div class="box-header">
                        <?php echo __('Department'); ?>                </div>
                    <div class="box-body">

                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Id'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($department['Department']['id']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Company'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $this->Html->link($department['Company']['name'], array('controller' => 'companies', 'action' => 'view', $department['Company']['id'])); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Name'); ?></div>
                            <div class='col-md-9'>
                                <span class="label" style="background:<?php echo $department['Department']['color_code'];?>"><?php echo h($department['Department']['name']); ?></span>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Description'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($department['Department']['description']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Level'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($department['Department']['level']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Entry By'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($department['Department']['entry_by']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($department['Department']['status']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($department['Department']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($department['Department']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>

            </div>
        </div>

    </div>


</div>


