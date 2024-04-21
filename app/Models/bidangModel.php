<?php //BELUM BERHASIL

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table = 'bidang'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'id_bidang';


    public function getBidang()
    {
        return $this->select('nama_bidang')->findAll();
    }
}
