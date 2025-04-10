<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Navigation</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="javascript:;">
                        <?php
                        $files = IMAGES . 'u/' . $current_user['id'] . '.png';
                        if (is_file($files)) {
                            echo $this->Html->image('u/' . $current_user['id'] . '.png', array('alt' => 'User Image', 'class' => 'img-fluid rounded-circle shadow-1 mb-3'));
                        } else {
                            echo '<div class="round round-' . $rounds[rand(0, 4)] . '">' . substr(trim($current_user['name']), 0, 1) . '</div>';
                        }
                        ?>
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark"><?php echo $current_user['name']; ?></h6>
                    <span class="font-size-sm text-white text-shadow-dark"><?php echo $current_user['phone']; ?></span>
                </div>

                <div class="sidebar-user-material-footer">
                    <a href="#user-nav"
                        class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle"
                        data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <?php echo $this->Html->link('<i class="icon-user-plus"></i> <span>My Profile</span>', array('controller' => 'users', 'action' => 'my_profile'), array('escape' => false, 'class' => 'nav-link')); ?>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link">
                            <i class="icon-coins"></i>
                            <span>My balance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link">
                            <i class="icon-comment-discussion"></i>
                            <span>Messages</span>
                            <span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link">
                            <i class="icon-cog5"></i>
                            <span>Account settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php echo $this->Html->link('<i class="icon-switch2"></i> <span>Logout</span>', array('controller' => 'users', 'action' => 'logout'), array('escape' => false, 'class' => 'nav-link')); ?>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                        title="Main"></i>
                </li>

                <?php
                if (isset($perms["UsersController"]["dashboard"]) && !is_numeric($perms["UsersController"]["dashboard"])) {
                    echo "<li class='nav-item'>" . $this->Html->link('<i class="icon-home4"></i> <span>Dashboard</span>', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                } else {
                    if (isset($perms["UsersController"]["my_dashboard"]) && !is_numeric($perms["UsersController"]["my_dashboard"])) {
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="icon-home4"></i> <span>Dashboard</span>', array('controller' => 'users', 'action' => 'my_dashboard'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                    }
                }
                ?>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link"><i class="icon-copy"></i> <span>Management</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Management">
                        <?php
                        if (isset($perms["RolesController"]["index"]) && !is_numeric($perms["RolesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-chess-knight"></i> Role', array('controller' => 'roles', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["ConfigsController"]["index"]) && !is_numeric($perms["ConfigsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-cog"></i> Config', array('controller' => 'configs', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["DepartmentsController"]["index"]) && !is_numeric($perms["DepartmentsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Department', array('controller' => 'departments', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["DesignationsController"]["index"]) && !is_numeric($perms["DesignationsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-card"></i> Designation', array('controller' => 'designations', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["SectionsController"]["index"]) && !is_numeric($perms["SectionsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-map-marker"></i> Section', array('controller' => 'sections', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["CompanytypesController"]["index"]) && !is_numeric($perms["CompanytypesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-asterisk"></i> Company Type', array('controller' => 'companytypes', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["CompanynaturesController"]["index"]) && !is_numeric($perms["CompanynaturesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-spinner"></i> Company Nature', array('controller' => 'companynatures', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["CompaniesController"]["index"]) && !is_numeric($perms["CompaniesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> Company', array('controller' => 'companies', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["LogsController"]["index"]) && !is_numeric($perms["LogsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-cogs"></i> Log', array('controller' => 'logs', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link"><i class="icon-color-sampler"></i> <span>Human</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Human">
                        <?php

                        if (isset($perms["SuppliersController"]["index"]) && !is_numeric($perms["SuppliersController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-users"></i> Supplier', array('controller' => 'suppliers', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }

                        if (isset($perms["UsersController"]["index"]) && !is_numeric($perms["UsersController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-users"></i> Employee', array('controller' => 'users', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link"><i class="icon-stack"></i> <span>Assets</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Management:-Assets">
                        <?php
                        if (isset($perms["AssetsController"]["index"]) && !is_numeric($perms["AssetsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> List All', array('controller' => 'assets', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AssetsController"]["all_deployed"]) && !is_numeric($perms["AssetsController"]["all_deployed"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> All Deployed', array('controller' => 'assets', 'action' => 'all_deployed'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AssetsController"]["allready_to_deploy"]) && !is_numeric($perms["AssetsController"]["allready_to_deploy"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> All Ready to Deploy', array('controller' => 'assets', 'action' => 'allready_to_deploy'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AssetsController"]["all_pending"]) && !is_numeric($perms["AssetsController"]["all_pending"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> All Pending', array('controller' => 'assets', 'action' => 'all_pending'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AssetmaintenancesController"]["index"]) && !is_numeric($perms["AssetmaintenancesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> Asset Maintenance', array('controller' => 'assetmaintenances', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }


                        ?>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link"><i class="icon-stack"></i> <span>Inventories</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Management:-Inventories">
                        <?php
                        if (isset($perms["MaterialsController"]["index"]) && !is_numeric($perms["MaterialsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> Material List', array('controller' => 'materials', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["StocksController"]["index"]) && !is_numeric($perms["StocksController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> List All Stocks', array('controller' => 'stocks', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["StockinsController"]["index"]) && !is_numeric($perms["StockinsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> Stock In', array('controller' => 'stockins', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["StockoutsController"]["index"]) && !is_numeric($perms["StockoutsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-warehouse"></i> Stock Out', array('controller' => 'stockouts', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }


                        ?>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link"><i class="icon-stack"></i> <span>Settings</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Management:-Assets">
                        <?php
                        if (isset($perms["CategoriesController"]["index"]) && !is_numeric($perms["CategoriesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Category', array('controller' => 'categories', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AccessoriesController"]["index"]) && !is_numeric($perms["AccessoriesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Accessory', array('controller' => 'accessories', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AssetcomponentsController"]["index"]) && !is_numeric($perms["AssetcomponentsController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Component', array('controller' => 'assetcomponents', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["ConsumablesController"]["index"]) && !is_numeric($perms["ConsumablesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Consumable', array('controller' => 'consumables', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["LicensesController"]["index"]) && !is_numeric($perms["LicensesController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> License', array('controller' => 'licenses', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["ManufacturersController"]["index"]) && !is_numeric($perms["ManufacturersController"]["index"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Manufacturer', array('controller' => 'manufacturers', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }

                        ?>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="javascript:;" class="nav-link"><i class="icon-color-sampler"></i> <span>Reports</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Management:-Assets">
                        <?php
                        if (isset($perms["LicensesController"]["license_report"]) && !is_numeric($perms["LicensesController"]["license_report"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> License Report', array('controller' => 'licenses', 'action' => 'license_report'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AssetmaintenancesController"]["maintenance_report"]) && !is_numeric($perms["AssetmaintenancesController"]["maintenance_report"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Asset Maintenance Report', array('controller' => 'assetmaintenances', 'action' => 'maintenance_report'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AccessoriesController"]["accessory_report"]) && !is_numeric($perms["AccessoriesController"]["accessory_report"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Accessory Report', array('controller' => 'accessories', 'action' => 'accessory_report'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }
                        if (isset($perms["AssetsController"]["asset_report"]) && !is_numeric($perms["AssetsController"]["asset_report"])) {
                            echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-align-center"></i> Custom Asset Report', array('controller' => 'assets', 'action' => 'asset_report'), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        }

                        ?>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->