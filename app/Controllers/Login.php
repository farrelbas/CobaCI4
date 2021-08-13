<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BarangModel;

class Login extends BaseController
{
	protected $mbarang;
	protected $table = "barang";

	public function __construct()
	{
		$this->mbarang = new BarangModel();
	}

	public function index()
	{
		return view('tokokomputer/page_login');
	}
}
