<div class="container-fluid user view">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('User Details'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> User List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('User Details'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box">
                    <div class="box-body">

                    	<div class='row'>
		<div class='col-md-3'><?php echo __('Id'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Company'); ?></div>
		<div class='col-md-9'>
			<?php echo $this->Html->link($user['Company']['name'], array('controller' => 'companies', 'action' => 'view', $user['Company']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Department'); ?></div>
		<div class='col-md-9'>
			<?php echo $this->Html->link($user['Department']['name'], array('controller' => 'departments', 'action' => 'view', $user['Department']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Section'); ?></div>
		<div class='col-md-9'>
			<?php echo $this->Html->link($user['Section']['name'], array('controller' => 'sections', 'action' => 'view', $user['Section']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Designation'); ?></div>
		<div class='col-md-9'>
			<?php echo $this->Html->link($user['Designation']['name'], array('controller' => 'designations', 'action' => 'view', $user['Designation']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Role'); ?></div>
		<div class='col-md-9'>
			<?php echo $this->Html->link($user['Role']['title'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Username'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Password'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Corporate Id No'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['corporate_id_no']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Name'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Mobile'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['mobile']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Phone'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Email'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Pabx'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['pabx']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Skype'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['skype']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Viber'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['viber']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Whatsapp'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['whatsapp']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Gender'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Religion'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['religion']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Blood Group'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['blood_group']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Marital Status'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['marital_status']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Father Name'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['father_name']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Mother Name'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['mother_name']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Present Address'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['present_address']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Permanent Address'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['permanent_address']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Emergency Person'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['emergency_person']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Emergency Address'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['emergency_address']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Emergency Phone'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['emergency_phone']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Emergency Relation'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['emergency_relation']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Nid'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['nid']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Machine Card No'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['machine_card_no']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Nationality'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['nationality']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Date Of Birth'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['date_of_birth']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Join Date'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['join_date']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Job Responsibility'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['job_responsibility']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Ending Date'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['ending_date']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Companies'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['companies']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Authorized Person'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['authorized_person']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Report To'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['report_to']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Balance'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['balance']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Paid'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['paid']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Advance'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['advance']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Passport No'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['passport_no']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Entry By'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['entry_by']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Edit By'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['edit_by']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Status'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Created'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</div>
	</div>	<div class='row'>
		<div class='col-md-3'><?php echo __('Modified'); ?></div>
		<div class='col-md-9'>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</div>
	</div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="related">
        <h3><?php echo __('Related Developments'); ?></h3>
        <?php if (!empty($user['Development'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Supplier Id'); ?></th>
		<th><?php echo __('Season'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Buyer Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Fabricdepartment Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Tech File Received Date'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Edit By'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
            </tr>
            	<?php foreach ($user['Development'] as $development): ?>
		<tr>
			<td><?php echo $development['id']; ?></td>
			<td><?php echo $development['customer_id']; ?></td>
			<td><?php echo $development['supplier_id']; ?></td>
			<td><?php echo $development['season']; ?></td>
			<td><?php echo $development['year']; ?></td>
			<td><?php echo $development['buyer_id']; ?></td>
			<td><?php echo $development['user_id']; ?></td>
			<td><?php echo $development['fabricdepartment_id']; ?></td>
			<td><?php echo $development['description']; ?></td>
			<td><?php echo $development['category_id']; ?></td>
			<td><?php echo $development['tech_file_received_date']; ?></td>
			<td><?php echo $development['entry_by']; ?></td>
			<td><?php echo $development['edit_by']; ?></td>
			<td><?php echo $development['status']; ?></td>
			<td><?php echo $development['created']; ?></td>
			<td><?php echo $development['modified']; ?></td>
		</tr>
	<?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>
    <div class="related">
        <h3><?php echo __('Related Logs'); ?></h3>
        <?php if (!empty($user['Log'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Ip'); ?></th>
		<th><?php echo __('Port'); ?></th>
		<th><?php echo __('Controller'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Created'); ?></th>
            </tr>
            	<?php foreach ($user['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['user_id']; ?></td>
			<td><?php echo $log['ip']; ?></td>
			<td><?php echo $log['port']; ?></td>
			<td><?php echo $log['controller']; ?></td>
			<td><?php echo $log['action']; ?></td>
			<td><?php echo $log['created']; ?></td>
		</tr>
	<?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>
    <div class="related">
        <h3><?php echo __('Related Notifications'); ?></h3>
        <?php if (!empty($user['Notification'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Typeid'); ?></th>
		<th><?php echo __('Type2'); ?></th>
		<th><?php echo __('Ext'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
            </tr>
            	<?php foreach ($user['Notification'] as $notification): ?>
		<tr>
			<td><?php echo $notification['id']; ?></td>
			<td><?php echo $notification['user_id']; ?></td>
			<td><?php echo $notification['data']; ?></td>
			<td><?php echo $notification['type']; ?></td>
			<td><?php echo $notification['typeid']; ?></td>
			<td><?php echo $notification['type2']; ?></td>
			<td><?php echo $notification['ext']; ?></td>
			<td><?php echo $notification['status']; ?></td>
			<td><?php echo $notification['created']; ?></td>
			<td><?php echo $notification['modified']; ?></td>
		</tr>
	<?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>
    <div class="related">
        <h3><?php echo __('Related Payments'); ?></h3>
        <?php if (!empty($user['Payment'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Payment Type'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('Advance'); ?></th>
		<th><?php echo __('Cause Advance'); ?></th>
		<th><?php echo __('Payment Date'); ?></th>
		<th><?php echo __('Entry By'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Created'); ?></th>
            </tr>
            	<?php foreach ($user['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['user_id']; ?></td>
			<td><?php echo $payment['payment_type']; ?></td>
			<td><?php echo $payment['amount']; ?></td>
			<td><?php echo $payment['balance']; ?></td>
			<td><?php echo $payment['advance']; ?></td>
			<td><?php echo $payment['cause_advance']; ?></td>
			<td><?php echo $payment['payment_date']; ?></td>
			<td><?php echo $payment['entry_by']; ?></td>
			<td><?php echo $payment['comments']; ?></td>
			<td><?php echo $payment['created']; ?></td>
		</tr>
	<?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>
