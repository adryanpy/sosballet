<?php

namespace  App\Controllers;

class AuthController extends BaseController
{

	function __construct()
	{
		$this->request = service('request');
		$this->usermdl = model('App\Models\UserModel');
		$this->authmdl = model('App\Models\AuthModel');
		$this->session = \Config\Services::session();

		if ($this->authmdl->verify() != -1) {
			$this->data['user'] = $this->usermdl->where('user_id', $this->session->get('user_id'))->first();
		}
	}

	public function register()
	{

		if ($this->request->getMethod() === 'post') {

			$email = $this->request->getPost('email');

			$data = array(
				'name' => $this->request->getPost('name'),
				'last_name' => $this->request->getPost('last_name'),
				'passwd' => password_hash($this->request->getPost('passwd'), PASSWORD_BCRYPT),
				'email' => $email,
				'user_type' => '0'
			);

			if (!$this->usermdl->where('email', $email)->first()) {

				$this->usermdl->insert($data);
				$this->authmdl->auth();
				if ($this->authmdl->redirect_helper(1, true, false) !== -1) {
					return $this->authmdl->redirect_helper(1, true, false);
				}
			} else 

				echo ("<script>alert(\"Usuário já existente.\")  </script>");
		
		}

		return view('website/auth/register');
	}

	public function login()
	{
		if ($this->request->getMethod() === "post") {
			$this->authmdl->auth();
		}

		if ($this->authmdl->redirect_helper(1, true, false) !== -1) {
			return $this->authmdl->redirect_helper(1, true, false);
		}

		return view('website/auth/login');
	}

	public function logout()
	{
		$session_data = [
			'user_id'  => -1,
			'auth' => FALSE
		];

		$this->session->set($session_data);

		if ($this->authmdl->redirect_helper(1, false, true) !== -1) {
			return $this->authmdl->redirect_helper(1, false, true);
		}
	}


	public function forget()
	{

		if ($this->request->getMethod() === 'post') {

			$receiver = $this->request->getPost('email');		
			$user = $this->usermdl->where('email', $receiver)->first();

			if ($user != NULL) {
				print_r($_POST);
				$corpo = "seu email é $receiver";   
			
				$email = \Config\Services::email();

				$email->setTo($receiver);
				$email->setFrom('no-reply@sosballet.com.br', 'Confirmação de cadastro');
				
				$email->setSubject("Confirmação de cadastro");
				$codigo = rand() % 9000 + 1000;
				$email->setMessage("Seu código de confirmação de email é: ".$codigo);

				if ($email->send()){
					$data = $email->printDebugger();
					print_r($data);
				}
				else{
					$data = $email->printDebugger();
					print_r($data);
				}
			}
		}
		return view('website/auth/forget');
	}
}
