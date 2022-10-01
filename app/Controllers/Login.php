<?php

namespace App\Controllers;
use App\Models\UserModel;
use Config\Services;

class Login extends BaseController
{
    public function index()
    { 
        $userModel = new UserModel();
        
        $validation = \Config\Services::validation();

        $session = \Config\Services::session();
        
        if($this->request->getMethod() == 'post'){

            $data = $this->request->getVar();
            $validationRules = [
                    'email' =>[
                        'rules' =>'required',
                        'errors' =>[
                                'required' => 'u gotta type ur email',
                        ]
                    ],
                    'password'=>[
                        'rules'=>'required',
                        'errors'=>[
                                'required' => 'u gotta type some password',
                        ]
                    ]
                ];
           if (! $this->validate($validationRules)) {
                return view('login', [
                    'validation' => $this->validator,
                ]);
            }else{
                $userData = $userModel->where([
                    'email' => $data['email'],
                    ])->first();
                    
                    if(isset($userData)){
                        if($data['email'] == $userData['email'] && $data['password'] == $userData['password']){
                            $session->set($userData);
                            return redirect()->to('/');
                        }else{
                            $session->setFlashData("wrongInput","E-mail or password is incorrect");
                        }
                    }else{
                            $session->setFlashData("wrongInput","E-mail or password is incorrect");
                        }
            }
    }
        return view('login');
    }
}