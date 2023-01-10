<?php

namespace App\Models;
use CodeIgniter\Model;

class RegisterModel extends Model{

    public function createUser($data){

        $db = \Config\Database::connect();
        
        return $db->table('user')->insert($data);
    }

}
