<?php require_once(dirname(dirname(__FILE__)) . '/load.php');
global $sesion;
if(!$sesion->is_logedIn()){ 
    safe_redirect(get_home_url().'/login.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Welcome To Admin </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('bootstrap');?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('bootstrap-theme');?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('font-awesome');?>">
    <link rel="stylesheet" href="<?php echo admin_stylesheet('admin');?>">

</head>
<body>
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img alt="Brand" class="img-responsive" src="<?php echo admin_url('home') ?>/assets/img/logo.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="<?php echo get_home_url() ?>/logout.php"> Logout </a></li>

            </ul>
        </div>
    </div>
</div>

<div id="wrapper" class="active">
