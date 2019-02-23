<!-- // Setyo Nugroho 1301164053 -->

<!-- MODAL ADD -->
<div class="modal fade" id="<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $id ?>Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="<?= $id ?>Label"><?= $title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="post" action="<?= $form_action ?>" enctype="multipart/form-data">
          <div class="modal-body">
              <?php foreach ($form_input as $k => $i): ?>
                <div class="form-group">
                  <?= $k[0] != '_' ? '<label> ' . $k . '</label>' : '' ?>
                  <?php 
                    echo $i;
                  ?>
                </div>
              <?php endforeach ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- MODAL ADD END -->