<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.14
 */

/*
 * My All pages neet to insert into this array
 * */



function my_safe_pages( $page ){

    $safe_pages = array("sub-page", "about", "index", "main-page",'single');

    if($page !='') {
    if (in_array($page, $safe_pages))
        return true;
    return false;
    }
    return false;
}

// Get requested page name from url

function get_page_name()
{

    $params = explode("/", $_SERVER['REQUEST_URI']);

    array_shift($params);

    $page_name = isset($params[1]) && !empty($params[1]) ? $params[1] : 'index';

    $extension = explode('.', $page_name);

    if (count($extension) > 1)
        $page_name = $extension[0];

    return $page_name;
}

function create_db_connect(){
    global $main_db;

    require_once(CORE_F.'/main-db.php');
    if(!$main_db) {
        $main_db = new main_db(DATABASE, USER, HOST, PASSWORD);
    }else{
        return;
    }
}

