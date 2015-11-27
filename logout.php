<?php
require( dirname(__FILE__) . '/load.php' );
global $sesion;
  $sesion->logout();
if(!$sesion->is_logedIn()){
    header('Location:'.get_home_url());
    exit();
}
