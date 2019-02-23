<!-- // Setyo Nugroho 1301164053 -->

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container">
        
        <a class="navbar-brand" href="<?= base_url() ?>" id="pad-left"><img class="img-thumbnail" id="imageLogo"  src="<?= base_url("images/wow.jpg") ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="navbar-collapsese" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php 
                  foreach ($this->db->get('kategori')->result() as $k):
                ?>
                  <a class="dropdown-item" href="<?= base_url("kategori?id=") . $k->id; ?>"><?= $k->name ?></a>
                <?php endforeach ?>
              </div>
            </li>
          </ul>
          <form class="form-inline mr-auto ml-1" action="<?= base_url("search") ?>">
            <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
          <div class="mr-0 my-2">
            <?php if($this->session->has_userdata('logged_in')): ?>
              <a href="<?= base_url('cart') ?>" class="btn btn-success">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge badge-light mx-2">
                <?php
                  $this->db->where('user_id', $this->session->userdata('logged_in')['id']);
                  $result = $this->db->get('cart'); 
                  echo sizeof($result->result_array()); 
                ?>
                </span>
              </a>
              <a class="btn btn-danger" href="<?= base_url("order") ?>">OrderKu</a>              
              <a href="<?= base_url('C_Login/logout') ?>" class="btn btn-primary">Logout</a>              
            <?php else: ?>
              <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
              <a href="<?= base_url('register') ?>" class="btn btn-outline-light">Register</a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </nav>
  </header>