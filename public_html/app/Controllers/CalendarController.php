<?php namespace  App\Controllers;

class CalendarController extends BaseController{
	
    function __construct(){
		$this->request = service('request');
		$this->authmdl = model('App\Models\AuthModel');
		$this->usermdl = model('App\Models\UserModel');
		$this->eventmdl = model('App\Models\EventModel');
		$this->session = service('session');
		
		$this->data['logged'] = false;

		if($this->authmdl->verify() != -1){
			$this->data['user'] = $this->usermdl->where('user_id', $this->session->get('user_id'))->first();
			$this->data['logged'] = true;						
		}


	}
    public function index()
    {
        if ($this->authmdl->verify() != -1) {
			$this->data['events'] = $this->eventmdl->where('user_id', $this->session->get('user_id'))->findAll();

            return view('/website/calendar/calendar',$this->data);
        } else {			

            return redirect()->to('/auth/entrar');
        }
    }

	public function delete($event_id){
		if ($this->authmdl->verify() != -1) {

			$this->eventmdl->where("id", $event_id)->delete();

			return '{"status":"success"}';
			
        } else {
            return redirect()->to('/auth/entrar');
        }
	}

	public function criar(){
		if ($this->request->getMethod() === "post") {

            $update_data = array(
                'title' => $this->request->getPost('title'),
                'url' => $this->request->getPost('url'),
				'start' => $this->request->getPost('date'),
				'end' => $this->request->getPost('date'),
				'backgroundColor' => $this->request->getPost('color'),
				'borderColor' => $this->request->getPost('color'),
				'description' => $this->request->getPost('description'),
				'user_id' => $this->session->get('user_id'),
				'allDay' => '0'
            );

			$this->eventmdl->insert($update_data);
			return redirect()->to('/calendario');
        }
	}

}