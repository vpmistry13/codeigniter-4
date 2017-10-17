<?php
namespace App\Models\AdminModels;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup_Model
 *
 * @author vishal
 */
use CodeIgniter\Model;
class Signup_Model extends Model {
    //put your code here
    
    var $table = 'users';
    
    public function __construct() {
        parent::__construct();
        
        $db = \Config\Database::connect();
    }
    
    public function add_user($data)
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }
}
