<?php
  require_once("connexio_BBDD.php");
  session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//ES">
<html>
<head>
    <title>Bernapop</title>
    <meta charset="UTF-8">
    <meta name="description" content="Web exemple">
    <meta name="keywords" content="HTML5,CSS3, WEB">
    <meta name="author" content="Toni López">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/hoja_estilo.css" rel="stylesheet" type="text/css" media="screen">

</head>

<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-color1">
    <div class="container-lg">
      <a class="navbar-brand fw-bold fs-3 me-5" href="index.php">Bernapop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex my-3 buscador" action="index.php" method="get">
          <input class="form-control me-2" type="search" placeholder="Què busques?" aria-label="Search"  name="buscar">
          <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown my-1">
            <a class="nav-link dropdown-toggle btn btn-outline-primary px-md-3 me-md-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuari
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Veure perfil</a></li>
              <li><a class="dropdown-item" href="#">Tancar sessió</a></li>
            </ul>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link btn btn-primary px-md-3 fw-bold" href="#">Pujar producte</a>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
