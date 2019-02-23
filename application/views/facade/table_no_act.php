<!-- // Setyo Nugroho 1301164053 -->
<table id="tabelData" class="table display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>#</th>                  
      <?php foreach ($column as $c): ?>
        <th <?= $c == "Image" ? 'style="width: 10%"' : '' ?>><?= $c ?></th>
      <?php endforeach ?>
    </tr>
  </thead>
  <tbody>
    <?php 
      $no = 0;
      foreach ($data as $d): ?>
      <tr>
        <td><?= ++$no ?></td>
        <?php foreach ($table_column as $tc): ?>
          <td><?= $d[$tc] ?></td>
        <?php endforeach ?>
      </tr>
    <?php endforeach ?>
  </tbody>
  <tfoot>
    <tr>
      <th>#</th>                      
      <?php foreach ($column as $c): ?>
        <th><?= $c ?></th>
      <?php endforeach ?>
    </tr>
  </tfoot>
</table>