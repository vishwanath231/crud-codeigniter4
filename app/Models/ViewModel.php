<?php

namespace App\Models;
use CodeIgniter\Model;

class ViewModel extends Model{

    public function getUser($id){

        $db = \Config\Database::connect();
        
        $query = $db->query("SELECT * FROM user WHERE id= '$id'");
        $result = $query->getResult();
        return $result;
    }

}
