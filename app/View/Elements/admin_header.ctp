
<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static fixed-top">
    <div class="navbar-brand">
        <?php echo $this->Html->link($this->Html->image('logo/1.png', array('alt' => 'homepage')), array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'd-inline-block', 'escape' => false)); ?>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block" data-popup="tooltip-demo" title="Toggle Navigation" data-placement="bottom" data-container="body" data-trigger="hover">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
            <?php if (isset($merchandising_data) || isset($development_data)) { ?>
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-secondary-toggle d-none d-md-block" data-popup="tooltip-demo" title="Hide secondary" data-placement="bottom" data-container="body" data-trigger="hover">
                    <i class="icon-transmission"></i>
                </a>
            </li>
            <?php } ?>
        </ul>

        <span class="navbar-text ml-md-3">
            <span class="badge badge-mark border-orange-300 mr-2"></span>
            Welcome, <?php echo $current_user['name']; ?>
        </span>

        <ul class="navbar-nav ml-md-auto">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Connect
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-body p-2">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-github4 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dropbox text-blue-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dribbble3 text-pink-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-google-drive text-success-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-twitter text-info-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-youtube text-danger icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-pulse2 mr-2"></i>
                    Activity
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                    <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                                </div>

                                <div class="media-body">
                                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                    <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                                    <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                                </div>

                                <div class="media-body">
                                    Shipping cost to the Netherlands has been reduced, database updated
                                    <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                                </div>

                                <div class="media-body">
                                    New review received on <a href="#">Server side integration</a> services
                                    <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                    <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-grey mr-auto">All activity</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <?php echo $this->Html->link('<i class="icon-switch2"></i> <span class="d-md-none ml-2">Sign out</span>', array('controller' => 'users', 'action' => 'logout'), array('class' => 'navbar-nav-link', 'escape' => false)); ?>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<nav style="display:none">
    <!-- ============================================================== -->
    <!-- Logo -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav mr-auto mt-md-0 ">
            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </a> </li>
            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-angle-left"></i></a> </li>
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span data-toggle="tooltip" title="Notifications"><i class="fa fa-bell"></i></span>
                    <?php if (($tleave + $tleaveo + $tonduty + $tondutyo) > 0) { ?><div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div> <?php } ?>
                </a>
                <div class="dropdown-menu mailbox animated bounceInDown">
                    <ul>
                        <li>
                            <div class="drop-title">Notifications</div>
                        </li>
                        <li>
                            <div style="position: relative; overflow: hidden; width: auto; height: 250px;" class="slimScrollDiv">
                                <div style="overflow: hidden; width: auto; height: 250px;" class="message-center">
                                    <!-- Message -->

                                    <?php
                                    echo $this->Html->link(
                                            '<div class="btn btn-danger btn-circle"><i class="fa fa-calendar-alt"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Leave ' . (($tleave + $tleaveo) > 0 ? '<span class="label label-rounded label-success">' . ($tleave + $tleaveo) . '</span> ' : '') . '</h5> 
                                                <span class="mail-desc">Request/ Approval</span> 
                                                <span class="time">' . $leavel['Notification']['created'] . '</span> 
                                            </div>',
                                            array('controller' => 'notifications', 'action' => 'leaves'), array('escape' => false));

                                    echo $this->Html->link(
                                            '<div class="btn btn-success btn-circle"><i class="fa fa-calendar-check"></i></div>
                                            <div class="mail-contnet">
                                                <h5>On Duty ' . (($tonduty + $tondutyo) > 0 ? '<span class="label label-rounded label-success">' . ($tonduty + $tondutyo) . '</span> ' : '') . '</h5> 
                                                <span class="mail-desc">Request/ Approval</span> 
                                                <span class="time">' . $ondutyl['Notification']['created'] . '</span> 
                                            </div>',
                                            array('controller' => 'notifications', 'action' => 'onduties'), array('escape' => false));
                                    ?>

                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-info btn-circle"><i class="fa fa-trophy"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Appraisal</h5> 
                                            <span class="mail-desc">You can customize this template as you want</span> 
                                            <span class="time">9:08 AM</span> 
                                        </div>
                                    </a>
                                    <!-- Message -->
                                </div>
                                <div style="background: rgb(220, 220, 220) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
                        </li>
                        <li>
                            <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
        </ul>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <ul class="navbar-nav my-lg-0">
            <li class="nav-item hidden-sm-down">
                <form class="app-search">
                    <input class="form-control" placeholder="Search for..." type="text"> <a class="srh-btn"><i class="fa fa-search"></i></a> </form>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-toggle="tooltip" title="My Profile"><?php
                        $files = IMAGES . 'u/' . $current_user['id'] . '.png';
                        if (is_file($files)) {
                            echo $this->Html->image('u/' . $current_user['id'] . '.png', array('alt' => 'User Image', 'class' => 'profile-pic'));
                        } else {
                            echo '<div class="round round-' . $rounds[rand(0, 4)] . '">' . substr(trim($current_user['name']), 0, 1) . '</div>';
                        }
                        ?></span></a>
                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                    <ul class="dropdown-user">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><?php
                                    $files = IMAGES . 'u/' . $current_user['id'] . '.png';
                                    if (is_file($files)) {
                                        echo $this->Html->image('u/' . $current_user['id'] . '.png', array('alt' => 'User Image'));
                                    } else {
                                        echo '<div class="round round-' . $rounds[rand(0, 4)] . '">' . substr(trim($current_user['name']), 0, 1) . '</div>';
                                    }
                                    ?></div>
                                <div class="u-text">
                                    <h4 title="<?php echo $current_user['name']; ?>"><?php echo $current_user['name']; ?></h4>
                                    <p class="text-muted" title="<?php echo $current_user['email']; ?>"><?php echo $current_user['email']; ?></p><?php echo $this->Html->link('My Profile', array('controller' => 'users', 'action' => 'my_profile'), array('class' => 'btn btn-rounded btn-danger btn-sm', 'escape' => false)); ?>
                                </div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-money"></i> My Balance</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><?php echo $this->Html->link('<i class="fa fa-power-off"></i> Log out', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>