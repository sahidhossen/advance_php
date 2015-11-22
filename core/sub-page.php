<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 22-11-15
 * Time: 20.23
 */

class sub_page {

//    Sub page table
    private $table= "sub_page";


    public function get_all_subpage($limit=5){
        global $main_db;

        $query = $main_db->get_results("SELECT *FROM ".$this->table." LIMIT ".$limit);

        if($query)
            return $query;
        return NULL;
    }

    public function get_page_by_mainPage( $id ){

        global $main_db;

        $query = $main_db->get_results("SELECT *FROM ".$this->table." WHERE main_page_id=".$id);
        if($query)
            return $query;
        return NULL;
    }

}