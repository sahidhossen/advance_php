<?php
//define('CORE_F',ABSPATH.'core/');
if(file_exists(ABSPATH.'main-config.php')) {
    require_once(ABSPATH."main-config.php");

    require_once(INC.'/load-pages.php');
}else {
    define('INC',ABSPATH.'includes');
    require_once(INC."/config-error.php");
}