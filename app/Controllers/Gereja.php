<?php

namespace App\Controllers;

use App\Models\UserModel;

class Gereja extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        if (session()->has('pengguna')) {
            $gereja = $this->userModel->findAll();
            $data = [
                'List' => $gereja
            ];
            return view('gereja/HOME', $data);
        } else {
            return view('/Gereja/login');
        }
    }

    public function admin()
    {
        $post = $this->request->getPost(['usr', 'pwd']);

        // Cek apakah username dan password admin sesuai
        if ($post['usr'] === 'admin' && $post['pwd'] === '123') {
            return view('gereja/admin')
                . view('gereja/HOME');
        } else {
            $session = session();
            $session->setFlashdata('error', 'Login gagal. Periksa kembali username dan password Anda.');
            return redirect()->to('/login');
        }
    }


    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);

        if ($post['usr'] !== 'admin') {
            $query = $this->userModel->getUser($post['usr']);

            if ($query) {
                if ($post['pwd'] == $query['PASSWORD']) {
                    $_SESSION['usr'] = $post['usr'];
                    return view('gereja/header')
                        . view('gereja/HOME');
                } else {
                    $session = session();
                    $session->setFlashData('error', 'Login gagal. Periksa kembali username dan password Anda.');
                }
            }

            $session = session();
            $session->setFlashdata('error', 'Login gagal. Periksa kembali username dan password Anda.');
            return view('Gereja/login');
        } else {
            return $this->admin();
        }
    }

    public function login()
    {
        return view('Gereja/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect('gereja');
    }
}
