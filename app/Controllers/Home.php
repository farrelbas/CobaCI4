<?php

namespace App\Controllers;

class Home extends BaseController
{
	protected $session;

	public function __construct()
	{
		$this->load->library('session');
		$this->session = \Config\Services::session();
	}
	public function index()
	{
		return view('welcome_message');
	}
}
