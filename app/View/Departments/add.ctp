<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Add Department</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Department List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Add Department</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Department', array('class' => 'form-horizontal')); ?>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Company</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('company_id', array('label' => false, 'empty' => 'Please Select')); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Name</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('name', array('label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Color Code</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('color', array('class' => 'gradient-colorpicker', 'required' => true, 'label' => false)); ?>
                        <?php echo $this->Form->input('color_code', array('type' => 'hidden', 'required' => true)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Description</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('description', array('class' => 'textarea_editor', 'rows' => 5, 'placeholder' => 'Place some text here', 'label' => false)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 text-right control-label col-form-label">Level</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('level', array('type' => 'number', 'label' => false, 'required' => true)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('in_graph', array('type' => 'checkbox')); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('status'); ?>
                    </div>
                </div>


                <div class="form-group m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <?php echo $this->Form->end(__('Submit')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<?php echo $this->Html->script(array('spectrum')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.gradient-colorpicker').spectrum({
            showPalette: true,
            palette: ColorPalette,
            change: function (c) {
                $('#DepartmentColorCode').val(c.toHexString());
            }
        });
    });
</script>
<?php echo $this->Html->script(array('summernote.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.textarea_editor').summernote();
    });
</script>

