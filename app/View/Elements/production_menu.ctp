<li class="box-label"><a href="javascript:;">Production Steps</a></li>

<?php $production_id = $this->request->params['pass'][0]; ?>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            dataType: "html",
            type: "POST",
            evalScripts: true,
            url: '<?php echo $this->Html->url(array('controller' => 'productions', 'action' => 'ajax_getsteps')); ?>',
            data: ({production_id: <?php echo $production_id; ?>}),
            success: function (data) {
                var resp = data.split('!');
                console.log(resp);
                for (i = 0; i < resp.length; i++) {
                    $('#prod' + resp[i]).remove();
                }
            }
        });
    });
</script>

<li class="divider"></li>

	<?php
	echo "<li>" . $this->Html->link('<i class="fa fa-address-book"></i> Edit', array('controller' => 'productions', 'action' => 'edit', $production_id), array('escape' => false)) . "</li>";
	foreach ($prod_steps as $control => $prod_step) {
		echo "<li id='prod$control'>" . $this->Html->link('<i class="fa fa-address-book"></i> ' . $prod_step, array('controller' => $control, 'action' => 'index', $production_id), array('escape' => false)) . "</li>";
	}
	echo "<hr>".' <li class="box-label"><a href="javascript:;">Follow Up</a></li>'."<hr>";
	foreach ($followUpItems as $keyAsController => $valueAsLabelname) {
		echo "<li id='prod$keyAsController'>" . $this->Html->link('<i class="fa fa-address-book"></i> ' . $valueAsLabelname, array('controller' => $keyAsController, 'action' => 'index', $production_id), array('escape' => false)) . "</li>";
	}
	echo "<hr>".' <li class="box-label"><a href="javascript:;">Validation </a></li>'."<hr>";
	foreach ($validationItems as $keyAsController => $valueAsLabelname) {
		echo "<li id='prod$keyAsController'>" . $this->Html->link('<i class="fa fa-address-book"></i> ' . $valueAsLabelname, array('controller' => $keyAsController, 'action' => 'index', $production_id), array('escape' => false)) . "</li>";
	}
	echo "<hr>".' <li class="box-label"><a href="javascript:;">Test </a></li>'."<hr>";
	foreach ($testItems as $keyAsController => $valueAsLabelname) {
		echo "<li id='prod$keyAsController'>" . $this->Html->link('<i class="fa fa-address-book"></i> ' . $valueAsLabelname, array('controller' => $keyAsController, 'action' => 'index', $production_id), array('escape' => false)) . "</li>";
	}
	echo "<hr>".' <li class="box-label"><a href="javascript:;">Commercial</a></li>'."<hr>";
	foreach ($commercialItems as $keyAsController => $valueAsLabelname) {
		echo "<li id='prod$keyAsController'>" . $this->Html->link('<i class="fa fa-address-book"></i> ' . $valueAsLabelname, array('controller' => $keyAsController, 'action' => 'index', $production_id), array('escape' => false)) . "</li>";
	}
	?>


