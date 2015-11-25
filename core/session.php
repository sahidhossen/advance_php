<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 23-11-15
 * Time: 21.10
 */

class session {

    public $logedIn;

    public $userName;

    public $message='';

    public function __construct()
    {
        session_start();

        $this->checkLogin();

        $this->check_msg();
    }

    public function is_logedIn( ) {

        return $this->logedIn;

    }

    public function login( $user='') {
        if( $user ) {
            $this->userID = $_SESSION['username'] = $user;

            $this->logedIn = true;
        }
    }


    public function logout( ) {
        unset($_SESSION['username']);
        unset($this->userName);
        $this->logedIn = false;
    }


    private function checkLogin() {
        if( isset($_SESSION['username']) ) {
            $this->userName = $_SESSION['username'];
            // if( $_SESSION['access']==1)
            // $this->s_checked = $_SESSION['s_check'];

            $this->logedIn = true;

        }else {
            unset( $this->userName );

            $this->logedIn = false;
        }
    }

    public function message($msg='') {
        if( !empty($msg) )
            $_SESSION['message'] = $msg;
        else
            return $this->message;

    }

    private function check_msg() {
        if( isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        }else {
            $this->message='';
        }
    }


}


global $sesion;

$sesion = new session();
