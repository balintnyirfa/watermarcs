<?php
  session_start();
?>

<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon"> <!-- Icons made by "https://www.freepik.com" Freepik from "https://www.flaticon.com/" -->
    
    <title>Watermarcs</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid befogo">
          <a class="navbar-brand d-lg-none" href="./index.php"><span id="fejlecBrand">Watermarcs</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="nav navbar-nav">
              <?php
                if (isset($_SESSION["userId"])) {
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='profile.php'>Profilom</a></li>";
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='images.php'>Képeim</a></li>";
                }
                else {
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='./about.php'>Oldalról</a></li>";
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='./contact.php'>Támogatás</a></li>";
                }
              ?>
            </ul>

            <a class="navbar-brand d-none d-lg-block m-0" href="./index.php"><span id="fejlecBrand">Watermarcs</span></a>

            <ul class="nav navbar-nav">
              <?php
                if (isset($_SESSION["userId"])) {
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='./contact.php'>Támogatás</a></li>";
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='./includes/logout.inc.php'>Kijelentkezés</a></li>";
                }
                else {
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='login.php'>Bejelentkezés</a></li>";
                  echo "<li class='nav-item'><a class='nav-link link' id='menu_link' href='signup.php'>Regisztráció</a></li>"; 
                }
              ?>
            </ul>
          </div>
        </div>
    </nav>

    <div class="wrapper">