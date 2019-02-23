<!-- // Setyo Nugroho 1301164053 -->
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('admin') ?>">Jualin Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/user') ?>">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/produk') ?>">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/kategori') ?>">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/admin') ?>">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/slider') ?>">Slider</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/order') ?>">Order</a>
          </li>
        </ul>
        <div class="mr-0">
          <a class = "btn btn-primary" href="<?= base_url('C_LoginAdmin/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </nav>
</header>