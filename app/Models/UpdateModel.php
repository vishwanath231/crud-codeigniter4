<?php

namespace App\Models;
use CodeIgniter\Model;

class UpdateModel extends Model{

    public function currentUser($id){

        $db = \Config\Database::connect();
        
        $query = $db->query("SELECT * FROM user WHERE id = '$id'");
        $result = $query->getResult();
         return $result;
    }

    public function updateCurrentUser($id, $data){

        $db = \Config\Database::connect();
        $query = $db->table('user');
        $up = $query->where('id', $id);
        return $up->update($data);
        
    }

}
