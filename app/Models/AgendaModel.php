<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['BIDANG'];
}
