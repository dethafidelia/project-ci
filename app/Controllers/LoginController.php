<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        helper(['form', 'url']);

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($this->authenticate($username, $password)) {
            return redirect()->to('/dashboard');
        } else {
            $data['error'] = 'Invalid username or password';
            return view('login', $data);
        }
    }

    private function authenticate($username, $password)
    {
        $validUsername = 'admin';
        $validPassword = 'password';

        if ($username === $validUsername && $password === $validPassword) {
            return true;
        }

        return false;
    }
}
