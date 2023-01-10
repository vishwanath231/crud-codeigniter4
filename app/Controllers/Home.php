<?php

namespace App\Controllers;

use App\Models\DeleteModel;
use App\Models\HomeModel;

class Home extends BaseController{

    public function index(){

        $userModel = new HomeModel();

        $data['user'] = $userModel->getUsers();

        // print_r($data['user']);

        return view('home', $data);
    }


    public function delete($val){

        $base = base_url();
        
        $deleteModel = new DeleteModel();
        $deleteModel->deleteUser($val);
        return redirect()->to($base . '/');
    }
}
