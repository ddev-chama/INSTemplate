<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furniture House - Furniture Shopping Template</title>

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url() ?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url() ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/vendors/owl.carousel/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/vendors/lightbox/css/lightbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/vendors/flexslider/flexslider.css" media="screen" />

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!--Mechanic Styles-->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/responsive.css">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <header class="row" id="header">

        <div class="row m0 logo_line">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 logo" style="padding-top: 25px">
                        <a href="#" class="logo_a"><img src="<?php echo base_url() ?>public/images/logo.png" alt="Furniture House"></a>
                    </div>
                    <div class="col-sm-7 searchSec" style="padding-top: 25px">
                        <div class="fleft searchForm">
                            <form action="#" method="get">
                                <div class="input-group">
                                    <input type="hidden" name="search_param" value="all" id="search_param">
                                    <input type="search" class="form-control" placeholder="Search Products">
                                    <div class="input-group-btn searchFilters">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span id="searchFilterValue">All Categories</span> <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#all">All Categories</a></li>
                                            <li><a href="#chairs">chairs</a></li>
                                            <li><a href="#tables">tables</a></li>
                                            <li><a href="#dressers">dressers</a></li>
                                            <li><a href="#desk">desk</a></li>
                                            <li><a href="#beds">beds</a></li>
                                            <li><a href="#benches">benches</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <span class="input-group-btn searchIco">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </form>
                        </div>
                        <div class="fleft wishlistCompare">
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-heart"></i> Wishlist (3)</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i> Compare (2)</a></li>
                            </ul>
                        </div>
                        <div class="fleft cartCount">
                            <div class="cartCountInner row m0">
                                <span class="badge">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default m0 navbar-static-top">
            <div class="container-fluid container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                        <i class="fa fa-bars"></i> Navigation
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="nav navbar-nav">
                        <li class="active dropdown">
                            <a href="index.html"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.html">Home Default</a></li>
                                <li><a href="index3.html">Home 2</a></li>
                                <li><a href="index2.html">Home - Menu 2</a></li>
                                <li><a href="index3.html">Home 2 - Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single-post.html">Single Post</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown megaMenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mega Menu</a>
                            <ul class="dropdown-menu row m0" role="menu">
                                <li class="listMenu">
                                    <div class="row listTitle">sofas &amp; sectionals</div>
                                    <ul class="nav megaInnerMenu">
                                        <li><a href="#chairs">chairs</a></li>
                                        <li><a href="#tables">tables</a></li>
                                        <li><a href="#dressers">dressers</a></li>
                                        <li><a href="#desk">desk</a></li>
                                        <li><a href="#beds">beds</a></li>
                                        <li><a href="#benches">benches</a></li>
                                        <li><a href="#moroccan">moroccan</a></li>
                                        <li><a href="#poufs">poufs</a></li>
                                        <li><a href="#screen">screen</a></li>
                                    </ul>
                                </li>
                                <li class="listMenu">
                                    <div class="row listTitle">shop by collections</div>
                                    <ul class="nav megaInnerMenu">
                                        <li><a href="#bond">bond</a></li>
                                        <li><a href="#whitaker">whitaker</a></li>
                                        <li><a href="#arden">arden</a></li>
                                        <li><a href="#channing">channing</a></li>
                                        <li><a href="#delphine">delphine</a></li>
                                        <li><a href="#jacque">jacque</a></li>
                                        <li><a href="#lampert">lampert</a></li>
                                    </ul>
                                </li>
                                <li class="boxMenu">
                                    <div class="row listTitle">
                                        shop by categories <a href="product.html">shop all <i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <ul class="nav megaInnerMenu row m0">
                                        <li><a href="product2.html">
                                            <div class="row m0 imgHov">
                                                <img src="<?php echo base_url() ?>public/images/menu/1.png" alt="">
                                                <div class="row m0 hovCnt">
                                                    <div class="row m0 hovCntInner">
                                                        shop now <i class="fa fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m0 menuTitle">Office furniture</div>
                                        </a></li>
                                        <li><a href="product.html">
                                            <div class="row m0 imgHov">
                                                <img src="<?php echo base_url() ?>public/images/menu/2.png" alt="">
                                                <div class="row m0 hovCnt">
                                                    <div class="row m0 hovCntInner">
                                                        shop now <i class="fa fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m0 menuTitle">sofas &amp; bed</div>
                                        </a></li>
                                        <li><a href="product2.html">
                                            <div class="row m0 imgHov">
                                                <img src="<?php echo base_url() ?>public/images/menu/3.png" alt="">
                                                <div class="row m0 hovCnt">
                                                    <div class="row m0 hovCntInner">
                                                        shop now <i class="fa fa-caret-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m0 menuTitle">dinning tables</div>
                                        </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Product</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="product.html">Products</a></li>
                                <li><a href="product2.html">Products 2</a></li>
                                <li><a href="single-product.html">Single Product</a></li>
                                <li><a href="catalog.html">Catalog</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Living Rooms</a></li>
                        <li><a href="#">solidwood</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </header> <!--Header-->

    <section id="slider" class="row">
        <div class="row sliderCont flexslider m0">
            <ul class="slides nav">
                <li>
                    <img src="<?php echo base_url() ?>public/images/slider/1.png" alt="">
                    <div class="text_lines row m0">
                        <div class="container p0">
                            <h1>Good Network</h1>
                            <h3>by International Network System Co., Ltd.</h3>
                        </div>
                    </div> <!--Text Lines-->
                </li>
                <li>
                    <img src="<?php echo base_url() ?>public/images/slider/2.png" alt="">
                    <div class="text_lines row m0">
                        <div class="container p0">
                          <h1>Good Network</h1>
                          <h3>by International Network System Co., Ltd.</h3>
                      </div>
                    </div> <!--Text Lines-->
                </li>
                <li>
                    <img src="<?php echo base_url() ?>public/images/slider/3.png" alt="">
                    <div class="text_lines row m0">
                        <div class="container p0">
                          <h1>Good Network</h1>
                          <h3>by International Network System Co., Ltd.</h3>
                      </div>
                    </div> <!--Text Lines-->
                </li>
            </ul>
        </div>
    </section> <!--Slider-->
    <?php echo $content ?>
    <footer class="row">
        <div class="row m0 topFooter">
            <div class="container line1">
                <div class="row footFeatures">
                    <div class="col-sm-4 footFeature">
                        <div class="media">
                            <div class="media-left icon"><img src="<?php echo base_url() ?>public/images/icons/car3.png" alt=""></div>
                            <div class="media-body texts">
                                <h4>free shipping</h4>
                                <h2>International</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 footFeature">
                        <div class="media m0">
                            <div class="media-left icon"><img src="<?php echo base_url() ?>public/images/icons/tel24-7_2.png" alt=""></div>
                            <div class="media-body texts">
                                <h4>24 hours helpline</h4>
                                <h2>123 456 789</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 footFeature">
                        <div class="media m0">
                            <div class="media-left icon"><img src="<?php echo base_url() ?>public/images/icons/shopping-bag2.png" alt=""></div>
                            <div class="media-body texts">
                                <h4>see our</h4>
                                <h2>latest offers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container line2">
                <div class="row">
                    <div class="col-sm-3 widget">
                        <div class="row m0">
                            <h4>About furniturehouse</h4>
                            <p>We provide the best Quality of products to you.We are always here to help our lovely customers.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 widget">
                        <div class="row m0">
                            <h4>information</h4>
                            <ul class="nav">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Top Brands</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 widget">
                        <div class="row m0">
                            <h4>top brands</h4>
                            <ul class="nav">
                                <li><a href="#">Benicia Bed</a></li>
                                <li><a href="#">Foundry</a></li>
                                <li><a href="#">BorkHolder</a></li>
                                <li><a href="#">Burton james</a></li>
                                <li><a href="#">Copeland</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 widget">
                        <div class="row m0">
                            <h4>subscribe to our latest news</h4>
                            <form action="subscriptionList.php" method="post" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="subscribeEmail" name="subscribeEmail" placeholder="EMAIL ADDRESS">
                                </div>
                                <input type="submit" class="form-control" value="Subscribe" id="submit" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m0 copyRight">
            <div class="container">
                <div class="row">
                    <div class="fleft">&copy; 2019 <a href="index.html">FurnitureHouse</a> All Rights Reserved.</div>
                    <ul class="nav nav-pills fright">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!--jQuery, Bootstrap and other vendor JS-->

    <!--jQuery-->
    <script src="<?php echo base_url() ?>public/js/jquery-2.1.3.min.js"></script>

    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <!--Bootstrap JS-->
    <script src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>

    <!--Nice Scroll-->
    <script src="<?php echo base_url() ?>public/vendors/nicescroll/jquery.nicescroll.js"></script>

    <!--Flickr-->


    <!--Lightshot-->
    <script src="<?php echo base_url() ?>public/vendors/lightbox/js/lightbox.min.js"></script>

    <!--Tweets-->
    <script src="<?php echo base_url() ?>public/vendors/tweet/scripts.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/tweet/tweetie.min.js"></script>

    <!--Counter Up-->
    <script src="<?php echo base_url() ?>public/vendors/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/counterup/jquery.counterup.min.js"></script>

    <!--Owl Carousel-->
    <script src="<?php echo base_url() ?>public/vendors/owl.carousel/js/owl.carousel.min.js"></script>

    <!--Isotope-->
    <script src="<?php echo base_url() ?>public/vendors/isotope/isotope-custom.js"></script>

    <!--FlexSlider-->
    <script src="<?php echo base_url() ?>public/vendors/flexslider/jquery.flexslider-min.js"></script>

    <!--Strella JS-->
    <script src="<?php echo base_url() ?>public/js/furniture.js"></script>
</body>
</html>
