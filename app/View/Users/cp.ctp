<div class="page_title">
    <div class="title"><h1>Change Password</h1></div>
    <div class="pagenation">&nbsp;<?php echo $this->Html->link("Main", array('action' => 'index'), array('escape' => false)); ?> <i>/</i> Change Password</div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
            <div class="form-group">
                <label class="col-md-3 control-label">Old Password</label>
                <div class="col-md-9">                                            
                    <div class="input-group">
                        <?php echo $this->Form->input('current_password', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'password', 'required' => 'required')); ?>
                    </div>                                            
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">New Password</label>
                <div class="col-md-9">                                            
                    <div class="input-group">
                        <?php echo $this->Form->input('actpass', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'password', 'required' => 'required')); ?>
                    </div>                                            
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Confirm Password</label>
                <div class="col-md-9">                                            
                    <div class="input-group">
                        <?php echo $this->Form->input('password', array('label' => false, 'div' => false, 'class' => 'form-control', 'required' => 'required')); ?>
                    </div>                                            
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">&nbsp;</label>
                <div class="col-sm-9">
                    <?php echo $this->Form->submit('Change', array('div' => false, 'class' => 'btn btn-success')) ?>
                </div>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
