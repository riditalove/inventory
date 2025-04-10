<?php if (isset($development_data)) { ?>

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
            $development_id = $development_data['Development']['id'];
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
                    <h3>Development</h3>
                    <div class="row row-tile no-gutters">
                        <div class="col-6 text-center">
                            <?php echo $this->Html->image('d/' . $development_id . '.png', array('alt' => 'No Image', 'width' => '80')); ?>
                            <div>Tech File</div>
                        </div>

                        <div class="col-6 text-center">
                            <?php echo $this->Html->image('d/' . $development_id . '_a.png', array('alt' => 'No Image', 'width' => '80')); ?>
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
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> View Report', array('controller' => 'developments', 'action' => 'view', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Sample Basic', array('controller' => 'developments', 'action' => 'edit', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Style Information', array('controller' => 'developmentstyles', 'action' => 'index', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Color Information', array('controller' => 'developmentcolors', 'action' => 'index', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Size Information', array('controller' => 'developmentsizes', 'action' => 'index', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Quantity Information', array('controller' => 'developmenttotals', 'action' => 'index', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Fabric Information', array('controller' => 'developmentfabrics', 'action' => 'index', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Item Information', array('controller' => 'developmentitems', 'action' => 'index', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Photo Gallery', array('controller' => 'developmentphotos', 'action' => 'index', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> T&A Data Entry', array('controller' => 'developments', 'action' => 'tanda', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> T&A Report', array('controller' => 'developments', 'action' => 'tandareport', $development_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";

//                        echo "<li>" . $this->Html->link('<i class="fa fa-address-book"></i> 1st Proto Sample/Development Sample', array('controller' => 'development1stprotos', 'action' => 'index', $development_id), array('escape' => false)) . "</li>";
//                        echo "<li>" . $this->Html->link('<i class="fa fa-address-book"></i> Price Negotiation Information', array('controller' => 'developmentnegotiations', 'action' => 'index', $development_id), array('escape' => false)) . "</li>";
//                        echo '<li class="remsms divider"></li>';
//                        echo "<li class='remsms'>" . $this->Html->link('<i class="fa fa-address-book"></i> SMS Sample Fabric/Yarn Inhouse Status', array('controller' => 'developmentsmssamplefabrics', 'action' => 'index', $development_id), array('escape' => false)) . "</li>";
//                        echo "<li class='remsms'>" . $this->Html->link('<i class="fa fa-address-book"></i> SMS Sample Accessories Inhouse Status', array('controller' => 'developmentsmssamplematerials', 'action' => 'index', $development_id), array('escape' => false)) . "</li>";
//                        echo "<li class='remsms'>" . $this->Html->link('<i class="fa fa-address-book"></i> SMS Prio Sample', array('controller' => 'developmentsmssampleprios', 'action' => 'index', $development_id), array('escape' => false)) . "</li>";
//                        echo "<li class='remsms'>" . $this->Html->link('<i class="fa fa-address-book"></i> Bulk SMS', array('controller' => 'developmentsmssamplebulks', 'action' => 'index', $development_id), array('escape' => false)) . "</li>";
//                        echo '<li class="remsms divider"></li>';
//                        echo "<li>" . $this->Html->link('<i class="fa fa-address-book"></i> Order Confirmation Information', array('controller' => 'developmentorders', 'action' => 'index', $development_id), array('escape' => false)) . "</li>";
                        ?>

                    </ul>
                </div>
            </div>
            <!-- /sub navigation -->

        </div>
        <!-- /sidebar content -->

    </div>

<?php } ?>
