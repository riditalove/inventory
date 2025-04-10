<?php
echo $this->Form->input($model . '.team_leader', array('label' => 'Team Leader', 'type' => 'select', 'empty' => 'Please Select', 'options' => $users, 'value' => $user_id, 'required' => true));
?>
<script>
    $(document).ready(function () {
        $("select").select2();
    });
</script>