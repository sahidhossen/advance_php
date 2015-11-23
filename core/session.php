<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 23-11-15
 * Time: 21.10
 */

class session {

    public $is_login;


    public function __construct()
    {
        session_start();
    }


    public function loged_in( ){
        $user = new User();

        if( isset($_SESSION['user'])){
            $this->is_login = true;
        }else {
            $this->loged_in = false;
        }

    }

}

