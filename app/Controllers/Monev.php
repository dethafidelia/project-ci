<?php

namespace App\Controllers;

class Monev extends BaseController
{
    public function index()
    {
        return view('gereja/header')
            . view('gereja/MONEV');
    }
}
