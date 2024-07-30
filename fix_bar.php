<?php
include "db_conn.php";

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <link rel="stylesheet" href="style.css" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-static/">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template -->
    <link href="navbar-static.css" rel="stylesheet">
  </head>
  <body>
  <div class="menu-bar">
      <h1 class="logo">Ngu Chung Beng & Sons</h1>
      <ul>
        <li><a href="home1.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Remanufacturing <i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                  <li><a href="index_ckd1.php">Initial Inspection</a></li>
                  <li><a href="index_phy.php">Physical Inspection</a></li>
                  <li><a href="index_engine.php">Compression Test</a></li>

                  <li>
                    <a href="#">Core Management <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="index_alternator.php">Alternator</a></li>
                        <li><a href="index_starter.php">Starter Motor</a></li>
                        <li><a href="index_turbo.php">Turbocharger</a></li>
                        <li><a href="index_brake.php">Brake</a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </div>
        </li>
        <li><a href="#">Blog</a>
        </li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    &nbsp;




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
