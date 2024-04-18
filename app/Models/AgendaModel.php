<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'programasi';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['BIDANG'];

    public function tambah($data)
    {
        $this->save([
            'BIDANG' => $data['BIDANG']
        ]);
    }
}
