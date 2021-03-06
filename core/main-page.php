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

    /*
     * Count number of pages
     * */

   public function total_page(){
        global $main_db;
       $query = $main_db->query("SELECT * FROM ".$this->table);

       if($query)
           return $main_db->num_rows;
       return NULL;
    } 


    /*
    Insert into main page table  
    */
    public function insert_page_data($data){
        global $main_db; 
        $query = $main_db->insert($this->table, $data ); 
        if($query )
            return $main_db->insert_id; 
        return NULL;

    }

    public function edit_page( $data , $where ){
        global $main_db; 

        $query = $main_db->update($this->table, $data , $where ); 

        if( $query )
            return $query; 
        return NULL;
    }

    public function delete_page( $id ){
        global $main_db;
        $query = $main_db->query("DELETE FROM {$this->table} WHERE id=".$id);

        if($query)
            return $query; 
        return NULL;
    }

}
global $main_page;
$main_page = new main_page();