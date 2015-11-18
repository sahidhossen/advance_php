<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.14
 */
function create_db_connect(){
    global $main_db;

    require_once(CORE_F.'/main-db.php');
    if(!$main_db) {
        $main_db = new main_db(DATABASE, USER, HOST, PASSWORD);
    }else{
        return;
    }
}