<?php

namespace App\Controllers;

class DPPH extends BaseController
{
    public function index()
    {
        return view('gereja/admin')
            . view('gereja/formDPPH');
    }
}
