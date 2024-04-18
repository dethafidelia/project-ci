<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BidangModel; // Ubah import
use App\Models\TimpelModel; // Ubah import

class Bidang extends Controller
{
    public function index()
    {
        $bidangModel = new BidangModel();
        $bidangData = $bidangModel->get_all_bidang();

        $data = [
            'title' => 'Formulir Pendaftaran',
            'bidang' => $bidangData
        ];

        echo view('gereja/formDPPH', $data);
    }

    public function getTimPelayananByBidang($bidangId)
    {
        if (!is_numeric($bidangId) || $bidangId < 1) {
            return json_encode(['error' => 'Invalid bidang ID']);
        }

        $timPelayananModel = new TimpelModel();
        $timPelayananData = $timPelayananModel->etTimPelayananByBidang($bidangId);

        $response = [
            'success' => true,
            'tim_pelayanan' => $timPelayananData
        ];

        var_dump($response); // Debugging

        return json_encode($response);
    }
}
