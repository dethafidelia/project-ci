<?php //BELUM BERHASIL

namespace App\Models;

use CodeIgniter\Model;

class TimpelModel extends Model
{
    protected $table = 'tim_pelayanan';
    protected $allowedFields = ['*',]; // Allow all columns for simplicity (adjust as needed)

    public function getAllTimPelayanan($idBidang)
    {
        return $this->where('id_bidang', $idBidang) //sesuaikan nama kolom yang memuat id bidang
            ->findAll();
    }
}
