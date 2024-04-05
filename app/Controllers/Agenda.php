<?php

namespace App\Controllers;

use App\Models\AgendaModel;

class Agenda extends BaseController
{
    public function index()
    {
        return view('gereja/header')
            . view('gereja/AGENDA');
    }

    public function getAllAgenda()
    {
        $model = new AgendaModel();
        $data = $model->findAll();
        echo json_encode($data);
    }
}
