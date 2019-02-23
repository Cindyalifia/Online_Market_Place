<!-- // Setyo Nugroho 1301164053 -->
<!-- MAIN CONTENT -->
<main role="main" style="margin-top: 100px">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-8">
        <h3>Kategori Management</h3>
      </div>
      <div class="col-md-4">
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalAdd">
          <i class="fas fa-plus"></i> Tambah</button>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <?php $this->load->view('facade/table.php', [
            "column" => [
              "Nama"
            ],
            "data" => $data,
            "table_column" => ["name"]
          ]) ?>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view('facade/modal', [
  'id' => 'modalAdd',
  'title' => 'Tambah',
  'form_action' => base_url('C_AdminKategori/add'),
  'form_input' => [
    'Nama' => form_input([
      'name' => 'name',
      'class' => 'form-control',
    ])
  ]
]) ?>

<?php 
  // Build Update Modal
  foreach ($data as $d) {
      $this->load->view('facade/modal', [
      'id' => 'modalUpdate'.$d['id'],
      'title' => 'Update',
      'form_action' => base_url('C_AdminKategori/update'),
      'form_input' => [
        '_' => form_hidden('id', $d['id']),
        'Nama' => form_input([
          'name' => 'name',
          'class' => 'form-control' ,
          'value' => $d['name']             
        ])
      ]
    ]);
  }
?>

<script type="text/javascript">
    $(document).ready(() => {

      $('#tabelData').DataTable();

      // Setup delete action click
      $('#tabelData tbody').on('click', '.delete-item', (e) => {
        swal({
            title: "Apakah Anda yakin menghapus data ini?",
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            console.log(e);
            if (willDelete) {
              window.location.replace(`<?= base_url('C_AdminKategori/delete')?>?id=${e.target.dataset.id}`);              
            }
          });
      })
      
    })
  </script>