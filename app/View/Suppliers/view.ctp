<div class="container-fluid supplier view">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('<i class="fa fa-home"></i> Home', array('controller' => 'pages', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active"><?php echo __('Supplier Details'); ?></li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link('<i class="fa fa-list-ul"></i> Supplier List', array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0"><?php echo __('Supplier Details'); ?></h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="box">
                    <div class="box-body">

                        <div class='row'>
                            <div class='col-md-3'><?php echo __('Id'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['id']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Name'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['name']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Locations'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['locations']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Ownership'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['ownership']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Contact Number'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['contact_number']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Currency'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['currency']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Establishment Year'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['establishment_year']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Payment Term'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['payment_term']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Organizaion Structure'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['organizaion_structure']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Company Turn Over'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['company_turn_over']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Price Level'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['price_level']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Work Type'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['work_type']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('No Of Employee'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['no_of_employee']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Reference'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['reference']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('In House Design Structure'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['in_house_design_structure']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Machineries Detail'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['machineries_detail']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Lab Available'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['lab_available']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Acreditation'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['acreditation']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Equipment Detail'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['equipment_detail']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Aql'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['aql']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Production Capacity Per Month'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['production_capacity_per_month']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Production Category Detail'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['production_category_detail']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Special Detail'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['special_detail']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Minimum Order Value'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['minimum_order_value']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Minimum Order Lead Date'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['minimum_order_lead_date']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Fob Port'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['fob_port']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Factory Audit'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['factory_audit']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Audit Name'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['audit_name']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Comments'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['comments']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Status'); ?></div>
                            <div class='col-md-9'>
                                <?php echo $status[$supplier['Supplier']['status']]; ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Created'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['created']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Modified'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['modified']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Entry By'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['entry_by']); ?>
                                &nbsp;
                            </div>
                        </div>	<div class='row'>
                            <div class='col-md-3'><?php echo __('Edit By'); ?></div>
                            <div class='col-md-9'>
                                <?php echo h($supplier['Supplier']['edit_by']); ?>
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
    <?php if (!empty($supplier['Development'])): ?>
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
            <?php foreach ($supplier['Development'] as $development): ?>
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
    <h3><?php echo __('Related Developmentnegotiations'); ?></h3>
    <?php if (!empty($supplier['Developmentnegotiation'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Development Id'); ?></th>
                <th><?php echo __('Developmentstyle Id'); ?></th>
                <th><?php echo __('Supplier Id'); ?></th>
                <th><?php echo __('Tech File Sending Date'); ?></th>
                <th><?php echo __('Delivery Date'); ?></th>
                <th><?php echo __('Supplier Price'); ?></th>
                <th><?php echo __('Offer To Buyer'); ?></th>
                <th><?php echo __('Quantity'); ?></th>
                <th><?php echo __('Comment'); ?></th>
                <th><?php echo __('Is Selected'); ?></th>
                <th><?php echo __('Entry By'); ?></th>
                <th><?php echo __('Edit By'); ?></th>
                <th><?php echo __('Status'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
            </tr>
            <?php foreach ($supplier['Developmentnegotiation'] as $developmentnegotiation): ?>
                <tr>
                    <td><?php echo $developmentnegotiation['id']; ?></td>
                    <td><?php echo $developmentnegotiation['development_id']; ?></td>
                    <td><?php echo $developmentnegotiation['developmentstyle_id']; ?></td>
                    <td><?php echo $developmentnegotiation['supplier_id']; ?></td>
                    <td><?php echo $developmentnegotiation['tech_file_sending_date']; ?></td>
                    <td><?php echo $developmentnegotiation['delivery_date']; ?></td>
                    <td><?php echo $developmentnegotiation['supplier_price']; ?></td>
                    <td><?php echo $developmentnegotiation['offer_to_buyer']; ?></td>
                    <td><?php echo $developmentnegotiation['quantity']; ?></td>
                    <td><?php echo $developmentnegotiation['comment']; ?></td>
                    <td><?php echo $developmentnegotiation['is_selected']; ?></td>
                    <td><?php echo $developmentnegotiation['entry_by']; ?></td>
                    <td><?php echo $developmentnegotiation['edit_by']; ?></td>
                    <td><?php echo $developmentnegotiation['status']; ?></td>
                    <td><?php echo $developmentnegotiation['created']; ?></td>
                    <td><?php echo $developmentnegotiation['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
<div class="related">
    <h3><?php echo __('Related Developmentorders'); ?></h3>
    <?php if (!empty($supplier['Developmentorder'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Development Id'); ?></th>
                <th><?php echo __('Developmentstyle Id'); ?></th>
                <th><?php echo __('Supplier Id'); ?></th>
                <th><?php echo __('Delivery Date'); ?></th>
                <th><?php echo __('Supplier Price'); ?></th>
                <th><?php echo __('Fob Price'); ?></th>
                <th><?php echo __('Order Date'); ?></th>
                <th><?php echo __('Quantity'); ?></th>
                <th><?php echo __('Sms Po'); ?></th>
                <th><?php echo __('Remarks'); ?></th>
                <th><?php echo __('Entry By'); ?></th>
                <th><?php echo __('Edit By'); ?></th>
                <th><?php echo __('Status'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
            </tr>
            <?php foreach ($supplier['Developmentorder'] as $developmentorder): ?>
                <tr>
                    <td><?php echo $developmentorder['id']; ?></td>
                    <td><?php echo $developmentorder['development_id']; ?></td>
                    <td><?php echo $developmentorder['developmentstyle_id']; ?></td>
                    <td><?php echo $developmentorder['supplier_id']; ?></td>
                    <td><?php echo $developmentorder['delivery_date']; ?></td>
                    <td><?php echo $developmentorder['supplier_price']; ?></td>
                    <td><?php echo $developmentorder['fob_price']; ?></td>
                    <td><?php echo $developmentorder['order_date']; ?></td>
                    <td><?php echo $developmentorder['quantity']; ?></td>
                    <td><?php echo $developmentorder['sms_po']; ?></td>
                    <td><?php echo $developmentorder['remarks']; ?></td>
                    <td><?php echo $developmentorder['entry_by']; ?></td>
                    <td><?php echo $developmentorder['edit_by']; ?></td>
                    <td><?php echo $developmentorder['status']; ?></td>
                    <td><?php echo $developmentorder['created']; ?></td>
                    <td><?php echo $developmentorder['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
<div class="related">
    <h3><?php echo __('Related Supplier Audits'); ?></h3>
    <?php if (!empty($supplier['SupplierAudit'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Supplier Id'); ?></th>
                <th><?php echo __('Audit Name'); ?></th>
                <th><?php echo __('Audit Type'); ?></th>
                <th><?php echo __('Ext'); ?></th>
                <th><?php echo __('Entry By'); ?></th>
                <th><?php echo __('Edit By'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Status'); ?></th>
            </tr>
            <?php foreach ($supplier['SupplierAudit'] as $supplierAudit): ?>
                <tr>
                    <td><?php echo $supplierAudit['id']; ?></td>
                    <td><?php echo $supplierAudit['supplier_id']; ?></td>
                    <td><?php echo $supplierAudit['audit_name']; ?></td>
                    <td><?php echo $supplierAudit['audit_type']; ?></td>
                    <td><?php echo $supplierAudit['ext']; ?></td>
                    <td><?php echo $supplierAudit['entry_by']; ?></td>
                    <td><?php echo $supplierAudit['edit_by']; ?></td>
                    <td><?php echo $supplierAudit['created']; ?></td>
                    <td><?php echo $supplierAudit['modified']; ?></td>
                    <td><?php echo $supplierAudit['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
<div class="related">
    <h3><?php echo __('Related Supplier Contacts'); ?></h3>
    <?php if (!empty($supplier['SupplierContact'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Supplier Id'); ?></th>
                <th><?php echo __('Person Name'); ?></th>
                <th><?php echo __('Depertment'); ?></th>
                <th><?php echo __('Clients'); ?></th>
                <th><?php echo __('Major Merkets'); ?></th>
                <th><?php echo __('Handled Materials'); ?></th>
                <th><?php echo __('Product Categories'); ?></th>
                <th><?php echo __('Approval By Retailers'); ?></th>
                <th><?php echo __('Entry By'); ?></th>
                <th><?php echo __('Edit By'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Status'); ?></th>
            </tr>
            <?php foreach ($supplier['SupplierContact'] as $supplierContact): ?>
                <tr>
                    <td><?php echo $supplierContact['id']; ?></td>
                    <td><?php echo $supplierContact['supplier_id']; ?></td>
                    <td><?php echo $supplierContact['person_name']; ?></td>
                    <td><?php echo $supplierContact['depertment']; ?></td>
                    <td><?php echo $supplierContact['clients']; ?></td>
                    <td><?php echo $supplierContact['major_merkets']; ?></td>
                    <td><?php echo $supplierContact['handled_materials']; ?></td>
                    <td><?php echo $supplierContact['product_categories']; ?></td>
                    <td><?php echo $supplierContact['approval_by_retailers']; ?></td>
                    <td><?php echo $supplierContact['entry_by']; ?></td>
                    <td><?php echo $supplierContact['edit_by']; ?></td>
                    <td><?php echo $supplierContact['created']; ?></td>
                    <td><?php echo $supplierContact['modified']; ?></td>
                    <td><?php echo $supplierContact['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
<div class="related">
    <h3><?php echo __('Related Supplier Documents'); ?></h3>
    <?php if (!empty($supplier['SupplierDocument'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Supplier Id'); ?></th>
                <th><?php echo __('Document Title'); ?></th>
                <th><?php echo __('Document File'); ?></th>
                <th><?php echo __('Ext'); ?></th>
                <th><?php echo __('Entry By'); ?></th>
                <th><?php echo __('Edit By'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Status'); ?></th>
            </tr>
            <?php foreach ($supplier['SupplierDocument'] as $supplierDocument): ?>
                <tr>
                    <td><?php echo $supplierDocument['id']; ?></td>
                    <td><?php echo $supplierDocument['supplier_id']; ?></td>
                    <td><?php echo $supplierDocument['document_title']; ?></td>
                    <td><?php echo $supplierDocument['document_file']; ?></td>
                    <td><?php echo $supplierDocument['ext']; ?></td>
                    <td><?php echo $supplierDocument['entry_by']; ?></td>
                    <td><?php echo $supplierDocument['edit_by']; ?></td>
                    <td><?php echo $supplierDocument['created']; ?></td>
                    <td><?php echo $supplierDocument['modified']; ?></td>
                    <td><?php echo $supplierDocument['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
<div class="related">
    <h3><?php echo __('Related Supplier Images'); ?></h3>
    <?php if (!empty($supplier['SupplierImage'])): ?>
        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Supplier Id'); ?></th>
                <th><?php echo __('Image Title'); ?></th>
                <th><?php echo __('Entry By'); ?></th>
                <th><?php echo __('Edit By'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Status'); ?></th>
            </tr>
            <?php foreach ($supplier['SupplierImage'] as $supplierImage): ?>
                <tr>
                    <td><?php echo $supplierImage['id']; ?></td>
                    <td><?php echo $supplierImage['supplier_id']; ?></td>
                    <td><?php echo $supplierImage['image_title']; ?></td>
                    <td><?php echo $supplierImage['entry_by']; ?></td>
                    <td><?php echo $supplierImage['edit_by']; ?></td>
                    <td><?php echo $supplierImage['created']; ?></td>
                    <td><?php echo $supplierImage['modified']; ?></td>
                    <td><?php echo $supplierImage['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div>
