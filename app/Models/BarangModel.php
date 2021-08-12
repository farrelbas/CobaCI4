<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM barang ORDER BY barang ASC");

        return $query->getResult();
    }
    function simpanData($table, $data)
    {
        $this->db->table($table)->insert($data);
        return true;
    }
    function editData($table, $data, $where)
    {
        $this->db->table($table)->update($data, $where);
        return true;
    }
    function hapusData($table, $where)
    {
        $this->db->table($table)->delete($where);
        return true;
    }
}
