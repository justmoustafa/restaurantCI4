<?php

namespace App\Controllers;
use App\Models\ApptModel;
class Appointment extends BaseController
{
    private $userModel;

    public function __construct(){
    }
    public function index()
    { 
        return view('appointment');
    }
    public function selectAppointments(){
        
        $userModel = new ApptModel();
        $appts = $userModel->find([1]);
        $records['appts'] = $appts;//$table->generate($appts);

        return view('appointment',$records);
    }
}

