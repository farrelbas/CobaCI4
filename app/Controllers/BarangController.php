<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BarangModel;

class BarangController extends Controller
{
    protected $mbarang;
    protected $table = "barang";

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

    function simpan()
    {
        $kodeBarang = $this->request->getPost("kodeBarang");
        $barang = $this->request->getPost("barang");
        $stok = $this->request->getPost("stok");
        $harga = $this->request->getPost("harga");

        $data = [
            'kode_barang' => $kodeBarang,
            'barang' => $barang,
            'stok' => $stok,
            'harga' => $harga,
        ];
        try {
            $simpan = $this->mbarang->simpanData($this->table, $data);
            if ($simpan) {
                echo "<script>alert('Data Berhasil Disimpan'); window.location='" . base_url('/BarangController') . "';</script>";
            } else {
                echo "<script>alert('Data Gagal Disimpan'); window.location='" . base_url('/BarangController') . "';</script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Kode Barang Sudah Ada'); window.location='" . base_url('/BarangController') . "';</script>";
        }
    }
    function edit()
    {
        $id_barang = $this->request->getPost("id_barang");
        $kodeBarang = $this->request->getPost("kodeBarang");
        $barang = $this->request->getPost("barang");
        $stok = $this->request->getPost("stok");
        $harga = $this->request->getPost("harga");

        $data = [
            'kode_barang' => $kodeBarang,
            'barang' => $barang,
            'stok' => $stok,
            'harga' => $harga,
        ];

        $where = ['id_barang' => $id_barang];
        try {
            $edit = $this->mbarang->editData($this->table, $data, $where);
            if ($edit) {
                echo "<script>alert('Data Berhasil Diedit'); window.location='" . base_url('/BarangController') . "';</script>";
            } else {
                echo "<script>alert('Data Gagal Diedit'); window.location='" . base_url('/BarangController') . "';</script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Kode Barang Sudah Ada'); window.location='" . base_url('/BarangController') . "';</script>";
        }
    }
    function hapus($kode_barang)
    {
        $where = ['kode_barang' => $kode_barang];
        try {
            $hapus = $this->mbarang->hapusData($this->table, $where);
            if ($hapus) {
                echo "<script>alert('Data Berhasil Dihapus'); window.location='" . base_url('/BarangController') . "';</script>";
            } else {
                echo "<script>alert('Data Gagal Dihapus'); window.location='" . base_url('/BarangController') . "';</script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Kode Barang Sudah Ada'); window.location='" . base_url('/BarangController') . "';</script>";
        }
    }
}
