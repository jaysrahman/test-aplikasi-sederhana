<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.dataTables.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body class="bgc">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="card card-login">
                    <div class="card-header bg-white title-login border-light text-center">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col mb-3">
                                <a href="<?= base_url('menu/logic'); ?>" class="btn btn-login btn-block text-white">Logic</a>
                            </div>
                            <div class="col">
                                <a href="<?= base_url('menu/database'); ?>" class="btn btn-login btn-block text-white">Database</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>