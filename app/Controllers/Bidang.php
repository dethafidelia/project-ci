<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\bidangModel;
use App\Models\timpelModel;

class Bidang extends Controller
{
    public function index()
    {
        // Get all bidang data
        $bidangModel = new BidangModel();
        $bidangData = $bidangModel->get_all_bidang();

        // Prepare data for view
        $data = [
            'title' => 'Daftar Bidang',
            'bidang' => $bidangData
        ];

        // Load the bidang view and pass the data
        echo view('bidang/index', $data);
    }

    public function getTimPelayananByBidang($bidangId)
    {
        // Validate bidangId
        if (!is_numeric($bidangId) || $bidangId < 1) {
            return json_encode(['error' => 'Invalid bidang ID']);
        }

        // Get tim pelayanan data for the specified bidang
        $timPelayananModel = new timpelModel();
        $timPelayananData = $timPelayananModel->get_tim_pelayanan_by_bidang($bidangId);

        // Prepare response data
        $response = [
            'success' => true,
            'tim_pelayanan' => $timPelayananData
        ];

        // Return JSON response
        echo json_encode($response);
    }
}
