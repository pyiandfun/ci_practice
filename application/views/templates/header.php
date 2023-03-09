<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
    <body>
    <header class="d-flex justify-content-between container">
    <a href="#">Logo</a>
        <div>
            <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item pe-5">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('pages/view');?>">Home</a>
                    </li>
                    <li class="nav-item pe-5">
                        <a class="nav-link" href="<?php echo base_url('pages/view/about'); ?>">About</a>
                    </li>
                    <li class="nav-item pe-5">
                        <a class="nav-link" href="<?php echo base_url('posts'); ?>">Blog</a>
                    </li>
                </ul>
        </div>
        <div class="navbar-nav d-flex flex-row">
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item pe-5">
                    <a href="<?php echo base_url('pages/view/register')?>">Regiser</a>
                </li>
                <li>
                    <a href="<?php echo base_url('pages/view/login')?>">Login</a>
                    <a href="<?php echo base_url('logout')?>">Logout</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="container my-4">