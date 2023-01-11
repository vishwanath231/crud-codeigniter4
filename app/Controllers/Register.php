<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegisterModel;

class Register extends Controller{



    public function index(){

        helper('form');
        $request = \Config\Services::request();
        $data = [];

        $base = base_url();

        if ($request->getMethod() === 'post') {

            $session = session();

            $profile = $request->getFile('profile');
            $name =  $request->getVar('name');
            $email = $request->getVar('email');
            $phone = $request->getVar('phone');
            $gender = $request->getVar('gender');
            $location = $request->getVar('location');
            
            if (!$profile) {
                $session->setFlashdata('msg', 'Profile ir required!');
            }else if (!$name) {
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


                $file =  $profile->getRandomName();
                $profile->move('./upload', $file);

                $data = [
                    'profile' => $file,
                    'name' => $name,
                    'email'=> $email,
                    'phone' => $phone,
                    'gender' => $gender,
                    'location' => $location
                ];
                $registerModel = new RegisterModel();

                $registerModel->createUser($data);
                return redirect()->to($base . '/');
            }
        }

        return view('register_view');
    }


    

}


?>