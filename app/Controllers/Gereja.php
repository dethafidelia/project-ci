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
                return view('gereja/HOME');
            }
        }

        return view('gereja ');
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

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/gereja/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
}
