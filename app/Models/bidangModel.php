<?php

namespace App\Models;

use CodeIgniter\Model;

class bidangModel extends Model
{
    protected $table = 'bidang';
    protected $allowedFields = ['*',]; // Allow all columns for simplicity (adjust as needed)

    // You can add additional methods specific to bidang here
    // For example, a method to get all bidang:
    public function get_all_bidang()
    {
        return $this->get()->getResultArray();
    }
}
