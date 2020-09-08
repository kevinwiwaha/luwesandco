<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">

    <!--CSS MAS BRO-->
    <link rel="stylesheet" href="/css/landingPage.css" />
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/produk.css">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .card-img-top {
            box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.05);
        }

        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    <!-- Style andalan -->




    <title>LuwesAndCo</title>
</head>

<body style="overflow-x: hidden;">
    <!--Awal Navbar-->
    <div id="menu-btn" class="d-block d-md-none" onclick="coba()">
        <div class="menu-btn__burger"></div>
    </div>
    <div id="sidebar">

        <div class="nav-link w-100 d-block" style="margin-top:100px">
            <a class="nav-item nav-link active" href="">Home<span class="sr-only">(current)</span></a>
            <br>
            <a class="nav-item nav-link active" href="catalogue.html">product<span class="sr-only">(current)</span></a>
        </div>
    </div>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-luwes  fixed-top">
        <a class="navbar-brand d-lg-none d-block" href="#">
            <img src="/img/brand.svg" width="120" class="d-inline-block align-top mx-5" alt="" loading="lazy" />
        </a>


        <div class="collapse d-none navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100 justify-content-center">
                <a class="nav-item nav-link active d-md-flex align-self-md-center" href="">home <span class="sr-only">(current)</span></a>
                <a class="navbar-brand d-md-block d-none" href="#">
                    <img src="/img/brand.svg" width="120" class="d-inline-block align-top mx-5" alt="" loading="lazy" />
                </a>
                <a class="nav-item nav-link active d-md-flex align-self-md-center" href="catalogue.html">product <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>
    <!--Akhir Navbar-->

    <?= $this->renderSection('content'); ?>

    <!-- Awal Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-xs-6 col-md-3">
                    <h5>Our Store</h5>
                    <br>
                    <ul class="footer-links">
                        <li><a href="landingPage.html">Home</a></li>
                        <li><a href="produk.html">Products</a></li>
                        <li><a href="produk.html">Pre-Order</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h5>Help & Support</h5>
                    <br>
                    <ul class="footer-links">
                        <li><a href="https://www.instagram.com/luwesandco/">Contact</a></li>
                        <li><a href="sizeguide.html">FAQ</a></li>
                        <li><a href="sizeguide.html">Size Guide</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-6">
                    <h5>Join Our Mailing List</h5>
                    <p class="text-justify">
                        <div id="mc_embed_signup">
                            <form action="https://gmail.us17.list-manage.com/subscribe/post?u=a98f2c604376557425024927c&amp;id=4d9aaee470" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">

                                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                    <div class="mc-field-group">
                                        <label style="text-align:left;border: none;width:150px" for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                                        </label>
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                    </div>
                                    <div class="mc-field-group">
                                        <label style="text-align:left;border: none;width:150px" for="mce-FNAME">First Name </label>
                                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                    </div>

                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a98f2c604376557425024927c_4d9aaee470" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                    </p>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4 col-sm-6 col-xs-12">
                    <p class="copyright-text ">LuwesAndCo &copy; 2020 All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Akhir Footer -->
    <script>
        function coba() {
            document.getElementById("sidebar").classList.toggle("active");

            document.getElementById("menu-btn").classList.toggle("open");
        }
    </script>



    <!-- Optional JavaScript -->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>
        (function($) {
            window.fnames = new Array();
            window.ftypes = new Array();
            fnames[0] = 'EMAIL';
            ftypes[0] = 'email';
            fnames[1] = 'FNAME';
            ftypes[1] = 'text';
            fnames[2] = 'LNAME';
            ftypes[2] = 'text';
            fnames[3] = 'ADDRESS';
            ftypes[3] = 'address';
            fnames[4] = 'PHONE';
            ftypes[4] = 'phone';
            fnames[5] = 'BIRTHDAY';
            ftypes[5] = 'birthday';
        }(jQuery));
        var $mcj = jQuery.noConflict(true);
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>