<?php if (isset($factory_data)) { ?>

    <script type="text/javascript">
        $(document).ready(function (e) {
            $('body').addClass('sidebar-xs');
        });
    </script>

    <div class="sidebar sidebar-light sidebar-secondary sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-secondary-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            <span class="font-weight-semibold">Secondary sidebar</span>
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <?php
            $factory_id = $factory_data['Factory']['id'];
            ?>

            <!-- Actions -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">Short Details</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3>Factory</h3>
                    <div class="row row-tile no-gutters">
                        <div class="col-6 text-center">
                            <?php echo $this->Html->image('p/' . $factory_id . '.png', array('alt' => 'No Image', 'width' => '80')); ?>
                            <div>Tech File</div>
                        </div>

                        <div class="col-6 text-center">
                            <?php echo $this->Html->image('p/' . $factory_id . '_a.png', array('alt' => 'No Image', 'width' => '80')); ?>
                            <div>Add. File</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /actions -->


            <!-- Sub navigation -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">Main</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <?php
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> View Report', array('controller' => 'factories', 'action' => 'view', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Factory Basic', array('controller' => 'factories', 'action' => 'edit', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Factory Supplier', array('controller' => 'factorysuppliers', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Factory Customer', array('controller' => 'factorycustomers', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Factory Staff', array('controller' => 'factorystaffs', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Production Worker', array('controller' => 'productionworkers', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Production Machinery', array('controller' => 'productionmachineries', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Production Capacity', array('controller' => 'productioncapacities', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Manufacturing Processes', array('controller' => 'manufacturingprocesses', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Product Type', array('controller' => 'producttypes', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Garment Type', array('controller' => 'garmenttypes', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Fabric Type', array('controller' => 'fabrictypes', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Certificate', array('controller' => 'certificates', 'action' => 'index', $factory_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        ?>

                    </ul>
                </div>
            </div>
            <!-- /sub navigation -->

        </div>
        <!-- /sidebar content -->

    </div>

<?php } ?>