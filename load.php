<?php
/**
 * Created by PhpStorm.
 * User: sahid
 * Date: 11/24/15
 * Time: 2:39 PM
 */

define( 'ABSPATH', dirname(__FILE__) . '/' );


if(file_exists(ABSPATH.'main-config.php')) {

    require_once(ABSPATH."main-config.php");

}else {
    define('INC',ABSPATH.'includes');
    require_once(INC."/config-error.php");
}
