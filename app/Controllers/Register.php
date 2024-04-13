<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        return view('formDPPH');
    }

    // public function store()
    // {
    //     $model = new UserModel();

    //     $data = [
    //         'nama_lengkap' => $this->request->getPost(['nama_lengkap']),
    //         'nama_bidang' => $this->request->getPost('nama_bidang'),
    //         'nama_timpel' => $this->request->getPost('nama_timpel'),
    //         'username' => $this->request->getPost('username'),
    //         'password' => $this->request->getPost('password'),
    //     ];

    //     $model->saveUser($data);

    //     return redirect()->to('/register');
    // }
}
