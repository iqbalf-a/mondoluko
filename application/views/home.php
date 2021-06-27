 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
     <div class="container">
         <div class="navbar-translate">
             <a class="navbar-brand" href="https://demos.creative-tim.com/paper-kit/index.html" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
                 Dusun Mondoluko
             </a>
             <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-bar bar1"></span>
                 <span class="navbar-toggler-bar bar2"></span>
                 <span class="navbar-toggler-bar bar3"></span>
             </button>
         </div>
         <div class="collapse navbar-collapse justify-content-end" id="navigation">
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" href="">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="">Profil Dusun</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link"href="<?= base_url('dashboard') ?>">Pelayanan</a>
                     <!-- <ul class="dropdown-menu dropdown-info" aria-labelledby="dropdownMenuButton">
                         <li class="dropdown-header">Pelayanan Masyarakat</li>
                         <a class="dropdown-item" href="#pk">Pembuatan KTP</a>
                         <a class="dropdown-item" href="#pk">Akte Lahir</a>
                         <a class="dropdown-item" href="#pk">Opo neh</a>
                     </ul> -->
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Kontak</a>
                 </li>
                 <?php if ($this->session->userdata('email')) { ?>
                     <li class="nav-item">
                         <p href="#" class="nav-link"> <?= 'Halo, ' . $this->session->userdata('name') ?> </p>
                     </li>
                 <?php } ?>
                 <li class="nav-item">
                     <a href=" <?php if ($this->session->userdata('email')) {
                                    echo base_url('auth/logout');
                                } else {
                                    echo base_url('auth');
                                } ?> " class="btn btn-danger btn-round">
                         <?php if ($this->session->userdata('email')) { ?>
                             Keluar
                         <?php } else { ?>
                             Masuk
                         <?php } ?>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- End Navbar -->
 <div class="page-header section-dark" style="background-image: url('<?= base_url('vendor') ?>/assets/img/antoine-barres.jpg')">
     <div class="filter"></div>
     <div class="content-center">
         <div class="container">
             <div class="title-brand">
                 <h1 class="presentation-title" style="font-size: 7em !important;">DUSUN MONDOLUKO</h1>
                 <div class="fog-low">
                     <img src="<?= base_url('vendor') ?>/assets/img/fog-low.png" alt="">
                 </div>
                 <div class="fog-low right">
                     <img src="<?= base_url('vendor') ?>/assets/img/fog-low.png" alt="">
                 </div>
             </div>
             <h2 class="presentation-subtitle text-center">Desa Taman Suruh, Kecamatan Glagah, Kabupaten Banyuwangi</h2>
         </div>
     </div>

 </div>
 <div class="main">
     <div class="section section-buttons">
         <div class="container">
             <div class="title text-center">
                 <h2 class="mb-4">Profil Dusun</h2>
                 <p class="mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati nesciunt tempora
                     corporis vero similique voluptates molestias quas repudiandae ipsum? Accusamus magnam nostrum
                     animi saepe nisi atque culpa dolorum id vitae!</p>
                 <button type="button" class="btn btn-info mt-3">Selengkapnya</button>
             </div>
         </div>
     </div>

     <div class="pt-o" id="carousel">
         <div class="container">
             <div class="title text-center">
                 <h3>Carousel</h3>
             </div>
             <div class="row">
                 <div class="col-md-8 ml-auto mr-auto">
                     <div class="card page-carousel">
                         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                             <ol class="carousel-indicators">
                                 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                             </ol>
                             <div class="carousel-inner" role="listbox">
                                 <div class="carousel-item active">
                                     <img class="d-block img-fluid" src="<?= base_url('vendor') ?>/assets/img/soroush-karimi.jpg" alt="First slide">
                                     <div class="carousel-caption d-none d-md-block">
                                         <p>Gambar 1</p>
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <img class="d-block img-fluid" src="<?= base_url('vendor') ?>/assets/img/federico-beccari.jpg" alt="Second slide">
                                     <div class="carousel-caption d-none d-md-block">
                                         <p>Gambar 2</p>
                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <img class="d-block img-fluid" src="<?= base_url('vendor') ?>/assets/img/joshua-stannard.jpg" alt="Third slide">
                                     <div class="carousel-caption d-none d-md-block">
                                         <p>Gambar 3</p>
                                     </div>
                                 </div>
                             </div>
                             <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                 <span class="fa fa-angle-left"></span>
                                 <span class="sr-only">Previous</span>
                             </a>
                             <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                 <span class="fa fa-angle-right"></span>
                                 <span class="sr-only">Next</span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>