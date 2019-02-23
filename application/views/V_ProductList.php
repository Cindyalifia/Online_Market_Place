<main role="main">
    <div class="my-5 py-5 bg-light">
      <div class="container">
        <div class="row">
        <h2><?= $heading ?></h2>
        </div>
        <div class="row">
          <?php
            foreach ($produk as $p) {
              $this->load->view('facade/product_item.php', $p);
            } 
          ?>
        </div>
      </div>
    </div>
</main>