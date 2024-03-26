<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['USERNAME', 'PASSWORD'];

    public function ambil($USERNAME)
    {
        return $this->where(['USERNAME' => $USERNAME])->first();
    }
}
