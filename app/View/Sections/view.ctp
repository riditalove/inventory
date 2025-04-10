
<div class="container-fluid section view">
    <section class="content-header">
        <h1>
            <?php echo __('Section Details'); ?>        </h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?></li>
            <li class="active"><a href="javascript:;"><?php echo __('Section Management'); ?></a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <?php echo __('Section'); ?>                </div>
                    <div class="box-body">

                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Id'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($section['Section']['id']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Department'); ?></div>
                            <div class='col-md-9'>
                                <span class="label" style="background:<?php echo $section['Department']['color_code'];?>"><?php echo $this->Html->link($section['Department']['name'], array('controller' => 'departments', 'action' => 'view', $section['Department']['id'])); ?></span>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Name'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($section['Section']['name']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Description'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($section['Section']['description']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Entry By'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($section['Section']['entry_by']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $status[$section['Section']['status']]; ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($section['Section']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($section['Section']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>
            </div>
        </div>
    </section>
</div>
