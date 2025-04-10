<?php echo $this->Form->create('User', array('class' => 'login-form', 'id' => 'loginform')); ?>
<div class="card mb-0">
    <div class="card-body">
        <div class="text-center mb-3">
            <?php echo $this->Html->image('logo/sl.png', array('alt' => 'homepage', 'class' => 'text-slate-300 border-slate-300 border-3 rounded-round p-1 mb-3 mt-1', 'style' => 'width:100px')); ?>
            <h5 class="mb-0">Login to your account</h5>
            <span class="d-block text-muted">Your credentials</span>
        </div>

        <div class="form-group form-group-feedback form-group-feedback-left">
            <?php echo $this->Form->input('username', array('type' => 'text', 'placeholder' => 'Username', 'label' => FALSE, 'div' => FALSE)); ?>
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
        </div>

        <div class="form-group form-group-feedback form-group-feedback-left">
            <?php echo $this->Form->input('password', array('type' => 'password', 'placeholder' => 'Password', 'label' => FALSE, 'div' => FALSE)); ?>
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
        </div>

        <div class="form-group d-flex align-items-center">
            <div class="form-check mb-0">
                <label class="form-check-label">
                    <input id="rememberme" type="checkbox" name="data[User][rememberme]" value="forever" class="form-input-styled" data-fouc>
                    Remember
                </label>
            </div>

            <a href="javascript:;" class="ml-auto">Forgot password?</a>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
        </div>

        <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="javascript:;">Terms &amp; Conditions</a> and <a href="javascript:;">Cookie Policy</a></span>
    </div>
</div>
<?php echo $this->Form->end(); ?>

