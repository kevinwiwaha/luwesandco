   <?= $this->extend('layout/template'); ?>

   <?= $this->section('content'); ?>
   <div class="page-wrapper">
       <!-- Awal carousel -->
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner" style="margin-top: 50px;">
               <div class="carousel-item active">
                   <section style="background-image: url(/img/car1.png);">
                       <div class="container">
                           <div class="row car">
                               <div class="col-lg-5 ">
                                   <div class="gambar1 col-md-4 ml-auto d-none d-md-block">
                                       <img src="/img/Group 34.png" alt="Card image cap" class="float-right" />
                                   </div>
                               </div>
                               <div class="col-lg-2 "></div>
                               <div class="col-lg-5 satu ">
                                   <h5>Pre-Order <span><br> Now</span></h5>
                                   <p>LIVE UP YOUR LIFE WITH LUWES & CO.</p>
                                   <div class="col-md-4 offset-md-8">
                                       <a href="catalogue.html" class="btn btn-light tomboll ">SHOP NOW</a>
                                   </div>
                               </div>
                           </div>
                       </div>
               </div>
               </section>

               <div class="carousel-item">
                   <section style="background-image: url(/img/car2.png);">
                       <div class="container">
                           <div class="row car">
                               <div class="col-lg-5">
                                   <div class="gambar2 col-md-4 ml-auto d-none d-md-block">
                                       <img src="/img/Group 35.png" alt="Card image cap" class="float-right" />
                                   </div>
                               </div>
                               <div class="col-lg-2"></div>
                               <div class="col-lg-5 dua ">
                                   <h5>LuwesAndCo.</h5>
                                   <p>WE STAY IN TOP, SO YOU CAN BE ON TOP.</p>
                                   <div class="col-md-4 offset-md-8">
                                       <a href="catalogue.html" class="btn btn-dark tomboll ">SHOP NOW</a>
                                   </div>
                               </div>
                           </div>
                       </div>
               </div>
               </section>


               <div class="carousel-item">
                   <section style="background-image: url(/img/Group\ 61.png);">
                       <div class="container">
                           <div class="row car">
                               <div class="col-lg-5 ">
                                   <div class="gambar2 col-md-4 ml-auto d-none d-md-block">
                                       <img src="/img/Group 43.png" alt="Card image cap" class="float-right" />
                                   </div>
                               </div>
                               <div class="col-lg-2"></div>
                               <div class="col-lg-5 tiga ">
                                   <h5>Simpli-<span><br> city.</span></h5>
                                   <p>BE COMFORTABLE, BE INSPIRED, BE RIGHT AT HOME.</p>
                                   <div class="col-md- offset-md-8">
                                       <a href="catalogue.html" class="btn btn-light tomboll ">SHOP NOW</a>
                                   </div>
                               </div>
                           </div>
                       </div>
               </div>
               </section>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>
       </div>

       <!-- Akhir Carousel -->

       <!-- Awal Popular Item -->
       <div class="container mb-5">
           <p class="text-judul mt-5" style="text-align: center;">Popular Item</p>
           <div class=" mt-5 d-flex justify-content-around">
               <div class="hover15 column">
                   <div class="row ">
                       <div class="row mt-5 d-flex justify-content-center">
                           <div class="col-md-3 ">
                               <img src="/img/dragontop.png" class="img-fluid" alt="">

                               <h5 class="d-block text-center">Cher Tank</h5>
                               <h6 class=" text-center">Rp 119.000</h6>

                           </div>
                           <div class="col-md-3 ">
                               <img src="/img/loveytop.png" class="img-fluid" alt="">

                               <h5 class="d-block text-center">Cher Tank</h5>
                               <h6 class=" text-center">Rp 119.000</h6>

                           </div>
                           <div class="col-md-3 ">
                               <img src="/img/pinkytop.png" class="img-fluid" alt="">

                               <h5 class="d-block text-center">Cher Tank</h5>
                               <h6 class=" text-center">Rp 119.000</h6>

                           </div>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </div>
   </div>
   </div>
   </div>

   <!-- Akhir Popular Item -->

   <?= $this->endSection(); ?>