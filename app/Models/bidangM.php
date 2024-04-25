<?php //BELUM BERHASIL

namespace App\Models;

use CodeIgniter\Model;

class bidangM extends Model
{
    protected $table = 'bidang';

    public function getBidang()
    {
        return $this->findAll();
    }
}
