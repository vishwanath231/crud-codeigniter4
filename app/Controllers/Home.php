<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line
use App\Models\DeleteModel;
use App\Models\HomeModel;

class Home extends BaseController{

    public function index($page = 'home'){

        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        
        $userModel = new HomeModel();

        $data['user'] = $userModel->getUsers();

        // print_r($data['user']);
        

        return view($page, $data);
    
    }


    public function delete($val){

        $base = base_url();
        
        $deleteModel = new DeleteModel();
        $deleteModel->deleteUser($val);
        return redirect()->to($base . '/');
    }
}
