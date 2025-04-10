<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Add Parcel Receiver</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php //echo $this->Html->link("<i class='fa fa-list-ul'></i> Merchandising Team List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Add Parcel Receiver-2</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box-body">
                    <?php echo $this->Form->create('Merchandisingteam'); ?>
                    
                    <div id='areapermission'>
                        <?php
                        foreach ($companies as $key => $val) {
                            echo '<hr><div class="card-title">' . $val . '</div><hr><div class="row">';
                            $userlistssss = $userlists[$key];
                            //pr($userlistssss);
                            foreach ($userlistssss as $user) {
                                echo '<div class="col-md-3" id="' . $user['User']['id'] . '">';
                                $prof = '';
                                $files = IMAGES . 'u/' . $user['User']['id'] . '.png';
                                if (is_file($files)) {
                                    $prof .= $this->Html->image('u/' . $user['User']['id'] . '.png', array('class' => 'img-circle', 'alt' => 'User Image', 'width' => '45'));
                                } else {
                                    $prof .= '<div class="round round-' . $rounds[rand(0, 4)] . '">' . substr(trim($user['User']['name']), 0, 1) . '</div>';
                                }
                                $prof .= '&nbsp;';
                                $prof .= $user['User']['name'];
                                $prof .= '<br />';
                                $prof .= '<span class="badge" style="background:' . $departments[$user['User']['department_id']][1] . '">' . $this->Html->link($departments[$user['User']['department_id']][0], array('controller' => 'departments', 'action' => 'view', $user['User']['department_id'])) . '</span>';
                                $prof .= '<br />';
                                $prof .= '<span class="badge" style="background:' . $designations[$user['User']['designation_id']][1] . '">' . $this->Html->link($designations[$user['User']['designation_id']][0], array('controller' => 'departments', 'action' => 'view', $user['User']['designation_id'])) . '</span>';
                                echo $this->Form->input("permission." . $user['User']['id'], array('type' => 'checkbox', 'class' => 'form-check-input', 'value' => $user['User']['id'], 'label' => $prof));
                                echo '</div>';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <hr>    
                    
                    <?php
                echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
                </div>
            </div>
        </div>
    </div> 
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#MerchandisingteamCompanyId').change(function () {
            ajax_getuser_by_company($('#MerchandisingteamCompanyId').val());
        });
    });
    function ajax_getuser_by_company(cid) {
        if (cid !== '') {
            $.ajax({
                type: "POST",
                url: '<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'ajax_getuser_by_company')); ?>',
                data: {model: 'Merchandisingteam', company_id: cid},
                success: function (data) {
                    $("#div_user_id").html(data);
                }
            });
        }
    }
</script>


<?php echo $this->Html->script(array('spectrum', 'uniform.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.form-check-input').uniform({
            wrapperClass: 'border-primary text-primary'
        });
    });
</script>
<style type="text/css">
    .border-primary {float:left;margin-right:5px}
    .badge a{
        color:#fff;
    }
</style>