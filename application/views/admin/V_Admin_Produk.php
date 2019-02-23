<!-- // Setyo Nugroho 1301164053 -->
<!-- MAIN CONTENT -->
<main role="main" style="margin-top: 100px">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-8">
        <h3>Produk Management</h3>
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
              "Nama", "Harga", "Rating", "Image", "Kategori"
            ],
            "data" => $data['produk'],
            "table_column" => ["name", "price", "rating", "image", "nama_kategori"]
          ]) ?>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view('facade/modal', [
  'id' => 'modalAdd',
  'title' => 'Tambah',
  'form_action' => base_url('C_AdminProduk/add'),
  'form_input' => [
    'Nama' => form_input([
      'name' => 'name',
      'required' => 'true',
      'class' => 'form-control'
    ]),
    'Deskripsi' => form_textarea([
      'name' => 'description',                    
      'class' => 'form-control summernote',
      'required' => 'True'       
    ]),
    'Harga' => form_input([
      'name' => 'price',
      'required' => 'true',
      'class' => 'form-control'
    ]),
    'Rating' => form_input([
      'name' => 'rating',
      'required' => 'true',
      'class' => 'form-control'
    ]),
    'Kategori' => form_dropdown('kategori_id', array_reduce($data['kategori'], function($acc, $d) {
      $acc[$d['id']] = $d['name'];
      return $acc;
    }, [])),
    'Image' => form_upload([
      'name' => 'image',
      'required' => 'true',
      'class' => 'form-control'
    ]),
  ]
]) ?>

<?php 
  // Build Update Modal
  foreach ($data['produk'] as $d) {
      $this->load->view('facade/modal', [
      'id' => 'modalUpdate'.$d['id'],
      'title' => 'Update',
      'form_action' => base_url('C_AdminProduk/update'),
      'form_input' => [
        '_' => form_hidden('id', $d['id']),        
        'Nama' => form_input([
          'name' => 'name',          
          'class' => 'form-control',
          'value' => $d['name']
        ]),
        'Deskripsi' => form_textarea([
          'name' => 'description',                    
          'class' => 'form-control summernote',
          'value' => $d['description']          
        ]),
        'Harga' => form_input([
          'name' => 'price',                    
          'class' => 'form-control',
          'value' => $d['price']          
        ]),
        'Rating' => form_input([
          'name' => 'rating',                    
          'class' => 'form-control',
          'value' => $d['rating']          
        ]),
        'Kategori' =>form_dropdown('kategori_id', array_reduce($data['kategori'], function($acc, $d) {
          $acc[$d['id']] = $d['name'];
          return $acc;
        }, []), $d['kategori_id']),
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
          targets: 4,
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
            if (willDelete) {
              window.location.replace(`<?= base_url('C_AdminProduk/delete')?>?id=${e.target.dataset.id}`);
            }
          });
      })      
    })
  </script>