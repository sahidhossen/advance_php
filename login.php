<?php
require( dirname(__FILE__) . '/load.php' ); ?>
<?php
global $sesion;
//echo $sesion->is_logedIn();
if($sesion->is_logedIn()){
    header('Location:'.admin_url('home'));
}

$user = new User();
global $main_db;
if(isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

    if($user->is_login($username, $password)){
        $_SESSION['username'] = $username;
        $sesion->message("Welcome Mr. ".$username);
        header('Location:'.admin_url('home'));
    }else {
        $sesion->message("Sorry your username and password combination error");
        header('location:'.get_home_url().'/login.php');
    }

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('bootstrap'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('bootstrap-theme'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('font-awesome'); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_files('style') ?>">
</head>
<body>
<div class="shadow">
    <div class="loginform">
        <h3 class="title text-center"> Login Form </h3>
        <p class="error"> <?php if($sesion->message()) echo $sesion->message(); ?>  </p>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1"> User Name </label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <p><input type="submit" value="Login" class="btn btn-info btn-md" name="submit"></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>

