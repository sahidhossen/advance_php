<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.10
 */

if(!defined('CORE_F'))
    define('CORE_F',dirname(__FILE__).'/core');

define('INC',dirname(__FILE__).'/includes');

    require_once(CORE_F.'/core.php');
    require_once(INC.'/default-contstant.php');

intial_constant();

create_db_connect();

//include all of the setting below

require_once(CORE_F.'/url-access.php');
require_once(CORE_F.'/admin.php');
require_once(CORE_F.'/main-page.php');
require_once(CORE_F.'/sub-page.php');
require_once(CORE_F.'/session.php');
require_once(CORE_F.'/user.php');



if(!defined('PUBLIC_DIR'))
    define('PUBLIC_DIR',ABSPATH.'public');

if(file_exists(PUBLIC_DIR.'/functions.php'))
    require_once(PUBLIC_DIR.'/functions.php');

