<?php

namespace App\Controllers;
use App\Models\ContactModel;
use Config\Session;

class Home extends BaseController
{
    private $signedOut = true;
    public function index()
    { 
        return view('index');
    }
    public function logOut(){
        session()->destroy();
        return redirect()->to('/');
    }
    public function contact(){
        $contactModel = new ContactModel();
        $session = session();
        $data = $this->request->getVar();

        if(! $contactModel->insert($data)){
            $session->setFlashData('sent', 'Your message has been sent successfully');
            return redirect()->to('/#contact');
        }
            $session->setFlashData('sent', 'something went wrong');
            return redirect()->to('/#contact');

            
    }
}
