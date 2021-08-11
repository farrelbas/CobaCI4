<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BarangModel;

class BarangController extends Controller
{
    protected $mbarang;
    public function __construct()
    {
        $this->mbarang = new BarangModel();
    }

    public function index()
    {
        $getdata = $this->mbarang->getdata();

        $data = array(
            'dataBarang' => $getdata,
        );

        return view('tokokomputer/barang', $data);
    }
}
