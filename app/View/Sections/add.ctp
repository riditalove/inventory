<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Add Section</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Section List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Add Section</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Section', array('class' => 'form-horizontal')); ?>

                <div class="box-body">
                    <?php
                    echo $this->Form->input('company_id', array('empty' => 'Please select'));
                    ?>
                    <div id="div_department_id">
                        <?php echo $this->Form->input('department_id', array('empty' => 'Please select', 'required' => true)); ?>
                    </div>
                    <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('description', array('class' => 'textarea_editor', 'rows' => 5));
                    echo $this->Form->input('status');
                    ?>
                </div>
                <?php echo $this->Form->end(__('Submit')); ?>

            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#SectionCompanyId').change(function () {
            ajax_getdepartment_by_company($('#SectionCompanyId').val());
        });
    });
    function ajax_getdepartment_by_company(cid, uid) {
        if (cid !== '') {
            $.ajax({
                type: "POST",
                url: '<?php echo $this->Html->url(array('controller' => 'departments', 'action' => 'ajax_getdepartments')); ?>',
                data: {model: 'Section', company_id: cid, department_id: uid},
                success: function (data) {
                    $("#div_department_id").html(data);
                }
            });
        }
    }
</script>

<?php echo $this->Html->script(array('summernote.min')); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.textarea_editor').summernote();
    });
</script>
