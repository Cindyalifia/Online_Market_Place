<!-- // Setyo Nugroho 1301164053 -->
<!-- MAIN CONTENT -->
<main role="main" style="margin-top: 100px">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-8">
        <h3>User Management</h3>
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
              "Email"
            ],
            "data" => $data,
            "table_column" => ["email"]
          ]) ?>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view('facade/modal', [
  'id' => 'modalAdd',
  'title' => 'Tambah',
  'form_action' => base_url('C_AdminUser/add'),
  'form_input' => [
    'Email' => form_input([
      'name' => 'email',
      'class' => 'form-control',
      'required' => 'true',
      'type' => 'email'
    ]),
    'Password' => form_password([
      'name' => 'password',
      'class' => 'form-control',
      'required' => 'true'      
    ])
  ]
]) ?>

<?php 
  // Build Update Modal
  foreach ($data as $d) {
      $this->load->view('facade/modal', [
      'id' => 'modalUpdate'.$d['id'],
      'title' => 'Update',
      'form_action' => base_url('C_AdminUser/update'),
      'form_input' => [
        '_' => form_hidden('id', $d['id']),
        'Email' => form_input([
          'name' => 'email',
          'class' => 'form-control',
          'value' => $d['email'],
          'required' => 'true'                 
        ]),
        'Password' => form_password([
          'name' => 'password',
          'class' => 'form-control',
          'required' => 'true',                    
        ]),
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
              window.location.replace(`<?= base_url('C_AdminUser/delete')?>?id=${e.target.dataset.id}`);              
            }
          });
      })
      
    })
  </script>