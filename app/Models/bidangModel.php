<?php //BELUM BERHASIL

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table = 'bidang'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'id_bidang';


    public function getAllBidang()
    {
        return $this->select('nama_bidang')->findAll();
    }

}
