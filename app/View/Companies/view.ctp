
<div class="container-fluid company view">
    
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Company Details</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Company List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>
    
    
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">Company Details</div>
                    <div class="box-body">

                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Company Type'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $this->Html->link($company['Companytype']['name'], array('controller' => 'company_types', 'action' => 'view', $company['Companytype']['id'])); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Company Nature'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $this->Html->link($company['Companynature']['name'], array('controller' => 'company_natures', 'action' => 'view', $company['Companynature']['id'])); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Name'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($company['Company']['name']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Address'); ?></div>
                            <div class='col-md-9'>
                                <?php echo nl2br($company['Company']['address']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Registration No'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($company['Company']['registration_no']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Registration Date'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($company['Company']['registration_date']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Reader Device No.'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($company['Company']['reader_device_no']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Google Address'); ?></div>
                            <div class='col-md-9'>
                                <iframe width="100%" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $company['Company']['google_address']; ?>&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $status[$company['Company']['status']]; ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($company['Company']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($company['Company']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>              </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="related">
    <h3><?php echo __('Related Departments'); ?></h3>
    <?php if (!empty($company['Department'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Description'); ?></th>
                <th><?php echo __('Level'); ?></th>
                <th><?php echo __('Status'); ?></th>
            </tr>
            <?php foreach ($company['Department'] as $department): ?>
                <tr>
                    <td><?php echo $department['id']; ?></td>
                    <td><span class="label" style="background:<?php echo $department['color_code']; ?>"><?php echo $department['name']; ?></span></td>
                    <td><?php echo $department['description']; ?></td>
                    <td><?php echo $department['level']; ?></td>
                    <td><?php echo $status[$department['status']]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>