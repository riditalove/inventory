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
        <meta property="og:url" content="<?php echo COMPANY_WEB; ?>/" />
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/img/fav/mstile-144x144.png">
        <meta name="msapplication-config" content="/img/fav/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->meta('viewport');

        echo $this->Html->css(array('icomoon/styles.min', 'bootstrap.min', 'bootstrap_limitless.min', 'layout.min', 'components.min', 'colors.min', 'bootstrap-datepicker.min'));
        //echo $this->Html->css('colors/blue', array('id' => 'theme'));
        echo $this->Html->script(array('jquery.min', 'bootstrap.bundle.min', 'blockui.min', 'bootstrap-datepicker.min', 'app'));
        echo $this->Html->script(array('d3.min', 'd3_tooltip', 'switchery.min'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>
    <body class="navbar-top">
        <?php echo $this->element('admin_header'); ?>

        <div class="page-content">
            <?php echo $this->element('admin_menu'); ?>
            
            <?php echo $this->element('dev_menu'); ?>
            <?php echo $this->element('prod_menu'); ?>
            <?php echo $this->element('fact_menu'); ?>
            
            <div class="content-wrapper">
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>

                <?php echo $this->element('admin_footer'); ?>
            </div>
        </div>

        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
