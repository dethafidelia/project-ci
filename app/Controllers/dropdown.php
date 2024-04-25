<?php //BELUM BERHASIL

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\bidangM; // Ubah import
use App\Models\TimpelM; // Ubah import

class dropdown extends Controller
{
    public function index()
    {
        $bidangModel = new bidangM();
        $timpelModel = new TimpelM();

        $bidang = $bidangModel->getBidang();
        $timpel = [];

        // Set data awal kota berdasarkan provinsi pertama
        if ($bidang) {
            $idBidangPertama = $bidang[0]['idBidang'];
            $timpel = $bidangModel->getTimpel($idBidangPertama);
        }

        $data = [
            'bidang' => $bidang,
            'timpel' => $timpel,
        ];

        return view('gereja/AGENDA', $data);
    }

    public function getTimpel($idBidang)
    {
        $bidangModel = new bidangM();
        $timpel = $bidangModel->getTimpel($idBidang);

        echo json_encode($timpel);
    }
}
