<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 21-11-15
 * Time: 09.53
 */

class main_page {

    private $table = 'main_page';
    private $admin_tbl = 'admin';

    public function get_all_pages(){
        global $main_db;
        $results = $main_db->get_results('SELECT *FROM '.$this->table);
        if($results)
            return $results;
        return NULL;
    }

    public function get_page_by_id( $id ){
        global $main_db;
        $query = $main_db->get_rows("SELECT *FROM ".$this->table." WHERE id=".$id);
        if($query)
            return $query;
        return NULL;
    }

}
global $main_page;
$main_page = new main_page();