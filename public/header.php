<?php
global $sesion, $main_db;
$user = new User();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> Web Corp Inc  </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('bootstrap'); ?>">
     <link rel="stylesheet" href="<?php echo get_stylesheet_files('bootstrap-theme'); ?>">
     <link rel="stylesheet" href="<?php echo get_stylesheet_files('font-awesome'); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('style') ?>">

</head>
<body>

<div class="container main-container ">
    <header class="row header">
        <div class="navbar navbar-default">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
<!--                        <img alt="Brand" class="img-responsive" src="--><?php //echo admin_url('home') ?><!--/assets/img/logo.png">-->
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <?php if( $user->full_name( $sesion->userName ) != NULL ): ?>
                        <li class="active username"><a href="<?php echo get_home_url() ?>/logout.php"> <?php echo $user->full_name( $sesion->userName); ?> </a></li>
                        <?php endif; ?>
                        <?php if( $sesion->is_logedIn()): ?>
                        <li><a href="<?php echo get_home_url() ?>/logout.php"> Logout </a></li>
                        <li><a href="<?php echo admin_home() ?>"> Edit </a></li>
                        <?php else: ?>
                        <li class="active"><a href="<?php echo get_home_url() ?>/login.php"> Login </a></li>
                        <?php endif; ?>

                    </ul>
                </div>
        </div>
    </header>

    <div class="row main-content">
