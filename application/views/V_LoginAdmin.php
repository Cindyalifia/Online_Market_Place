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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/slick/slick.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/slick/slick-theme.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/dataTables/datatables.min.css') ?>" />
  <link rel="stylesheet" type="text/css" href=" <?php echo base_url('static/css/style.css') ?> ">
</head>



  <!-- Sign IN FORM -->
  <form class="sign-in" action=" <?php echo site_url('/C_LoginAdmin/do_loginAdmin') ?> " method="post">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Jualin Admin</h1>
      <h2><?php echo $this->session->flashdata('pesan'); ?></h2>
      <p>
        Masukkan email dan password admin anda untuk masuk
      </p>
    </div>
    <div class="form-group">
      <label for="inputEmail">Email address</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color: pink">Submit</button>
  </form>
  <!-- END SIGN IN FORM -->

  <script src="<?php echo base_url('static/js/fontawesome-all.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/bootstrap.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/lib/slick/slick.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/js/rivets.bundled.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/jquery.zoom.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('lib/dataTables/datatables.js') ?>"></script>

</body>

</html>