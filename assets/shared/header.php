<?php 
  session_start();
  ob_start();
  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Heart's Sight</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700;800&display=swap"
    rel="stylesheet" />

  <style>
    * {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>

<body>
  <!--start header-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/yourheart'ssight">
        <img src="/yourheart'ssight/assets/images/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
          <?php if(isset($_SESSION["patient_id"]) || isset($_SESSION["therapist_id"])){ ?>
            <li class="nav-item active">
            <a class="nav-link text-primary" href="/yourheart'ssight/index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/yourheart'ssight/index.php#service1">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/yourheart'ssight/assets/users/questions.php">Make Your Test</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-primary" href="/yourheart'ssight/assets/users/doctors.php">Our Therapists</a>
          </li>
         <?php } ?>
        </ul>
        <?php
        if(!isset($_SESSION["patient_id"]) && !isset($_SESSION["therapist_id"])){ ?>
        <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-primary my-2 my-sm-0 mx-2 rounded-pill" type="submit"
          href="/yourheart'ssight/assets/users/create.php">Sign Up</a>
          <a class="btn btn-outline-primary my-2 my-sm-0 rounded-pill" type="submit"
          href="/yourheart'ssight/assets/users/login2.php">Sign In</a>
          </form>
          
        <?php }else{ ?>
          <form class="form-inline my-2 my-lg-0 hide">
          <a href="/yourheart'ssight/assets/users/profile.php"><ion-icon name="person-circle" class="text-primary " style="font-size: 3rem;"></ion-icon></a>
          <a class="btn btn-outline-primary my-2 my-sm-0 rounded-pill" type="submit" href="/yourheart'ssight/index.php?logout">
            <ion-icon name="log-out-outline"></ion-icon>Log Out
        </a>
        </form>
         <?php } ?>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>