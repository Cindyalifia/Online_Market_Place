<?php
// Setyo Nugroho 1301164053
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

  <!-- LOAD JS IN HEAD! WHAT THE FUCK!, THIS BECAUSE CODEIGNITER TEMPLATING IS SUCK AND PHP IS SUCK. I HATE MYSELF DOING THIS -->
  <script src="<?php echo base_url('static/js/fontawesome-all.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/bootstrap.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/lib/slick/slick.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/js/rivets.bundled.min.js') ?>"></script>
  <script src="<?php echo base_url('static/js/jquery.zoom.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('static/lib/dataTables/datatables.js') ?>"></script>

</head>
  <?php $this->load->view('V_Usernav') ?>;
  <?php $this->load->view($content, $data) ?>

  <!-- FOOTER -->
  <footer class="container py-5">
    <div class="row">
      <!-- FIRST COLUMN -->
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2018. Jualin</small>
      </div>
      <!-- END FIRST COLUMN -->
      <!-- SECOND COLUMN -->
      <div class="col-6 col-md">
        <h5>Tentang kami</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Kegiatan</a>
          </li>
          <li>
            <a class="text-muted" href="#">Karir</a>
          </li>
          <li>
            <a class="text-muted" href="#">Riwayat</a>
          </li>
          <li>
            <a class="text-muted" href="#">Official Store</a>
          </li>
          <li>
            <a class="text-muted" href="#">Profil kami</a>
          </li>
          <li>
            <a class="text-muted" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
      <!-- END SECOND COLUMN -->
      <!-- THIRD COLUMN -->
      <div class="col-6 col-md">
        <h5>Tata Cara</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Cara pembayaran</a>
          </li>
          <li>
            <a class="text-muted" href="#">Cara Pemesanan</a>
          </li>
          <li>
            <a class="text-muted" href="#">Setting Profil</a>
          </li>
        </ul>
      </div>
      <!-- END THIRD COLUMN -->
      <!-- FOURTH COLUMN -->
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Atasan Pria</a>
          </li>
          <li>
            <a class="text-muted" href="#">Kemeja Pria</a>
          </li>
          <li>
            <a class="text-muted" href="#">Atasan Wanita</a>
          </li>
          <li>
            <a class="text-muted" href="#">Kemeja Wanita</a>
          </li>
        </ul>
      </div>
      <!-- END FOURTH COLUMN -->
      <!-- FIFTH COLUMN -->
      <div class="col-6 col-md">
        <h5>Bantuan</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Syarat dan Ketentuan</a>
          </li>
          <li>
            <a class="text-muted" href="#">Panduan Keamanan</a>
          </li>
          <li>
            <a class="text-muted" href="#">Kebijakan Privasi</a>
          </li>
          <li>
            <a class="text-muted" href="#">Pusat Resolusi</a>
          </li>
        </ul>
      </div>
      <!-- END FIFTH COLUMN -->
    </div>
  </footer>
  <!-- END FOOTER -->
</body>

</html>