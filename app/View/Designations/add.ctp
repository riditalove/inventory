
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Add Designation</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Designation List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Add Designation</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Designation', array('class' => 'form-horizontal')); ?>

                <?php echo $this->Form->input('company_id', array('empty' => 'Please Select')); ?>
                <div id="div_department_id">
                    <?php echo $this->Form->input('department_id', array('empty' => 'Please Select')); ?>
                </div>
                <?php echo $this->Form->input('name'); ?>
                <?php echo $this->Form->input('color', array('class' => 'gradient-colorpicker', 'required' => true)); ?>
                <?php echo $this->Form->input('color_code', array('type' => 'hidden', 'required' => true)); ?>
                <?php echo $this->Form->input('description', array('class' => 'textarea_editor', 'placeholder' => 'Place some text here', 'rows' => 5, 'label' => false)); ?>
                <?php echo $this->Form->input('level', array('type' => 'number', 'required' => true)); ?>
                <?php echo $this->Form->input('status'); ?>

                <?php echo $this->Form->end(__('Submit')); ?>
            </div>
        </div>
    </div> 
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#DesignationCompanyId').change(function () {
            ajax_getdepartment_by_company($('#DesignationCompanyId').val());
        });
    });
    function ajax_getdepartment_by_company(cid, uid) {
        if (cid !== '') {
            $.ajax({
                type: "POST",
                url: '<?php echo $this->Html->url(array('controller' => 'departments', 'action' => 'ajax_getdepartments')); ?>',
                data: {model: 'Designation', company_id: cid, department_id: uid},
                success: function (data) {
                    $("#div_department_id").html(data);
                }
            });
        }
    }
</script>

<?php echo $this->Html->script(array('spectrum')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.gradient-colorpicker').spectrum({
            showPalette: true,
            palette: ColorPalette,
            change: function (c) {
                $('#DesignationColorCode').val(c.toHexString());
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
