<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <section style="margin-bottom: 100px;">
        <div class="container produk">
            <div class="row mt-md-5 mt-0">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="/img/IMG_1805@2x.png" class="img-product img-fluid" alt="" />
                </div>
                <div class="col-md-5 item">
                    <h1>Daisy Dress</h1>
                    <h3>Rp 350.000</h3>
                    <form class="size" action="index.php" method="post">
                        <div class="row">
                            <div class="col">
                                <p class="text-size mt-5 mt-md-3">Size</p>

                                <div class="form-size">
                                    <input type="radio" name="size" value="small" id="small" checked />
                                    <label class="py-1" for="small">S</label>
                                    <input type="radio" name="size" value="medium" id="medium" />
                                    <label class="py-1" for="medium">M</label>
                                    <input type="radio" name="size" value="large" id="large" />
                                    <label class="py-1" for="large">L</label>
                                    <input type="radio" name="size" value="extra large" id="extra-large" />
                                    <label class="py-1" for="extra-large">XL</label>
                                    <br>
                                    <small>
                                        <a href="sizeguide.html" class="size-chart">Size Chart<i class="ml-2 fas fa-ruler-combined"></i></a>
                                    </small>
                                    <div class="mt-3 mt-md-0 d-block d-md-none"><button type="submit" class=" btn btn-md btn-primary btn-order" style="color: #F2E1CF;">Order</button>
                                        <a class="btn btn-md btn-outline-primary btn-cons mt-1" href="https://api.whatsapp.com/send?phone=6281333550157&text=Aku%20konsul%20dong%20">Consultation</a>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="d-md-flex d-none justify-content-md-start justify-content-center">
                            <div class="bungkus-btn">
                                <button type="submit" class=" btn btn-md btn-primary btn-order" style="color: #F2E1CF;">Order</button>
                                <br>
                                <a class="btn btn-md btn-outline-primary btn-cons mt-1" href="https://api.whatsapp.com/send?phone=6281333550157&text=Aku%20konsul%20dong%20">Consultation</a>
                            </div>
                        </div>
                        <h5 class="mt-5" style="border-bottom: 2px solid #9b6053;">Description</h5>
                        <p>Daisy Dress Wrap yourself in this flirty and feminine wrap dress.. The most perfect little dress for
                            brunch dates and parties!</p>
                    </form>
                </div>


            </div>
            <div class="col-md-1"></div>
        </div>
        </div>
    </section>
    <section style="height: 100vh;">
        <h1 class="text-judul mt-5" style="text-align: center;">You may also like</h1>
        <div class="container">
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
    </section>
</main>

<?= $this->endSection(); ?>