<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilham | 202202138</title>
    <!-- <link rel="stylesheet" type="text/css" href="../"> -->
    
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />
    <style rel="stylesheet">
        table th {
            text-align: center;
        }
        table td {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">202202138</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Dashboard') ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Mahasiswa') ?>">Mahasiswa</a>
                </li>
            </ul>
            <a class="nav-link" href="<?php echo site_url('Auth/logout') ?>"><button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button></a>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Mesin Telusur" aria-label="Mesin Telusur">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form> -->
        </div>
    </nav>