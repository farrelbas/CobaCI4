<?php

namespace App\Controllers;

class Toko extends BaseController
{
	// protected $session;

	// public function __construct()
	// {
	// 	$this->session = \Config\Services::session();
	// }
	public function index()
	{
		return view('tokokomputer/index');
	}
}
