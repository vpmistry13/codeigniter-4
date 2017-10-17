<?php

namespace App\Models;

use CodeIgniter\Model;
class Book_model extends Model {

    var $table = 'books';
    
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('books');
    }

    public function get_all_books() {
//       $query = $this->db->table('books');
       $query = $this->db->query('select * from books');
//      print_r($query->getResult());
       // $query = $this->db->get();
        return $query->getResult();
    }

    public function get_by_id($id) {
      $sql = 'select * from books where book_id ='.$id ;
      $query =  $this->db->query($sql);
      
      return $query->getRow();
    }

    public function book_add($data) {
        
        $query = $this->db->table($this->table)->insert($data);
       
        return $this->db->insertID();
    }

    public function book_update($where, $data) {
        $this->db->table($this->table)->update($data, $where);
//        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('book_id' => $id)); 
    }

}
