<div class="container">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <br><br>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php //echo $this->Html->link("<i class='fa fa-list-ul'></i> Travel Expensee  List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); 
            ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title font-weight-medium text-uppercase m-b-0">Inventories</h3>
                <p class="text-muted m-b-30 font-13"> </p>


                <div class="row">
                    <div class="col-md-3">
                        <label><b>Raw Material Name</b></label>
                    </div>
                    <div class="col-md-2">
                        <p style="margin: 0;" class="badge bg-info">
                            <?php echo $inventory['Inventory']['raw_material_name']; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Supplier</b></label>
                    </div>
                    <div class="col-md-2">
                        <p style="margin: 0;" class="badge bg-info">
                            <?php echo $suppliers[$inventory['Inventory']['supplier_id']]; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Entry Date</b></label>
                    </div>
                    <div class="col-md-2">
                        <p style="margin: 0;" class="badge bg-info">
                            <?php echo $inventory['Inventory']['entry_date']; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Order Quantity</b></label>
                    </div>
                    <div class="col-md-2">
                        <p style="margin: 0;" class="badge bg-info">
                            <?php echo $inventory['Inventory']['order_quantity'] ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Purchase Cost</b></label>
                    </div>
                    <div class="col-md-2">
                        <p style="margin: 0;" class="badge bg-info">
                            <?php echo $inventory['Inventory']['purchase_cost']; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label><b>Order No</b></label>
                    </div>
                    <div class="col-md-2">
                        <p style="margin: 0;" class="badge bg-info">
                            <?php echo $inventory['Inventory']['order_no']; ?>
                        </p>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        <label><b>Inventory Details</b></label>
                    </div>
                    <div class="col-md-2">
                        <p style="margin: 0;" class="badge bg-info">
                            <?php echo $inventory['Inventory']['inventory_details']; ?>
                        </p>
                    </div>
                </div>
                <!-- <?php pr($traveller); ?> -->
                <br>
                <br>

                <div class="row">

                    <label><b>Inventory Documents</b> </label>
                    <br><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>SI No</th>
                                <th>Preview</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($inventory['Inventory']['doc'])) {
                                $inventory_folder = '/img/inventdoc/'; // Web path to the passport folder
                                $file_name = $inventory['Inventory']['id'] . '.' . $inventory['Inventory']['doc']; // Construct file name
                                $file_path = $inventory_folder . $file_name; // Full file path in webroot
                                ?>

                                <tr>
                                    <td>1</td>
                                    <td>
                                        <?php if (in_array($inventory['Inventory']['doc'], ['jpg', 'png', 'webp', 'jpeg'])) { ?>
                                            <a href="<?php echo $this->Html->url($file_path); ?>" target="_blank">
                                                <img src="<?php echo $this->Html->url($file_path); ?>"
                                                    alt="<?php echo h($file_name); ?>" width="50">
                                            </a>
                                        <?php } elseif ($inventory['Inventory']['doc'] == 'pdf') { ?>
                                            <a href="<?php echo $this->Html->url($file_path); ?>" target="_blank">
                                                <img src="<?php echo $this->Html->url('/img/pdf.png'); ?>" alt="PDF Icon"
                                                    width="30">
                                            </a>
                                        <?php } else { ?>
                                            <p>No preview available</p>
                                        <?php } ?>
                                    </td>
                                </tr>

                                <?php
                            } else {
                                ?>

                                <tr>
                                    <td colspan="2">No Inventory Documents found for
                                        <?php $inventory['Inventory']['id'] ?>.
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>


                </div>

            </div>
        </div>
    </div>


</div>