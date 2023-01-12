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

        $request = \Config\Services::request();

        $q = $request->getVar('search');
        $n = $request->getVar('profile');

        echo $n;

        if ($q) {

            $filterModel = new HomeModel();
            $data['user'] = $filterModel->filterUser($q);
            return view($page, $data);

        }else {
            $userModel = new HomeModel();

            $data['user'] = $userModel->getUsers();

            return view($page, $data);
        }

        

    
    }


    public function delete($val){

        $base = base_url();
        
        $deleteModel = new DeleteModel();
        $deleteModel->deleteUser($val);
        return redirect()->to($base . '/');
    }
}
