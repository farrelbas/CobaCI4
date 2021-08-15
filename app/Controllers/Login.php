<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BarangModel;

class Login extends Controller
{
	protected $mbarang, $session;
	protected $table = "user";

	public function __construct()
	{
		$this->mbarang = new BarangModel();

		$this->mbarang->setTable($this->table);

		$this->session = \Config\Services::session();
	}

	public function index()
	{
		//echo password_hash("farrelbas", PASSWORD_DEFAULT) . "\n";

		return view('tokokomputer/page_login');
	}
	public function proses_login()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$where = [
			'username' => $username,
			// 'password' => $password,
		];
		//$cekData = $this->mbarang->cekData($this->table, $where);
		$getDataId = $this->mbarang->getDataId($this->table, $where);

		foreach ($getDataId as $data);

		if (password_verify($password, $data->password)) {
			$dataSession = [
				'setusername' => $data->username,
				'setnama' => $data->nama,
			];
			$this->session->set($dataSession);
			return redirect()->to('/Toko');
		} else {
			echo "<script>alert('Username Atau Password Salah'); window.location='" . base_url('/Login') . "';</script>";
		}
	}
}
