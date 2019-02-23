<?php
// Cindy Alifia Putri 1301160199
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" style="height:100%">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Commerce</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/bootstrap.min.css') ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/slick/slick.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/slick/slick-theme.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/dataTables/datatables.min.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/style.css') ?>" />
  <link rel="stylesheet" type="text/css" href=" <?php echo base_url('static/css/style.css') ?> ">
</head>

<body class="login-body">
  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>" id="pad-left"><img class="img-thumbnail" id="imageLogo"  src="<?= base_url("images/wow.jpg") ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Kemeja Pria</a>
                <a class="dropdown-item" href="#">Kaos Pria</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Kemeja Wanita</a>
                <a class="dropdown-item" href="#">Kaos Wanita</a>
              </div>
            </li>
          </ul>
          <form class="form-inline mr-auto ml-1">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
          <div class="mr-0 my-2">
            <a href="cart.html" class="btn btn-success">
              <i class="fas fa-shopping-cart"></i>
              <span class="badge badge-light mx-2">4</span>
            </a>
            <a href="<?php echo site_url('C_Login')?>" class="btn btn-primary">Login</a>
            <a href="<?php echo site_url('C_Register')?>" class="btn btn-outline-light">Register</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Navbar -->
  
  <!-- SIGN UP FORM -->
  <form class="sign-in" method="post" action="<?php echo site_url('c_register/do_register') ?>">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Butik becho</h1>
      <p>
        Daftarkan diri anda
      </p>
    </div>
    <div class="form-group">
      <label for="inputName">Nama</label>
      <input type="text" class="form-control" id="inputName" placeholder="Name" name="nama">
    </div>
    <div class="form-group">
      <label for="inputEmail">Email address</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label for="inputPassword">ketik ulang password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Repeat Password" name="passwordkonfirm">
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
  </form>
  <!-- END SIGN UP FORM -->

  <script src="js/fontawesome-all.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="lib/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/rivets.bundled.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>

  <script type="text/javascript" src="lib/dataTables/datatables.js"></script>

</body>

</html>