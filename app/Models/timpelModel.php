<?php

namespace App\Models;

use CodeIgniter\Model;

class TimpelModel extends Model
{
    protected $table = 'tim_pelayanan';
    protected $allowedFields = ['*',]; // Allow all columns for simplicity (adjust as needed)

    public function get_tim_pelayanan_by_bidang($bidang_id)
    {
        return $this->where('id_bidang', $bidang_id)->get()->getResultArray();
    }
}
