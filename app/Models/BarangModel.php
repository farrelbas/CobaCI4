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
}
