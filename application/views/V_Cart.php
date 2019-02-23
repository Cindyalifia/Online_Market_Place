<!-- Naufal Afif 1301164102 -->
<main role="main" style="margin-top: 100px">
  <div class="container">
    <!-- PAGE TITLE -->
    <div class="row my-5">
      <!-- TITLE -->
      <div class="col-md-8">
        <h3>Keranjang Anda</h3>
      </div>
      <!-- TITLE -->
      <!-- PAYMENT -->
      <div class="col-md-4">
        <a class="btn btn-success float-right" href="<?= base_url("C_Order/placeOrder") ?>">
          <i class="fas fa-credit-card"></i> Lanjutkan Pembayaran</a>
      </div>
      <!-- END PAYMENT -->
    </div>
    <!-- END PAGE TITLE -->

    <!-- CART TABLE -->
    <div class="row">
      <div class="col">
        <table id="cartData" class="table display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Nama Barang</th>
              <th>Harga</th>              
              <th>Jumlah</th>
              <th>Ukuran</th>  
              <th>Total Harga</th>            
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cart as $c): ?>
              <tr>
                <td> <?= $c['name'] ?></td>
                <td> <?= $c['price'] ?></td>
                <td> <?= $c['jumlah'] ?></td>
                <td> <?= $c['ukuran'] ?></td>
                <td> <?= $c['price'] * $c['jumlah'] ?></td>
                <td><a href="<?= base_url('C_Cart/delete?id='.$c['id']) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Ukuran</th>    
              <th>Total Harga</th>            
              <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <!-- END CART TABLE -->

    <!-- TOTAL PRICE -->
    <div class="row my-4">
      <div class="col">
        <h3 class="ml-3">Total: Rp. <?= $sum ?></h3>
      </div>
    </div>
    <!-- END TOTAL PRICE -->
  </div>
</main>

 <script type="text/javascript">
    $(document).ready(function () {
      // Setup datatable
      $('#cartData').DataTable();
    })
  </script>