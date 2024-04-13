<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-2 p-3 text-white text-center">
            <img src="<?= base_url('logo_login.png') ?>" alt="Paroki Logo" style="height: 100px">
        </div>
        <div class="col-sm-10 p-3 text-center">
            <h1>PAROKI KELUARGA KUDUS BANTENG</h1>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="d-flex container-fluid">
                <div class="flex-grow-1">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('homeAdmin') ?>">HOME ADMIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('dpph') ?>">DATA DPPH</a>
                        </li>

                    </ul>
                </div>
                <div class="ms-auto" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item" style="float:right">
                            <a class="nav-link" href="<?php echo base_url('logout'); ?>">LOGOUT</a>
                        </li>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </nav>