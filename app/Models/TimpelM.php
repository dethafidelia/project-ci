<?php //BELUM BERHASIL

namespace App\Models;

use CodeIgniter\Model;

class TimpelM extends Model
{
    protected $table = 'tim_pelayanan';

    public function getTimpel($idBidang)
    {
        return $this->where('id_Bidang', $idBidang)->findAll();
    }
}
