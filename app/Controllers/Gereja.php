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

    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        $query = $this->userModel->getUser($post['usr']);
        if ($query) {
            if ($post['pwd'] == $query['PASSWORD']) {
                $_SESSION['usr'] = $post['usr'];
                return view('gereja/header')
                    . view('gereja/HOME');
            } else {
                $session = session();
                $session->setFlashData('error', 'Password salah');
            }
        }
        $session = session();
        $session->setFlashdata('error', 'user tidak ditemukan');

        return view('Gereja/login');
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
