
<div class="container-fluid designation view">
    <section class="content-header">
        <h1>
            <?php echo __('Designation Details'); ?>        </h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?></li>
            <li class="active"><a href="javascript:;"><?php echo __('Designation Management'); ?></a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <?php echo __('Designation'); ?>                </div>
                    <div class="box-body">

                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Id'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($designation['Designation']['id']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Name'); ?></div>
                            <div class='col-md-9'>
                                <span class="label" style="background:<?php echo $designation['Designation']['color_code'];?>"><?php echo h($designation['Designation']['name']); ?></span>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Description'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($designation['Designation']['description']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Level'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($designation['Designation']['level']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Entry By'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($designation['Designation']['entry_by']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($designation['Designation']['status']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($designation['Designation']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($designation['Designation']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>
            </div>
        </div>
    </section>
</div>
