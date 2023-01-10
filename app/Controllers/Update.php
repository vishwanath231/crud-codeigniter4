<?php

namespace App\Controllers;

use App\Models\UpdateModel;
use CodeIgniter\Controller;

class Update extends Controller{

    public function __construct() {
        helper('form');
    }

    public function index($id){

        $updateModel = new UpdateModel();
        $data['user'] = $updateModel->currentUser($id);

        $request = \Config\Services::request();

        $datas = [];

        $base = base_url();

        if ($request->getMethod() === 'post') {

            $session = session();

            $userId =  $request->getVar('id');
            $name =  $request->getVar('name');
            $email = $request->getVar('email');
            $phone = $request->getVar('phone');
            $gender = $request->getVar('gender');
            $location = $request->getVar('location');

            if (!$name) {
                $session->setFlashdata('msg', 'Name is required!');
            } else if (!$email) {
                $session->setFlashdata('msg', 'Email is required!');
            } else if (!$phone) {
                $session->setFlashdata('msg', 'Phone is required!');
            } else if (!$gender) {
                $session->setFlashdata('msg', 'Gender is required!');
            } else if (!$location) {
                $session->setFlashdata('msg', 'Location is required!');
            } else {

                $datas = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'gender' => $gender,
                    'location' => $location
                ];

                $user['data'] = $updateModel->updateCurrentUser($userId, $datas);
                return redirect()->to($base . '/');
            }
        }
        return view('update_view', $data);
    }


    public function updateData(){

        // return view('update_view', $data);

    }

    

}
