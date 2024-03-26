<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url("styles.css") ?>">

</head>

<body>
    <div class="navbar">
        <h2>PAROKI KELUARGA KUDUS BANTENG</h2>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li><a href="<?= base_url('agenda') ?>">Agenda</a></li>
            <li><a href="<?= base_url('monev') ?>MONEV.php">Monev</a></li>
            <li><a href="<?= base_url('about') ?>ABOUT.php">About</a></li>
            <li style="float:right"><a class="active" href="<?php echo base_url('logout'); ?>">Logout</a></li>
        </ul>
    </div>