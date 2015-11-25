<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 23-11-15
 * Time: 21.12
 */

class User {

    public $user_id;

    private $table = "admin";

    public $current_user;

    function __construct()
    {

    }

    public function is_login( $username, $pass ){

        global $main_db;

        $query = $main_db->get_rows('SELECT *FROM '.$this->table." WHERE username='".$username."' AND pass='".$pass."' LIMIT 1");

        if($query)
            return true;
        return false;
    }
    /*
     *@param : username
     * return User results
     * */

    public function get_user_by_username( $username ){
        global $main_db;

        $query = $main_db->get_rows("SELECT *FROM ".$this->table." WHERE username='{$username}' LIMIT 1");

        if($query)
            return $query;
        return NULL;

    }

    public function full_name( $username ){

        $user = $this->get_user_by_username( $username );
        if($user != NULL )
            return $user->f_name." ".$user->l_name;
        return NULL ;
    }
}