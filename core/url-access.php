<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.59
 */


/*
 * Check if the protocol http or https
 * */
function is_ssl(){
    $protocol = isset($_SERVER["HTTPS"]) ? 'https:' : 'http:';
    $host = $_SERVER['HTTP_HOST'];
    return $protocol.'//'.$host;
}

function get_root_folder(){
    $pathInPieces = explode('/', $_SERVER['REQUEST_URI']);
    return $pathInPieces[1];
}
//Home uri folder location
//exmple: http://localhost/blog/public/anyfiles
function home_uri(){
    return is_ssl().'/'.get_root_folder().'/public/';
}

function get_stylesheet_uri($folder_name=""){
    if($folder_name !="")
        return home_uri().'assets/'.$folder_name."/";
    return home_uri().'assets/css';
}
/*
 * Get any stylesheet from style sheet directory
 * */
function get_stylesheet_files($file_name=""){
    return get_stylesheet_uri().'/'.$file_name.'.css';
}
//only for homepage url
//exmple: http://localhost/blog

function get_home_url(){
    return is_ssl().'/'.get_root_folder();
}