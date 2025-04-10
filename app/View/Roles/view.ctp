
<div class="container-fluid role view">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Role Details</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Role List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <?php echo __('Role'); ?>                </div>
                    <div class="box-body">
                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Title'); ?></div>
                            <div class='col-md-9'>
                                <span class="label" style="background:<?php echo $role['Role']['color_code']; ?>"><?php echo h($role['Role']['title']); ?></span>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Description'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($role['Role']['description']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Roles'); ?></div>
                            <div class='col-md-9'>
                                <style>
                                    .show-grid .col-md-12{
                                        border: 1px solid #ababab;
                                        margin: 10px 0px 3px 17px;
                                        width: 97%;
                                        background-color: #d8d8d8;
                                        border-radius: 3px;
                                    }
                                    .show-grid .col-md-2{
                                        border: 1px solid green;
                                        margin-left: 17px;
                                        border-radius: 3px;
                                    }
                                </style>
                                <?php
                                $roles = json_decode($role['Role']['roles'], true);
                                foreach ($roles as $key => $value) {
                                    echo "<div class='row show-grid'>
                                        <div class='col-md-12'><strong>" . str_replace("Controller", "", $key) . "</strong></div>";
                                    foreach ($value as $k => $v) {
                                        if ($v != "0") {
                                            echo "<div class='col-md-2'>$v</div>";
                                        }
                                    }
                                    echo "</div>";
                                }
                                ?>
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $status[$role['Role']['status']]; ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($role['Role']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($role['Role']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>
            </div>
        </div>
    </section>
</div>