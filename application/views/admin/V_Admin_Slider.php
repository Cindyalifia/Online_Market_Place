<!-- // Setyo Nugroho 1301164053 -->
<!-- MAIN CONTENT -->
<main role="main" style="margin-top: 100px">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-8">
        <h3>Slider Management</h3>
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
              "Image", "Link"
            ],
            "data" => $data,
            "table_column" => ["image", "link"]
          ]) ?>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view('facade/modal', [
  'id' => 'modalAdd',
  'title' => 'Tambah',
  'form_action' => base_url('C_AdminSlider/add'),
  'form_input' => [
    'Link' => form_input([
      'name' => 'link',
      'class' => 'form-control',
      'required' => 'true',
    ]),
    'Image' => form_upload([
      'name' => 'image',
      'required' => 'true',
      'class' => 'form-control'
    ])
  ]
]) ?>

<?php 
  // Build Update Modal
  foreach ($data as $d) {
      $this->load->view('facade/modal', [
      'id' => 'modalUpdate'.$d['id'],
      'title' => 'Update',
      'form_action' => base_url('C_AdminSlider/update'),
      'form_input' => [
        '_' => form_hidden('id', $d['id']),
        'Link' => form_input([
          'name' => 'link',
          'class' => 'form-control',
          'value' => $d['link'],
          'required' => 'true'                 
        ]),
        '__' => form_hidden('image', $d['image']),
        'Image' => form_upload([
          'name' => 'new_image',                    
          'class' => 'form-control'
        ]),
      ]
    ]);
  }
?>

<script type="text/javascript">
    $(document).ready(() => {

     $('#tabelData').DataTable({
        columnDefs: [{
          targets: 1,
          render: (data, type, row) => `<img src="<?= base_url() ?>${data}" class="img-fluid"/>`
        }]
      });

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
              window.location.replace(`<?= base_url('C_AdminSlider/delete')?>?id=${e.target.dataset.id}`);              
            }
          });
      })
      
    })
  </script>