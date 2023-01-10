<?php

namespace App\Models;
use CodeIgniter\Model;

class DeleteModel extends Model{

    public function deleteUser($id){

        $db = \Config\Database::connect();

        return $db->table('user')->delete(['id' => $id]);;
    }
}
