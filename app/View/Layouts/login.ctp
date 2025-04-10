<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>

        <title><?php echo COMPANY_NAME; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta http-equiv="Cache-control" content="public,max-age=86400,must-revalidate">
        <meta name="msnbot" content="index, follow">
        <meta name="robots" content="INDEX, FOLLOW">
        <meta name="googlebot" content="all">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <meta name="title" content="<?php echo COMPANY_WEB; ?> | Group of companies in Bangladesh for household, clothes &amp; more.">
        <meta name="description" content="Group of companies in Bangladesh with home delivery and cash on delivery. Buy latest fashion wear, gadgets, home appliances &amp; more at a low cost.">
        <meta name="keywords" content="Group of companies in Bangladesh, Group of companies, <?php echo COMPANY_WEB; ?>, Womens fashion, Mens Fashion, latest fashion,  Mens shopping, Womens shopping, shoes, jeans, pants, denim, t shirt, tee shirt, polo shirt, footwear, shoes, kids dress, toys, cosmetics, health care products, leather products, bags ">

        <meta itemprop="name" content="<?php echo COMPANY_NAME; ?>">
        <meta itemprop="description" content="Group of companies in Bangladesh, Developped By Software End">
        <meta itemprop="image" content="<?php echo COMPANY_WEB; ?>/img/fav/android-chrome-512x512.png">
        <meta property="fb:app_id" content="604911349879476" />
        <meta property="fb:admins" content="mdabjalil" />
        <meta property="fb:page_id" content="100029632000686" />

        <meta property="og:site_name" content="<?php echo COMPANY_NAME; ?>" />
        <meta property="og:url" content="<?php echo COMPANY_WEB; ?>" />
        <meta property="og:type" content="E-COMMERCE" />
        <meta property="og:title" content="<?php echo COMPANY_NAME; ?>" />
        <meta property="og:description" content="Group of companies in Bangladesh, Developped By Software End." />
        <meta property="og:image" content="<?php echo COMPANY_WEB; ?>/img/fav/android-chrome-512x512.png" />
        <meta property="og:image:width" content="512" />
        <meta property="og:image:height" content="512" />

        <meta name="twitter:site" content="@softwareend">
        <meta name="twitter:title" content="<?php echo COMPANY_NAME; ?>">
        <meta name="twitter:description" content="Group of companies in Bangladesh, Developped By Software End.">
        <meta name="twitter:image" content="<?php echo COMPANY_WEB; ?>/img/fav/android-chrome-512x512.png">

        <link rel="apple-touch-icon" sizes="180x180" href="/img/fav/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/fav/favicon-16x16.png">
        <link rel="manifest" href="/img/fav/site.webmanifest">
        <link rel="mask-icon" href="/img/fav/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/img/fav/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/img/fav/mstile-144x144.png">
        <meta name="msapplication-config" content="/img/fav/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->meta('viewport');
        
        echo $this->Html->css(array('icomoon/styles.min', 'bootstrap.min', 'bootstrap_limitless.min', 'layout.min', 'components.min', 'colors.min'));
        //echo $this->Html->css('colors/blue', array('id' => 'theme'));
        echo $this->Html->script(array('jquery.min', 'bootstrap.bundle.min', 'blockui.min', 'uniform.min', 'app', 'login'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>

        <!-- Main navbar -->
        <div class="navbar navbar-expand-md navbar-dark bg-indigo">
            <div class="navbar-brand">
                <a href="javascript:;" class="d-inline-block">
                    <?php echo $this->Html->image('logo/1.png', array('alt' => 'homepage')); ?>
                </a>
            </div>

            <div class="d-md-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                    <i class="icon-tree5"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="javascript:;" class="navbar-nav-link">
                            <i class="icon-display4"></i>
                            <span class="d-md-none ml-2">Go to website</span>
                        </a>					
                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascript:;" class="navbar-nav-link">
                            <i class="icon-user-tie"></i>
                            <span class="d-md-none ml-2">Contact admin</span>
                        </a>					
                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascript:;" class="navbar-nav-link">
                            <i class="icon-cog3"></i>
                            <span class="d-md-none ml-2">Options</span>
                        </a>					
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->


        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">

                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
                <span class="navbar-text">
                    &copy; <?php echo date('Y'); ?>. 
                    <?php echo $this->Html->link(COMPANY_NAME, COMPANY_WEB, array('escape' => false)); ?>
                    by
                    <?php echo $this->Html->link('Software End', 'http://softwareend.com/', array('escape' => false, 'style' => 'display:none')); ?>
                    <?php echo $this->Html->link('Indesore', 'http://indesore.com/', array('escape' => false, 'target' => '_blank')); ?>
                </span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="javascript:;" class="navbar-nav-link"><span class="text-pink-400"><i class="icon-lifebuoy mr-2"></i> Support</span></a></li>
                    <li class="nav-item"><a href="javascript:;" class="navbar-nav-link"><span class="text-pink-400"><i class="icon-file-text2 mr-2"></i> Docs</span></a></li>
                    <li class="nav-item"><a href="javascript:;" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-map mr-2"></i> Map</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </body>
</html>
