<main role="main" style="margin-top: 100px">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-8">
        <h3>Order Ku</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <?php $this->load->view('facade/table_order.php', [
            "column" => [
              "ID Order", "Tanggal", "Status", "Total"
            ],
            "data" => $data['order'],
            "table_column" => ["id", "tanggal", "status", "total"]
          ]) ?>
      </div>
    </div>
  </div>
</main>


<?php 
  // Build Update Modal
  foreach ($data["order"] as $d):
    $id = 'modalUpdate'.$d['id'];
    $title = "View";
?>
  <div class="modal fade" id="<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $id ?>Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="<?= $id ?>Label"><?= $title ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body">
                <table class="table">
                  <tr>
                    <th>Nama Barang</th>
                    <th>Harga</th>              
                    <th>Jumlah</th>
                    <th>Ukuran</th>  
                    <th>Total Harga</th>            
                  </tr>
                  <?php foreach ($d["detail"] as $dt): ?>
                    <tr>
                      <td> <?= $dt['name'] ?></td>
                      <td> <?= $dt['price'] ?></td>
                      <td> <?= $dt['jumlah'] ?></td>
                      <td> <?= $dt['ukuran'] ?></td>
                      <td> <?= $dt['price'] * $dt['jumlah'] ?></td>
                    </tr>
                  <?php endforeach ?>
                </table>
            </div>
            <div class="modal-footer">
            </div>
      </div>
    </div>
  </div>
<?php
  endforeach
?>


 <script type="text/javascript">
  $(document).ready(function () {
    // Setup datatable
    $('#tabelData').DataTable();
  })
</script>