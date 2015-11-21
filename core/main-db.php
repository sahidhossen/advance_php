<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 18-11-15
 * Time: 20.26
 */

class main_db{

//    Database Name
    public $dbname;
//    Host name
    public $host;
//    Database User
    public $dbuser;
//    Database Password
    public $dbpass;
//    This is boolean function for check the connectin
    public $connect;

//    Check Errors
    public $errors;

    /*
    * Store the query result
    */
    protected $result;
    /*
    * Store the last query
    */
    var $last_query;

    /*
    * store number of queries
    */

    var $num_queries = 0;

    /*
    * store last insert id
    */
    var $insert_id = 0;


    /*
    * Affect rows
    */
    var $rows_affected = 0;
    /*
    * last error
    */
    public $last_error ='';

    function __construct($dbname,$user,$host,$pass)
    {
        register_shutdown_function( array( $this, '__destruct' ) );
        $this->dbname = $dbname;
        $this->dbuser = $user;
        $this->host = $host;
        $this->pass = $pass;

        $this->connect();
       // return  $dbname." ".$user." ".$host." ".$pass;
    }
    public function __destruct() {
        return true;
    }

    /*
     * Make connection with mysql database
     * */
    public function connect(){
        $this->connect = mysql_connect($this->host, $this->dbuser, $this->pass);
        if($this->connect){
            $this->dbconnect($this->dbname, $this->connect);
        }else {
            $this->errors = "Sorry your database connection fail.";
        }
    }

    private function dbconnect($dbname, $connect){
        if( is_null($connect))
            $connect = $this->connect;
            $dbconnect =  mysql_select_db($dbname, $connect);
            if(!$dbconnect){
                echo "Please check your database";
                exit();
            }

    }


    public function query( $query ) {

        $this->flush();

        $this->last_query = $query;

        $this->_do_query( $query );

        //Store the last query
        $this->last_error = mysql_error( $this->connect );

        if( $this->last_error ) {
            if ( $this->insert_id && preg_match( '/^\s*(insert|replace)\s/i', $query ) )
                $this->insert_id = 0;
            return false;
        }

        if ( preg_match( '/^\s*(create|alter|truncate|drop)\s/i', $query ) ) {
            $return_val = $this->result;
        } elseif ( preg_match( '/^\s*(insert|delete|update|replace)\s/i', $query ) ) {
            $this->rows_affected = mysql_affected_rows( $this->connect );

            // Take note of the insert_id
            if ( preg_match( '/^\s*(insert|replace)\s/i', $query ) ) {

                $this->insert_id = mysql_insert_id( $this->connect);

            }
            // Return number of rows affected
            $return_val = $this->rows_affected;
        }else {
            $num_rows = 0;

            while ( $row = @mysql_fetch_object( $this->result ) ) {
                $this->last_result[$num_rows] = $row;
                $num_rows++;

            }

            // Log number of rows the query returned
            // and return number of rows selected
            $this->num_rows = $num_rows;
            $return_val     = $num_rows;
        }

        return $return_val;

    }

    private function _do_query( $query ) {
        $this->result = mysql_query($query, $this->connect);
    }


    public function get_results( $query ) {
        if( $query ) {
            $this->query($query);
        }else {
            return null;
        }

        return $this->last_result;
    }

//    public function show_errors( $show = true ) {
//    $errors = $this->show_errors;
//    $this->show_errors = $show;
//    return $errors;
//}

    /*
     * Flush everything before create a query
     * */
    public function flush() {
        $this->last_result = array();
        //$this->col_info    = null;
        $this->last_query  = null;
        $this->rows_affected = $this->num_rows = 0;
        $this->last_error  = '';

        if ( is_resource( $this->result ) ) {

            mysql_free_result( $this->result );

        }
    }
}