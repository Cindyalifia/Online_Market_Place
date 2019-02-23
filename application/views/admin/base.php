<!-- // Setyo Nugroho 1301164053 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" style="height:100%">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/slick/slick.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/slick/slick-theme.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/dataTables/datatables.min.css') ?>" />
  <link rel="stylesheet" type="text/css" href=" <?php echo base_url('static/css/style.css') ?> ">

  <!-- LOAD JS IN HEAD! WHAT THE FUCK!, THIS IS JUST FOR TUBES SAKE! -->
  <script src="<?php echo base_url('static/js/fontawesome-all.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/bootstrap.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/lib/slick/slick.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/js/rivets.bundled.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/jquery.zoom.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/lib/dataTables/datatables.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/js/sweetalert.min.js') ?>"></script>
</head>
  <?php $this->load->view('admin/V_AdminNav') ?>  
  <?php $this->load->view($content, $data) ?>
</body>

</html>