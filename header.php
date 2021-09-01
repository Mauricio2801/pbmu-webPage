<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="main-header">
        <?php
        echo "<img class=\"logo-image\" src=\"http://localhost/wordpress/wordpress/wp-content/uploads/2021/09/logo_pbmu.png\" alt=\"Logo\" />";
        ?>
        <nav class="nav nav-pills nav-fill">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            <a class="nav-link" href="#">Sobre el programa</a>
            <a class="nav-link" href="#">Becarios</a>
            <a class="nav-link" href="#">Multimedia</a>
            <a class="nav-link" href="#">Donaciones</a>
            <a class="nav-link" href="#">Contactos</a>
        </nav>
    </header>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="" class="d-block w-100" alt="imagen1">
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="imagen2">
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="imagen3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
