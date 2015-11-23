<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 23-11-15
 * Time: 21.12
 */

class User {

    public $user_id;


    public function check_user( $username, $pass ){

        global $main_db;

        $query = $main_db->get_rows('SELECT *FROM '.$this->table." WHERE username='".$username."' AND pass='".$pass."' LIMIT 1");

        if($query)
            return true;
        return false;
    }

}