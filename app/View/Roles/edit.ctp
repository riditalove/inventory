<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Edit Role</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Role List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Edit Role</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box-body">

                    <?php echo $this->Form->create('Role'); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('title'); ?>
                        </div>
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('description'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        echo $this->Form->input('id');
                        $selvals = json_decode($this->request->data['Role']['roles'], true);
                        foreach ($menudata as $key => $value) {
                            echo '<div class="col-md-6" id="' . $key . '"><strong>' . str_replace('Controller', ' Management', $key) . '</strong>&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="_sel(this, \'' . $key . '\')">Check All</a><br />';
                            foreach ($value as $k => $val) {
                                if (strstr($val, 'ajax')) {
                                    echo '<div style="display:none">';
                                    echo $this->Form->input("Role.roles.$key.$val", array('type' => 'checkbox', 'class' => 'form-check-input', 'checked' => true, 'value' => $val));
                                    echo '</div>';
                                } else {
                                    echo '<div class="col-md-12">';
                                    if (isset($selvals[$key][$val]) && $selvals[$key][$val] == $val) {
                                        echo $this->Form->input("Role.roles.$key.$val", array('type' => 'checkbox', 'class' => 'form-check-input', 'checked' => true, 'value' => $val));
                                    } else {
                                        echo $this->Form->input("Role.roles.$key.$val", array('type' => 'checkbox', 'class' => 'form-check-input', 'value' => $val));
                                    }
                                    echo '</div>';
                                }
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <hr>    
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('status', array('type' => 'checkbox', 'class' => 'form-check-input')); ?>
                        </div>
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('color', array('type' => 'text', 'value' => $this->request->data['Role']['color_code'], 'class' => 'gradient-colorpicker')); ?>
                            <?php echo $this->Form->input('color_code', array('type' => 'hidden', 'required' => true)); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
                </div>
            </div>
        </div>
    </div> 
</div>
<?php echo $this->Html->script(array('spectrum', 'uniform.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.gradient-colorpicker').spectrum({
            showPalette: true,
            palette: ColorPalette,
            change: function (c) {
                $('#RoleColorCode').val(c.toHexString());
            }
        });
        $('.form-check-input').uniform({
            wrapperClass: 'border-primary text-primary'
        });
    });
</script>
<style type="text/css">
    .border-primary {float:left;margin-right:5px}
</style>

