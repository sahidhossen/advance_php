<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.26
 */

class main_db{

    function __construct($dbname,$user,$host,$pass)
    {
        return  $dbname." ".$user." ".$host." ".$pass;
    }
}