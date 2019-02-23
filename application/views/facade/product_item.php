<div class="col-md-2 col-sm-6 my-2">
  <a href="<?= base_url("detail?id=$id")?>" class="card-link" style="height: 100%">
    <div class="card mb-4 box-shadow" style="height: 100%">
      <img class="card-img-top" src="<?= base_url($image) ?>"  alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 50%"><?= $name ?></p>
        <p class="item-price">Rp. <?= $price ?></p>
        <p style="font-weight: bold">
          <i class="fas fa-star" style="color: yellow"></i> <?= $rating ?></p>
      </div>
    </div>
  </a>
</div>