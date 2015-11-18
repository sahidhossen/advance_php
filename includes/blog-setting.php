<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.40
 */
function root_directory(){
    if(defined(PUBLIC_DIR))
    return PUBLIC_DIR.'/';
}

function stylesheet_dir($path=""){
    $root_dir = root_directory();
    return $root_dir.$path.'/';
}

function get_stylesheet(){

}
