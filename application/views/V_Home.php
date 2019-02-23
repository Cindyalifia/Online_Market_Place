<!-- // Setyo Nugroho 1301164053 -->
  
<main role="main">
  <div class="my-5 py-5 bg-light">
    <div class="container">
      <!-- SLIDER -->
      <div class="row">
        <div class="col">
          <div class="slider">
            <?php foreach ($slider as $sld): ?>
              <div>
                <a href="<?= $sld['link'] ?>">
                  <img src="<?= base_url($sld['image']) ?>" alt="" srcset="">
                </a>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <!-- END SLIDER -->

      <!-- CONTENT -->
      <div class="row my-3" rv-each-cat="category" id="category-list">

        <!-- CATEGORY TITLE -->
        <div class="row">
          <div class="col">
            <h2 class="display-4">{cat.name}</h2>
          </div>
        </div>
        <!-- END CATEGORY TITLE -->

        <!-- PRODUCT LIST -->
        <div class="row">
          <div class="col-md-2 col-sm-6 my-2" rv-each-item="cat.data">
            <a rv-detail-href="item.id" class="card-link" style="height: 100%">
              <div class="card mb-4 box-shadow" style="height: 100%">
                <img class="card-img-top" rv-src="item.image" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text" style="height: 50%">{item.name}</p>
                  <p class="item-price">Rp. {item.price}</p>
                  <p style="font-weight: bold">
                    <i class="fas fa-star" style="color: yellow"></i> {item.rating}</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- END PRODUCT LIST -->

      </div>
      <!-- END CONTENT -->
    </div>
  </div>
</main>

<script type="text/javascript">
  $(document).ready(function () {

    // INITIALIZE SLIDER
    $('.slider').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });

    // Create custom binding
    rivets.binders['detail-href'] = (el, val) => {
      el.href = `<?= base_url('detail') . "?id=" ?>${val}`
    }

    // Category data
    const data = {
      category: []
    }

    // Bind category-list to data
    rivets.bind($('#category-list'), data)

    // Get produk from json
    $.getJSON('./index.php/C_Home/get_product', (response) => {
      // Map response to data
      data.category = response.map((it) => ({
        name: it.kategori,
        data: it.data
      }))
    })


  })
</script>