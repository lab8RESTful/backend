<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    function __construct() {
        parent::__construct();
        $this->load->model('menu');
        $this->data['pagetitle'] = 'Ferry Trip Planner (Server)';
    }

	public function index()
	{
		$this->data['title'] = 'Menu(Server)';
		$this->data['pagebody'] = 'welcome_message';

		$this->render();
	}

}
