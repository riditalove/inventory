<?php if (isset($merchandising_data)) { ?>

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
            $merchandising_id = $merchandising_data['Merchandising']['id'];
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
                    <h3>Merchandising</h3>
                    <div class="row row-tile no-gutters">
                        <div class="col-6 text-center">
                            <?php echo $this->Html->image('p/' . $merchandising_id . '.png', array('alt' => 'No Image', 'width' => '80')); ?>
                            <div>Tech File</div>
                        </div>

                        <div class="col-6 text-center">
                            <?php echo $this->Html->image('p/' . $merchandising_id . '_a.png', array('alt' => 'No Image', 'width' => '80')); ?>
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
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> View Report', array('controller' => 'merchandisings', 'action' => 'view', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Order Basic', array('controller' => 'merchandisings', 'action' => 'edit', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Style Information', array('controller' => 'merchandisingstyles', 'action' => 'index', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Color Information', array('controller' => 'merchandisingcolors', 'action' => 'index', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Size Information', array('controller' => 'merchandisingsizes', 'action' => 'index', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Quantity Information', array('controller' => 'merchandisingtotals', 'action' => 'index', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Fabric Information', array('controller' => 'merchandisingfabrics', 'action' => 'index', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> Item Information', array('controller' => 'merchandisingitems', 'action' => 'index', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> T&A Data Entry', array('controller' => 'merchandisings', 'action' => 'tanda', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        echo "<li class='nav-item'>" . $this->Html->link('<i class="fa fa-address-book"></i> T&A Report', array('controller' => 'merchandisings', 'action' => 'tandareport', $merchandising_id), array('escape' => false, 'class' => 'nav-link')) . "</li>";
                        ?>

                    </ul>
                </div>
            </div>
            <!-- /sub navigation -->

        </div>
        <!-- /sidebar content -->

    </div>

<?php } ?>