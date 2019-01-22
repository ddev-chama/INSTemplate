<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITNS - Advanced IT Network Solutions To Help You Excel In Your Business</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
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
<style>
.avatar_img {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 60%;
    max-width: 5.875rem;
    max-height: 5.875rem;
    border: 0;
}
#header .logo_line .searchSec .wishlistCompare {
    width: 168px;
    padding: 0;
} 
.wishlistCompare ul {
  margin: 0;
  list-style-type: none;
  padding: 0;
  overflow: hidden;
}
    .wishlistCompare li{
    display:block;
    float:left;
    padding: 8px;
}
.nav_top{
    position: fixed;
    background-color:white;
    width:100%;
    top:0;
}
</style>   
</head>
<body>

    <header class="row" id="header">

        <div class="row m0 logo_line">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 logo" style="padding-top: 25px">
                        <a href="#" class="logo_a"><img src="<?php echo base_url() ?>public/images/logo.gif" alt="Furniture House"></a>
                    </div>
                    <div class="col-sm-2 searchSec" style="padding-top: 25px;margin-left:480px;">
                        
                        <div class="fleft wishlistCompare">
                            <ul>
                            <li><h4 style="padding: 14px;"><i class="icon-user" style="margin-right:10px;"></i>mario</h4></li>
                            <li><img class="avatar_img" src="https://cf.shopee.co.th/file/3c2a9bc79c1612a297e12f2af224130b_tn" alt=""></li></ul>
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
                        <li><img src="<?php print(base_url())?>public/images/logo.gif" width="200px" alt=""></li>
                        <li class=" <?php if($page_select=="home"){ echo "active"; } ?>" ><a href="<?php print(base_url())?>index.php">Home</a></li>
                        <li class=" <?php if($page_select=="about"){ echo "active"; } ?>" ><a href="<?php print(base_url())?>index.php/INS/about">About</a></li>
                        <li class="<?php if($page_select=="product"){ echo "active"; } ?>"><a href="<?php print(base_url())?>index.php/INS/product">Product</a></li >
                        <li class="<?php if($page_select=="service"){ echo "active"; } ?>"><a href="<?php print(base_url())?>index.php/INS/service">Service</a></li >
                        <li class=" <?php if($page_select=="blog"){ echo "active"; } ?>"><a href="<?php print(base_url())?>index.php/INS/blog">Blog</a></li >
                        <li class="<?php if($page_select=="contact"){ echo "active"; } ?>" ct"><a href="<?php print(base_url())?>index.php/INS/contact">contact</a></li >
                        <?php /*<?php print(base_url())?>index.php/INS/contact*/ ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </header> <!--Header-->

    <section id="slider" class="row">
        <div class="row sliderCont flexslider m0">
            <ul class="slides nav">
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
                        <li><a href="<?php print(base_url())?>index.php">Home</a></li>
                        <li><a href="<?php print(base_url())?>index.php/INS/about">about</a></li>
                        <li><a href="<?php print(base_url())?>index.php/INS/blog">blog</a></li>
                        <li><a href="<?php print(base_url())?>index.php/INS/contact">contact</a></li>
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
    <script>
    $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 430;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('nav_top');
                 $("nav").slideDown("slow");
                 $('#theDiv').prepend('<img id="theImg" src="theImg.png" />')
             }
			 else {
				$('nav').removeClass('nav_top');
			 }
		});
	});

    </script>
    
</body>
</html>
<script>

