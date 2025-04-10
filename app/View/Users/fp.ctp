<div class="page_title">

    <div class="pagenation">&nbsp;<?php echo $this->Html->link("Main", '/', array('escape' => false)); ?> <i>/</i> Recover Password</div>
    <br>
</div>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo $this->Form->create('User'); ?>
                        <fieldset>
                            <div class="row">
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group ">

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-adjust"></i>
                                            </span>
                                            <?php echo $this->Form->input('username', array('label' => false, 'div' => false, 'class' => 'form-control', 'autofocus' => 'on', 'placeholder' => 'email or mobile')); ?>
                                        </div>
                                    </div>
                                    <small>(Please place your email or mobile)</small>
                                    <?php echo $this->Form->submit('Recover', array('div' => false, 'class' => 'btn btn-lg btn-primary btn-block button_login g-recaptcha')) ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="pull-left">
                                    <h5 class="forget"><?php echo $this->Html->link("Register Here", array('controller' => 'members', 'action' => 'add')); ?></h5>
                                </div>
                                <div class="pull-right">
                                    <h5 class="forget"><?php echo $this->Html->link("Back To Login", array('controller' => 'users', 'action' => 'login')); ?></h5>
                                </div>
                            </div>
                        </fieldset>
                        <?php echo $this->Form->end(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>