<!-- Rafli Alwan Nugraha 1301164028 -->
<!-- MAIN CONTENT -->
<main role="main" style="margin-top: 100px">
  <div class="container">
    <!-- PRODUCT NAME -->
    <div class="row">
      <div class="col">
        <h1 class="display-5"><?= $produk['name'] ?></h1>
      </div>
    </div>
    <!-- END PRODUCT NAME -->

    <!-- PRODUCT OVERVIEW -->
    <div class="row">
      <!-- PRODUCT IMAGE -->
      <div class="col-md-8">
        <!-- SMALL IMAGE TAB -->
        <ul class="nav nav-tabs image-tab" id="detailTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-controls="img1" aria-selected="true">
              <img src="<?= base_url($produk['image']) ?>" class="img-fluid" alt="">
            </a>
          </li>
        </ul>
        <!-- END SMALL IMAGE TAB -->
        <!-- BIG IMAGE CONTENT -->
        <div class="tab-content" id="detailTabContent">
          <div class="tab-pane fade show active" id="img1" role="tabpanel" aria-labelledby="img1-tab">
            <img src="<?= base_url($produk['image']) ?>" class="img-fluid detail-img" alt="">
          </div>
        </div>
        <!-- BIG IMAGE CONTENT -->
      </div>
      <!-- END PRODUCT IMAGE -->

      <!-- PRODUCT PRICE AND BUY OPTION -->
      <div class="com-md-4">
        <h2>Rp. <?= $produk['price'] ?></h2>
        <p style="font-weight: bold">
          <i class="fas fa-star" style="color: yellow"></i> <?= $produk['rating'] ?>
        </p>
        <form action="<?= base_url('C_Cart/add') ?>" method="POST">
          <input type="hidden" name="produk_id" value="<?= $produk['id'] ?>">
          <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="1" required>
          </div>
          <div class="form-group">
            <select class="form-control" name="ukuran" required>
              <option value="" selected>Ukuran</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="XL">XL</option>
            </select>
          </div>
          <?php if($this->session->has_userdata('logged_in')): ?>
            <button type="submit" class="btn btn-primary" href="">
              <i class="fas fa-shopping-cart"></i> Tambahkan ke Keranjang
            </button>
          <?php else: ?>
            <button class="btn btn-danger">
              <i class="fas fa-shopping-cart"></i> Login dahulu
            </button>         
          <?php endif ?>
        </form>
      </div>
      <!-- END PRODUCT PRICE AND BUY OPTION -->

    </div>
    <!-- END PRODUCT OVERVIEW -->

    <!-- PRODUCT DETAIL -->
    <div class="row my-2">
      <div class="col">
        <!-- TAB -->
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
              aria-selected="true">Detail Barang</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
              aria-selected="false">Ulasan</a>
          </div>
        </nav>
        <!-- END TAB -->
        <!-- TAB CONTENT -->
        <div class="tab-content" id="nav-tabContent">
          <!-- PRODUCT DETAIL -->
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <?= $produk['description'] ?>
          </div>
          <!-- END PRODUCT DETAIL -->
          <!-- REVIEW -->
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="card my-2">
              <div class="card-body">
                <h5 class="card-title">Yoyo</h5>
                <p class="card-text">Barangnya bagus!</p>
              </div>
            </div>
            <div class="card my-2">
              <div class="card-body">
                <h5 class="card-title">Haha</h5>
                <p class="card-text">Barangnya Keren!</p>
              </div>
            </div>
            <div class="card my-2">
              <div class="card-body">
                <h5 class="card-title">Yoyo</h5>
                <p class="card-text">Barangnya bagus!</p>
              </div>
            </div>
            <div class="card my-2">
              <div class="card-body">
                <h5 class="card-title">Yoyo</h5>
                <p class="card-text">Barangnya bagus!</p>
              </div>
            </div>
          </div>
          <!-- END REVIEW -->
        </div>
        <!-- END TAB CONTENT -->
      </div>
    </div>
    <!-- END PRODUCT DETAIL -->
  </div>
</main>
<!-- END MAIN -->

<script type="text/javascript">
    $(document).ready(function () {
      // Image zoom
      $('.detail-img')
        .wrap('<span style="display:inline-block; width: 100%"></span>')
        .css('display', 'block')
        .parent()
        .zoom({
          magnify: 2
        });
    })
  </script>