<?php //BELUM BERHASIL

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BidangModel; // Ubah import
use App\Models\TimpelModel; // Ubah import

class Bidang extends Controller
{
    public function index()
    {
        $bidangModel = new BidangModel();
        $bidangData = $bidangModel->getAllBidang();

        $data = [
            'title' => 'Formulir Pendaftaran',
            'bidang' => $bidangData
        ];

        echo view('gereja/formDPPH', $data);

        // Buat instansi model
        $model = new BidangModel();

        // Ambil data bidang dari model
        $data['bidang'] = $model->getAllBidang();

        // Tampilkan hasil var_dump atau print_r
        print_r($data['bidang']);

        // Tampilkan view dengan data bidang
        return view('formDPPH', $data);
    }

    public function getAllBidang()
    {
        $model = new BidangModel();
        $data = $model->findAll();
        echo json_encode($data);
    }

    public function getAllTimPelayanan()
    {
        $idBidang = $this->request->getGet('selectedValue'); //ambil nilai yang dikirim dari ajax

        // Proses mendapatkan data kategori berdasarkan selectedValue
        // Contoh: mengambil data dari database
        $model = new TimpelModel(); //Sesuaikan dengan model kakak
        $categories = $model->getAllTimPelayanan($idBidang);

        // Pastikan data kategori diubah ke format yang tepat
        // dan kirim sebagai response JSON
        return $this->response->setJSON($idBidang);
    }
}
