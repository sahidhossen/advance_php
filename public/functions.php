<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.44
 */


function pretty_print( $result  ){
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
}

function removeSlash($string) {
    if( $string[strlen($string) - 1]== '/')
        $string = rtrim($string, '/');

    return $string;
}