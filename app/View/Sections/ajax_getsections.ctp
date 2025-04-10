<?php echo $this->Form->input($model . '.section_id', array('label' => 'Section', 'empty' => 'Please select', 'value' => $section_id)); ?>
<script>
    $(document).ready(function () {
        $("select").select2();
    });
</script>