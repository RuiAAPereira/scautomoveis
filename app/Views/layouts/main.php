<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SC Automóveis</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Owlcarousel 2 -->
    <link rel="stylesheet" href="owlcarousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel2/assets/owl.theme.default.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .owl-item>div {
            cursor: pointer;
            margin: 6% 8%;
            transition: margin 0.4s ease;
        }

        .owl-item.center>div {
            cursor: auto;
            margin: 0;
        }

        .owl-item:not(.center)>div:hover {
            opacity: .75;
        }

        .owl-carousel .owl-item img {
            display: block;
            max-height: 100%;
            max-width: 100%;
        }

        /* ================== Badge Overlay CSS ========================*/
        .badge-overlay {
            position: absolute;
            left: 0%;
            top: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            z-index: 100;
            -webkit-transition: width 1s ease, height 1s ease;
            -moz-transition: width 1s ease, height 1s ease;
            -o-transition: width 1s ease, height 1s ease;
            transition: width 0.4s ease, height 0.4s ease
        }

        /* ================== Badge CSS ========================*/
        .badge {
            margin: 0;
            padding: 0;
            color: white;
            padding: 10px 10px;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            line-height: normal;
            text-transform: uppercase;
            background: #ed1b24;
        }

        .badge::before,
        .badge::after {
            content: '';
            position: absolute;
            top: 0;
            margin: 0 -1px;
            width: 100%;
            height: 100%;
            background: inherit;
            min-width: 55px
        }

        .badge::before {
            right: 100%
        }

        .badge::after {
            left: 100%
        }

        /* ================== Badge Position CSS ========================*/
        .top-left {
            position: absolute;
            top: 0;
            left: 0;
            -ms-transform: translateX(-30%) translateY(0%) rotate(-45deg);
            -webkit-transform: translateX(-30%) translateY(0%) rotate(-45deg);
            transform: translateX(-30%) translateY(0%) rotate(-45deg);
            -ms-transform-origin: top right;
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .top-right {
            position: absolute;
            top: 0;
            right: 0;
            -ms-transform: translateX(30%) translateY(0%) rotate(45deg);
            -webkit-transform: translateX(30%) translateY(0%) rotate(45deg);
            transform: translateX(30%) translateY(0%) rotate(45deg);
            -ms-transform-origin: top left;
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .bottom-left {
            position: absolute;
            bottom: 0;
            left: 0;
            -ms-transform: translateX(-30%) translateY(0%) rotate(45deg);
            -webkit-transform: translateX(-30%) translateY(0%) rotate(45deg);
            transform: translateX(-30%) translateY(0%) rotate(45deg);
            -ms-transform-origin: bottom right;
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .bottom-right {
            position: absolute;
            bottom: 0;
            right: 0;
            -ms-transform: translateX(30%) translateY(0%) rotate(-45deg);
            -webkit-transform: translateX(30%) translateY(0%) rotate(-45deg);
            transform: translateX(30%) translateY(0%) rotate(-45deg);
            -ms-transform-origin: bottom left;
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .top-full {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .middle-full {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -ms-transform: translateX(0%) translateY(-50%) rotate(0deg);
            -webkit-transform: translateX(0%) translateY(-50%) rotate(0deg);
            transform: translateX(0%) translateY(-50%) rotate(0deg);
        }

        .bottom-full {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
        }

        /* ================== Badge color CSS ========================*/
        .badge.red {
            background: #ed1b24;
        }

        .badge.orange {
            background: #fa7901;
        }

        .badge.pink {
            background: #ee2b8b;
        }

        .badge.blue {
            background: #00adee;
        }

        .badge.green {
            background: #b4bd00;
        }

        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }

        .stack-bottom {
            width: 100px;
            position: relative;
            z-index: -10;
        }
        
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.png" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">Início</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#novidades">Novidades</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#automoveis">Automóveis</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#empresa">Empresa</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a></li>
                    <?php if (session()->get('isLoggedIn')) : ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/admin">Admin</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <!-- <div class="masthead-subheading rounded"><img src="assets/img/logo-stand.jpg" alt="" width="250" /></div> -->
            <div class="masthead-heading text-uppercase">O seu carro a sua medida</div>
            <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#automoveis">Automóveis</a> -->
        </div>
    </header>

    <!-- Render Content here-->
    <?= $this->renderSection('content') ?>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © Rui Pereira 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Termos de Privacidade</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Owlcarousel 2 -->
    <script src="owlcarousel2/owl.carousel.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
        var $owl = $('.owl-carousel');

        $owl.children().each(function(index) {
            $(this).attr('data-position', index); // NB: .attr() instead of .data()
        });

        $owl.owlCarousel({
            center: true,
            loop: true,
            items: 3,
            autoHeight: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
        });
    </script>
</body>

</html>