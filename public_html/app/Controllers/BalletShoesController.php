<?php

namespace App\Controllers;

class BattleShoesController extends BaseController
{

    function __construct()
    {
        
        $this->request = service('request');
        $this->authmdl = model('App\Models\AuthModel');
        $this->usermdl = model('App\Models\UserModel');
        $this->bsmdl = model('App\Models\BalletShoesModel');
        $this->session = \Config\Services::session();

        if ($this->authmdl->verify() != -1) {

            $this->data['user'] = $this->usermdl->where('user_id', $this->session->get('user_id'))->first();
        }
    }

    public function index()
    {
        if ($this->authmdl->verify() != -1) {

            if ($this->data['user']->user_type != '1') {

                return redirect()->to('/');
            }
        } else {

            return redirect()->to('/auth/entrar');
        }


        $this->data['users'] = $this->usermdl->findAll();
        $this->data['view'] = 'website/';

        return view('/sapatilhas', $this->data);
    }

    public function bSControl($user_id = '')
    {
        if ($this->authmdl->verify() != -1) {

            if ($this->data['user']->user_type != '1') {

                return redirect()->to('/');
            }
        } else {

            return redirect()->to('/auth/entrar');
        }


        if ($this->request->getMethod() === "post") {

            $update_data = array(
                'user_id' => $this->data['user']->user_id,
                'bs_type' => $this->request->getPost('bs_type'),
                'class_time' => $this->request->getPost('class_time'),
                'test_time' => $this->request->getPost('test_time'),
            );

            $this->bsmdl->insert($update_data);




    }

    }
}
