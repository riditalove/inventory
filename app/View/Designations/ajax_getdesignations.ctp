<?php echo $this->Form->input($model . '.designation_id', array('label' => 'Designation', 'empty' => 'Please select', 'value' => $designation_id)); ?>
<script>
    $(document).ready(function () {
        $("select").select2();
    });
</script>