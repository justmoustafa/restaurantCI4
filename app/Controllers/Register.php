<?php

namespace App\Controllers;
use App\Models\UserModel;
use Config\Services;
class Register extends BaseController
{
    public function index()
    { 
        $userModel = new UserModel();
        $session = session();
        $validation = \Config\Services::validation();

        if($this->request->getMethod() == 'post'){

            $data = $this->request->getVar();
            $formData = [
                'name'=> $data['name'],
                'email'=> $data['email'],
                'phone'=> $data['phone'],
                'password'=> $data['password']
            ];

            $rules = [
                'name' =>'required|min_length[10]',
                'email' =>[
                    'rules' => 'required|valid_email|is_unique[users.email]',
                    'errors' =>[
                        'required' => 'required field',
                        'is_unique' => 'Already existed email',
                    ],
                ],
                "phone" => "required|numeric",
                "password" => "required",
                "cpassword" => "required|matches[password]",
            ];
            
            if(! $this->validate($rules)){
                return view('register', [
                    'validation' => $this->validator
                ]);
            }else{
                $userModel->insert($formData);
                return redirect()->to(base_url('login')); 
            }
        }
        return view('register');
    }

    }
