<?php

namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model{


    public function getUsers(){

        $db = \Config\Database::connect();
        
        $query = $db->query("SELECT * FROM user");
        $result = $query->getResult();
        return $result;
    }


    public function filterUser($val){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT * FROM user WHERE name LIKE '%$val%'");
        $result = $query->getResult();
        return $result;
    }

}




?>