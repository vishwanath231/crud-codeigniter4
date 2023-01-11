<?php

namespace App\Controllers;

use App\Models\ViewModel;
use CodeIgniter\Controller;


class View extends Controller{

    public function viewController($id){

        $viewModel = new ViewModel();
        $data['user'] = $viewModel->getUser($id);

        return view('view_screen', $data);
    }
}
