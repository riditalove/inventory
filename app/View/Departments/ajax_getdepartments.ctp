<?php echo $this->Form->input($model . '.department_id', array('label' => 'Department', 'empty' => 'Please select', 'value' => $department_id)); ?>
<script>
    $(document).ready(function () {
        $("select").select2();
    });
    $('#UserDepartmentId').change(function () {
        ajax_getsection_by_department($('#UserDepartmentId').val());
        ajax_getdesignation_by_department($('#UserDepartmentId').val());
    });
    $('#UsertransferDepartmentId').change(function () {
        ajax_getsection_by_department($('#UsertransferDepartmentId').val());
        ajax_getdesignation_by_department($('#UsertransferDepartmentId').val());
    });
    $('#AppraisalkraDepartmentId').change(function () {
        ajax_getdept_weight($('#AppraisalkraDepartmentId').val());
    });
    $('#SrcDepartmentId').change(function () {
        ajax_getdesignation_by_department($('#SrcDepartmentId').val());
    });
</script>