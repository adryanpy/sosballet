<?php

namespace  App\Controllers;

class StudyController extends BaseController
{

    function __construct()
    {

        $this->authmdl = model('App\Models\AuthModel');
        $this->usermdl = model('App\Models\UserModel');
        $this->session = \Config\Services::session();
        $this->data['logged'] = false;
        //   $this->data[''];
        if ($this->authmdl->verify() != -1) {

            $this->data['user'] = $this->usermdl->where('user_id', $this->session->get('user_id'))->first();
            $this->data['logged'] = true;
        }
    }

    public function index()
    {
        if ($this->authmdl->verify() != -1) {

            return view('website/study/index',$this->data);
        } else {
            return redirect()->to('/auth/entrar');
        }
    }
    public function quiz()
    {
        if ($this->authmdl->verify() != -1) {
        return view('website/study/quiz',$this->data);
    } else {
        return redirect()->to('/auth/entrar');
    }
    }
}
