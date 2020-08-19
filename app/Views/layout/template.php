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

    <!-- Style andalan -->
    <style>
        .card-img-top {
            box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.05);
        }
    </style>



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
                        <form action="" method="get" class="search">

                            <div class="form__field">
                                <input type="search" name="search" placeholder="Type Your Mail Here.." class="form__input">
                                <input type="submit" value="   Send  " class="button">
                            </div>

                        </form>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>