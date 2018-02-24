﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>iMax Template</title>

    <link rel="icon" href="{{ asset('lib/iMax/assets/images/favicon.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300,300italic">

    <!-- Begin: MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/iMax/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/iMax/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/iMax/assets/css/plugins-min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/iMax/assets/css/menu-overright.css') }}">
    <link href="{{ asset('lib/iMax/assets/css/colors/aqua-yellow.css') }}" type="text/css" media="all" rel="stylesheet" />
    <!-- End: MAIN CSS -->

    <!-- Begin: REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/iMax/assets/plugins/revolution/css/layers.css')}}"/> 
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/iMax/assets/plugins/revolution/css/settings.css') }}"/> 
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/iMax/assets/plugins/revolution/css/navigation.css') }}"/> 
    <!-- End: REQUIRED FOR THIS PAGE ONLY -->

    <!-- Begin: HTML5SHIV FOR IE8 -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/internetexplorer/html5shiv.min.js"></script>
      <script src="assets/js/internetexplorer/respond.min.js"></script>
    <![endif]-->
    <!-- end: HTML5SHIV FOR IE8 -->
</head>

<body class="alt switcher_boxed boxed">

    <!-- Begin: HEADER SEARCH -->
    <div class="modal fade header-search" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="search">
                <form method="get" action="search.html">
                    <div class="form-group full-width">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Search Here..." value="" name="q">
                            <div class="input-group-btn "><button type="submit" class="btn btn-base btn-lg"><i class="fa fa-search"></i></button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End: HEADER SEARCH -->

    <!--
    #################################
        - Begin: HEADER -
    #################################
    -->
    <header class="main-header sticky-header transparent-header light">
        <nav class="navbar navbar-default transparent transparent-text-white">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <!-- Begin: RESPONSIVE MENU TOGGLER -->
                    <button type="button" class="navbar-toggle" data-toggle="modal" data-target=".header-search">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- End: RESPONSIVE MENU TOGGLER -->
                    <!-- Begin: RESPONSIVE MENU TOGGLER -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <!-- End: RESPONSIVE MENU TOGGLER -->
                    <!-- Begin: RESPONSIVE MENU TOGGLER -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- End: RESPONSIVE MENU TOGGLER -->
                    <!-- Begin: LOGO -->
                    <a class="navbar-brand logo" href="index.html"><span><i class="fa fa-info"></i></span> Max</a>
                    <!-- End: LOGO -->
                </div>
                <div class="collapse navbar-collapse pull-right search-shop-dropdown" id="nav-navbar-collapse-2">
                    <ul class="nav navbar-nav navbar-right margin-right-0">
                        <li class="dropdown search-dropdown hidden-xs hidden-sm"> <a href="#" class="" data-toggle="modal" data-target=".header-search"><i class="fa fa-search"></i></a> </li>
                        <li class="dropdown shop-cart-dropdown">
                            <a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-hover="dropdown" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-shopping-bag"></i><span class="badge">3</span> </a>
                            <ul class="dropdown-menu">
                                <li class="list-img">
                                    <ul class="list-ul">
                                        <li>
                                            <div class="row text-weight-700">
                                                <div class="col-xs-8">item(s)</div>
                                                <div class="col-xs-4 text-right">$90</div>
                                            </div>
                                        </li>
                                        <li class="alert">
                                            <div class="close"><a href="#" data-dismiss="alert" aria-hidden="false"><i class="fa fa-close"></i></a></div>
                                            <div class="list-img"> <a href="#"><img src="lib/iMax/assets/images/widgets/shop-1.jpg" alt=""></a> </div>
                                            <div class="list-text">
                                                <h5 class="list-title text-weight-600"><a href="#">Halter Neck Dress</a></h5>
                                                <ul class="list-meta list-inline">
                                                    <li><i class="fa fa-usd"></i> 30.00</li>
                                                    <li>
                                                        <div class="star-rating" data-toggle="tooltip" data-placement="top" title="5.00"> <span class="width-100"><strong class="rating">5.00</strong> out of 5</span> </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="alert">
                                            <div class="close"><a href="#" data-dismiss="alert" aria-hidden="false"><i class="fa fa-close"></i></a></div>
                                            <div class="list-img"> <a href="#"><img src="lib/iMax/assets/images/widgets/shop-2.jpg" alt=""></a> </div>
                                            <div class="list-text">
                                                <h5 class="list-title text-weight-600"><a href="#">Maxi Sweater Dress</a></h5>
                                                <ul class="list-meta list-inline">
                                                    <li><i class="fa fa-usd"></i> 30.00</li>
                                                    <li>
                                                        <div class="star-rating" data-toggle="tooltip" data-placement="top" title="4.00"> <span class="width-80"><strong class="rating">4.00</strong> out of 5</span> </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="alert">
                                            <div class="close"><a href="#" data-dismiss="alert" aria-hidden="false"><i class="fa fa-close"></i></a></div>
                                            <div class="list-img"> <a href="#"><img src="lib/iMax/assets/images/widgets/shop-3.jpg" alt=""></a> </div>
                                            <div class="list-text">
                                                <h5 class="list-title text-weight-600"><a href="#">Mixed Fabric Jacket</a></h5>
                                                <ul class="list-meta list-inline">
                                                    <li><i class="fa fa-usd"></i> 30.00</li>
                                                    <li>
                                                        <div class="star-rating" data-toggle="tooltip" data-placement="top" title="2.50"> <span class="width-50"><strong class="rating">2.50</strong> out of 5</span> </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="shop-cart-btn">
                                    <div class="btn-group btn-group-justified"> <a href="lib/iMax/assets/shop-cart.html" class="btn btn-base btn-sm text-weight-700 text-spacing-2 text-uppercase">View Cart</a> <a href="shop-checkout.html" class="btn btn-dark btn-sm text-weight-700 text-spacing-2 text-uppercase">Checkout</a> </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="collapse navbar-collapse text-weight-400" id="nav-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right margin-right-0">
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#">Home - Corporate <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/index-corporate-1.html">Home - Corporate 1</a></li>
                                        <li><a href="lib/iMax/assets/index-corporate-2.html">Home - Corporate 2</a></li>
                                        <li><a href="lib/iMax/assets/index-corporate-3.html">Home - Corporate 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Home - Portfolio <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/index-portfolio-1.html">Home - Portfolio 1</a></li>
                                        <li><a href="lib/iMax/assets/index-portfolio-2.html">Home - Portfolio 2</a></li>
                                        <li><a href="lib/iMax/assets/index-portfolio-3.html">Home - Portfolio 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="lib/iMax/assets/charity-index.html">Home - Charity</a></li>
                                <li><a href="lib/iMax/assets/construction-index.html">Home - Construction</a></li>
                                <li><a href="lib/iMax/assets/gym-index.html">Home - Gym</a></li>
                                <li><a href="lib/iMax/assets/photography-index.html">Home - PhotoGraphy</a></li>
                                <li><a href="lib/iMax/assets/medico-index.html">Home - Medico</a></li>
                                <li><a href="lib/iMax/assets/lawyer-index.html">Home - Lawyer</a></li>
                                <li><a href="lib/iMax/assets/wedding-index.html">Home - Wedding</a></li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/index-blog-1.html">Blogs <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/index-blog-1.html">Home - Blog 1</a></li>
                                        <li><a href="lib/iMax/assets/index-blog-2.html">Home - Blog 2</a></li>
                                        <li><a href="lib/iMax/assets/index-blog-3.html">Home - Blog 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/index-shop-1.html">Shops <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/index-shop-1.html">Home - Shop 1</a></li>
                                        <li><a href="lib/iMax/assets/index-shop-2.html">Home - Shop 2</a></li>
                                        <li><a href="lib/iMax/assets/index-shop-3.html">Home - Shop 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="lib/iMax/assets/index-onepage.html">Home - One Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-about-us.html">About Us <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-about-us.html">About Us 1</a></li>
                                        <li><a href="lib/iMax/assets/page-about-us-2.html">About Us 2</a></li>
                                        <li><a href="lib/iMax/assets/page-about-us-3.html">About Us 3</a></li>
                                        <li><a href="lib/iMax/assets/page-about-me.html">About Me</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-services.html">Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-services.html">Services 1</a></li>
                                        <li><a href="lib/iMax/assets/page-services-2.html">Services 2</a></li>
                                        <li><a href="lib/iMax/assets/page-services-3.html">Services 3</a></li>
                                        <li><a href="lib/iMax/assets/page-services-4.html">Services 4</a></li>
                                        <li><a href="lib/iMax/assets/page-services-5.html">Services 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-our-team.html">Our Team <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-our-team.html">Our Team 1</a></li>
                                        <li><a href="lib/iMax/assets/page-our-team-2.html">Our Team 2</a></li>
                                        <li><a href="lib/iMax/assets/page-our-team-3.html">Our Team 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-testimonials.html">Testimonials <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-testimonials.html">Testimonials 1</a></li>
                                        <li><a href="lib/iMax/assets/page-testimonials-2.html">Testimonials 2</a></li>
                                        <li><a href="lib/iMax/assets/page-testimonials-3.html">Testimonials 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-faqs.html">Faqs <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-faqs.html">Faqs 1</a></li>
                                        <li><a href="lib/iMax/assets/page-faqs-2.html">Faqs 2</a></li>
                                        <li><a href="lib/iMax/assets/page-faqs-3.html">Faqs 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-contact-us.html">Contact Us <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-contact-us.php">Contact Us 1</a></li>
                                        <li><a href="lib/iMax/assets/page-contact-us-2.php">Contact Us 2</a></li>
                                        <li><a href="lib/iMax/assets/page-contact-us-3.php">Contact Us 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-left-sidebar.html">Layouts <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="lib/iMax/assets/page-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="lib/iMax/assets/page-both-sidebar.html">Both Sidebar</a></li>
                                        <li><a href="lib/iMax/assets/page-full-width.html">Full Width</a></li>
                                        <li><a href="lib/iMax/assets/page-wide-left-sidebar.html">Wide Left Sidebar</a></li>
                                        <li><a href="lib/iMax/assets/page-wide-right-sidebar.html">Wide Right Sidebar</a></li>
                                        <li><a href="lib/iMax/assets/page-wide-both-sidebar.html">Wide Both Sidebar</a></li>
                                        <li><a href="lib/iMax/assets/page-wide-full-width.html">Wide Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-login.html">Login <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-login.html">Login 1</a></li>
                                        <li><a href="lib/iMax/assets/age-login-2.html">Login 2</a></li>
                                        <li><a href="lib/iMax/assets/page-login-3.html">Login 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-register.html">Register <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-register.html">Register 1</a></li>
                                        <li><a href="lib/iMax/assets/page-register-2.html">Register 2</a></li>
                                        <li><a href="lib/iMax/assets/page-register-3.html">Register 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-login-register.html">Login Register <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-login-register.html">Login Register 1</a></li>
                                        <li><a href="lib/iMax/assets/page-login-register-2.html">Login Register 2</a></li>
                                        <li><a href="lib/iMax/assets/page-login-register-3.html">Login Register 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-lost-password.html">Lost Password <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-lost-password.html">Lost Password 1</a></li>
                                        <li><a href="lib/iMax/assets/page-lost-password-2.html">Lost Password 2</a></li>
                                        <li><a href="lib/iMax/assets/page-lost-password-3.html">Lost Password 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-error-404.html">404 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-error-404.html">404 1</a></li>
                                        <li><a href="lib/iMax/assets/page-error-404-2.html">404 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-coming-soon.html">Coming Soon <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-coming-soon.html">Coming Soon 1</a></li>
                                        <li><a href="lib/iMax/assets/page-coming-soon-2.html">Coming Soon 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="lib/iMax/assets/page-blank.html">Blank <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="lib/iMax/assets/page-blank.html">Blank 1</a></li>
                                        <li><a href="lib/iMax/assets/page-blank-2.html">Blank 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">1st Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">2nd Dropdown <span class="caret"></span></a>
                                            <ul class="dropdown-menu animate" data-animation="bounceInUp">
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">3rd Dropdown</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Start: MEGA MENU CONTENT -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Columns</span>
                                                        <ul class="sub-menu">
                                                            <li><a href="lib/iMax/assets/portfolio-6-column.html">6 Column</a></li>
                                                            <li><a href="lib/iMax/assets/portfolio-5-column.html">5 Column</a></li>
                                                            <li><a href="lib/iMax/assets/portfolio-4-column.html">4 Column</a></li>
                                                            <li><a href="lib/iMax/assets/portfolio-3-column.html">3 Column</a></li>
                                                            <li><a href="lib/iMax/assets/portfolio-2-column.html">2 Column</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Style</span>
                                                        <ul class="sub-menu">
                                                            <li> <a href="lib/iMax/assets/portfolio-grid.html"> Grid </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-masonry.html"> Masonry </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-only-title.html"> Only Title </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-only-image.html"> Only Image </a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Sidebars</span>
                                                        <ul class="sub-menu">
                                                            <li> <a href="lib/iMax/assets/portfolio-left-sidebar.html"> Left Sidebar </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-right-sidebar.html"> Right Sidebar </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-both-sidebar.html"> Both Sidebars </a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Single Project</span>
                                                        <ul class="sub-menu">
                                                            <li> <a href="lib/iMax/assets/portfolio-single-project-fullwidth.html"> Fullwidth </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-single-project-left-sidebar.html"> Left Sidebar </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-single-project-right-sidebar.html"> Right Sidebar </a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Single Project Media</span>
                                                        <ul class="sub-menu">
                                                            <li> <a href="lib/iMax/assets/portfolio-single-project-image-style.html"> Single Image </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-single-project-slider-gallery-style.html"> Slider Gallery </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-single-project-thumbnail-gallery-style.html"> Thumbnail Gallery </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-single-project-video-style.html"> Video </a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Color Versions</span>
                                                        <ul class="sub-menu">
                                                            <li> <a href="lib/iMax/assets/portfolio-default.html"> Default </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-light.html"> Light </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-dark.html"> Dark </a> </li>
                                                            <li> <a href="lib/iMax/assets/portfolio-base.html"> Base </a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: MEGA MENU CONTENT -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-menu">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">
                                Shortcodes <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu icon">
                                <li>
                                    <!-- Start: MEGA MENU CONTENT -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-accordion.html">
                                                                    <i class="fa fa-th-list"></i> Accordion
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-animations.html">
                                                                    <i class="fa fa-magic"></i> Animations
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-animated-rotate-text.html">
                                                                    <i class="fa fa-magic"></i> Animated Rotate Text
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-alerts.html">
                                                                    <i class="fa fa-exclamation-circle"></i> Alerts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-buttons.html">
                                                                    <i class="fa fa-link"></i> Buttons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-bg-sections.html">
                                                                    <i class="fa fa-columns"></i> Background Sections
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-clients.html">
                                                                    <i class="fa fa-user"></i> Clients
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-counters.html">
                                                                    <i class="fa fa-tachometer"></i> Counters
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-column-section.html">
                                                                    <i class="fa fa-columns"></i> Column Section
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-callout.html">
                                                                    <i class="fa fa-bullhorn"></i> Callout
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-forms.html">
                                                                    <i class="fa fa-table"></i> Forms
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-full-screen-section.html">
                                                                    <i class="fa fa-table"></i> Full Screen Section
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-grid.html">
                                                                    <i class="fa fa-th-large"></i> Grid System
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-icons.html">
                                                                    <i class="fa fa-leaf"></i> Icons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-icon-lists.html">
                                                                    <i class="fa fa-list-alt"></i> Icon Lists
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-labels-badges.html">
                                                                    <i class="fa fa-certificate"></i> Labels & Badges
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-list-group-panels.html">
                                                                    <i class="fa fa-align-justify"></i> List Group & Panels
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-map.html">
                                                                    <i class="fa fa-map-marker"></i> Map
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-modals.html">
                                                                    <i class="fa fa-arrows-alt"></i> Modals
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-progressbar.html">
                                                                    <i class="fa fa-tasks"></i> Progressbar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-pricing-tables.html">
                                                                    <i class="fa fa-usd"></i> Pricing Tables
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-parallax-section.html">
                                                                    <i class="fa fa-columns"></i> Parallax Section
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-pagination-pager.html">
                                                                    <i class="fa fa-cogs"></i> Pagination & Pager
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-responsive-media-embeds.html">
                                                                    <i class="fa fa-play"></i> Responsive Media Embeds
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-services-box.html">
                                                                    <i class="fa fa-cubes"></i> Services Box
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-separator.html">
                                                                    <i class="fa fa-indent"></i> Separator
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-social-icons.html">
                                                                    <i class="fa fa-facebook"></i> Social Icons
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-typograpy.html">
                                                                    <i class="fa fa-pencil"></i> Typograpy
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-team.html">
                                                                    <i class="fa fa-users"></i> Team
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-testimonials.html">
                                                                    <i class="fa fa-quote-left"></i> Testimonials
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-tabs.html">
                                                                    <i class="fa fa-star"></i> Tabs
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-tables.html">
                                                                    <i class="fa fa-table"></i> Tables
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shortcode-video-background.html">
                                                                    <i class="fa fa-object-group"></i> Video Background
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: MEGA MENU CONTENT -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Start: MEGA MENU CONTENT -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Columns</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-6-column.html">
                                                                    6 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-5-column.html">
                                                                    5 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-4-column.html">

                                                                    4 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-3-column.html">
                                                                    3 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-2-column.html">
                                                                    2 Column
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Blog Style</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-grid.html">
                                                                    Grid
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-masonry.html">
                                                                    Masonry
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-thumbnail.html">
                                                                    Thumbnail
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-medium-image.html">
                                                                    Medium Image
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-large-image.html">
                                                                    Large Image
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Sidebars</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-left-sidebar.html">
                                                                    Left Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-right-sidebar.html">
                                                                    Right Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-both-sidebar.html">
                                                                    Both Sidebars
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Single Post</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-single-post-fullwidth.html">
                                                                    Fullwidth
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-single-post-left-sidebar.html">
                                                                    Left Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-single-post-right-sidebar.html">
                                                                    Right Sidebar
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Single Post Media Style</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-single-image-post.html">
                                                                    Single Image Post
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-single-slider-gallery-post.html">
                                                                    Slider Gallery Post
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-single-thumbnail-gallery-post.html">
                                                                    Thumbnail Gallery Post
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/blog-single-video-post.html">
                                                                    Video Post
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: MEGA MENU CONTENT -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Start: MEGA MENU CONTENT -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Columns</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-6-column.html">
                                                                    6 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-5-column.html">
                                                                    5 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-4-column.html">
                                                                    4 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-3-column.html">
                                                                    3 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-2-column.html">
                                                                    2 Column
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-1-column.html">
                                                                    1 Column
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Shop Style</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-grid.html">
                                                                    Grid
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-masonry.html">
                                                                    Masonry
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Sidebars</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-left-sidebar.html">
                                                                    Left Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-right-sidebar.html">
                                                                    Right Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-both-sidebar.html">
                                                                    Both Sidebars
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Single Product</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-single-product-fullwidth.html">
                                                                    Fullwidth
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-single-product-left-sidebar.html">
                                                                    Left Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-single-product-right-sidebar.html">
                                                                    Right Sidebar
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Order Process</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-cart.html">
                                                                    Cart
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/shop-checkout.html">
                                                                    Checkout
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Color Versions</span>
                                                        <ul class="sub-menu">
                                                            <li> <a href="lib/iMax/assets/shop-default.html"> Default </a> </li>
                                                            <li> <a href="lib/iMax/assets/shop-light.html"> Light </a> </li>
                                                            <li> <a href="lib/iMax/assets/shop-dark.html"> Dark </a> </li>
                                                            <li> <a href="lib/iMax/assets/shop-base.html"> Base </a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: MEGA MENU CONTENT -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-menu">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">
                                Features <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Start: MEGA MENU CONTENT -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Header Color Versions</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-default-header.html">
                                                                    Default White Header
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-light-header.html">
                                                                    Light Header
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-dark-header.html">
                                                                    Dark Header
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-base-header.html">
                                                                    Base Header
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Header Sizes</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-wide-header-mega-menu-wide.html">
                                                                    Wide Header Mega Menu Wide
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-box-header-mega-menu-wide.html">
                                                                    Box Header Mega Menu Wide
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Logo Menu Positions</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-left-menu-right.html">
                                                                    Logo Left Menu Right
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-right-menu-left.html">
                                                                    Logo Right Menu Left
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="features-logo-top-menu-below.html">
                                                                    Logo Top Menu Bellow
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Transparent Header</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-transparent-header-white-text.html">
                                                                    Menu White Text
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-transparent-header-black-text.html">
                                                                    Menu Black Text
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Semi Transparent</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-semi-transparent-header-default.html">
                                                                    Default
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="features-semi-transparent-header-light.html">
                                                                    Light
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-semi-transparent-header-dark.html">
                                                                    Dark
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-semi-transparent-header-base.html">
                                                                    Base
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Logo Bg Menu BG</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-white-base.html">
                                                                    White, Base
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-base-white.html">
                                                                    Base, White
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-dark-base.html">
                                                                    Dark, Base
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-base-dark.html">
                                                                    Base, Dark
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-white-dark.html">
                                                                    White, Dark
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-dark-white.html">
                                                                    Dark, White
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-white-light.html">
                                                                    White, Light
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-logo-top-position-light-white.html">
                                                                    Light, White
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-menu-icon-inside.html">
                                                                    Menu Icon Inside <span class="label label-base">Hot</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Revolution Sliders</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-revolution-slider.html">
                                                                    Boxed
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-revolution-slider-full-width.html">
                                                                    Full Width
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-revolution-slider-full-screen.html">
                                                                    Full Screen
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Page Main Heading</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-page-main-heading-sizes.html">
                                                                    Sizes
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-page-main-heading-alignment.html">
                                                                    Alignment
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-page-main-heading-color-version.html">
                                                                    Color Version
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-page-main-heading-media-version.html">
                                                                    Media Version
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">OWL Sliders</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-owl-slider.html">
                                                                    Default
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-owl-slider-progress-bar.html">
                                                                    Progress Bar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-owl-slider-thumbnail.html">
                                                                    Thumbnail
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-owl-slider-carousels.html">
                                                                    Carousels
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-owl-slider-static-content.html">
                                                                    Static Content
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <ul class="sub-menu">
                                                    <li>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Flex Sliders</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-flex-slider.html">
                                                                    Default
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-flex-slider-thumbnail.html">
                                                                    Thumbnail
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="mega-menu-title text-uppercase text-weight-700">Features</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="lib/iMax/assets/features-widgets.html">
                                                                    Widgets
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-modal-onload.html">
                                                                    Modal Onload
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-sticky-page-title.html">
                                                                    Sticky Page Title
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-twitter-tweets.html">
                                                                    Twitter Tweets
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-top-headers.html">
                                                                    Top Headers
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-patterns.html">
                                                                    Patterns
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-page-loaders.html">
                                                                    Page Loader
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-boxed-layout.html">
                                                                    Boxed Layout
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-left-header.html">
                                                                    Left Header
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="lib/iMax/assets/features-right-header.html">
                                                                    Right Header
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: MEGA MENU CONTENT -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>
    <!-- End: HEADER -
    ################################################################## -->


    <!--
    #################################
        - Begin: REVOLUTION SLIDER -
    #################################
    -->
    <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container tp-banner-container">                
        <div id="rev_slider" class="rev_slider fullwidthabanner">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-23" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/images/slider/slidebg4.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide1" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="lib/iMax/assets/images/slider/slidebg4.jpg" alt="" title="slidebg4" width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption NotGeneric-Icon tp-resizeme z-index-8 text-weight-600"
                         id="slide-23-layer-11"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-60"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":600,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power2.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">YOU ARE WELCOME</div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption large_bold_white tp-resizeme z-index-8"
                         id="slide-23-layer-15"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset=""
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":10,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power2.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">WORLD OF iMAX TEMPLATES</div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Gym-Subline tp-resizeme z-index-8 text-weight-400"
                         id="slide-23-layer-5"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="60"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":10,"speed":1800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Create your website with iMax & You'll be proud of yourself</div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption z-index-8"
                         id="slide-23-layer-7"
                         data-x="center" data-hoffset="-74"
                         data-y="center" data-voffset="140"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[{"delay":0,"speed":2200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":4400,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[30,30,30,30]"><a class="btn btn-base text-weight-700" href="#">READ MORE</a></div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption z-index-8"
                         id="slide-23-layer-17"
                         data-x="center" data-hoffset="74"
                         data-y="center" data-voffset="140"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[{"delay":0,"speed":2800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[30,30,30,30]"><a class="btn btn-dark text-weight-700" href="#">BUY NOW</a></div>
                    <div class="overlay dark-1"></div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-26" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/images/slider/slidebg3.jpg" data-rotate="0" data-saveperformance="off" data-title="Medico" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/slider/slidebg3.jpg" alt="" title="slidebg3" width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-resizeme z-index-8 text-size-100px text-white"
                         id="slide-26-layer-17"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-160"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><i class="fa fa-rocket"></i></div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption NotGeneric-Icon tp-resizeme z-index-8 text-weight-600"
                         id="slide-26-layer-11"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-60"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1200,"frame":"999","to":"auto:auto;","ease":"nothing"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">YOU ARE WELCOME</div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption large_bold_white tp-resizeme z-index-8"
                         id="slide-26-layer-15"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset=""
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":1600,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1600,"frame":"999","to":"auto:auto;","ease":"Power2.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">iMAX MAKES YOUR BUSINESS GROW</div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption Gym-Subline tp-resizeme z-index-8 text-weight-400"
                         id="slide-26-layer-5"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="60"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Creativity is our passion. Your success is our goal.</div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption z-index-8"
                         id="slide-26-layer-7"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="140"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[{"delay":0,"speed":2400,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":2400,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[30,30,30,30]"><a class="btn btn-base text-weight-700" href="#">READ MORE</a></div>
                    <div class="overlay dark-1"></div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-27" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/images/slider/slidebg5.jpg" data-rotate="0" data-saveperformance="off" data-title="Medico" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/slider/slidebg5.jpg" alt="" title="slidebg5" width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption large_bold_white tp-resizeme z-index-8"
                         id="slide-27-layer-15"
                         data-x="50"
                         data-y="center" data-voffset="-70"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":1200,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1200,"frame":"999","to":"auto:auto;","ease":"Power2.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">BOOTSTRAP 3+</div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption tp-resizeme z-index-8 text-size-30px text-white"
                         id="slide-27-layer-17"
                         data-x="50"
                         data-y="center" data-voffset=""
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":1400,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1400,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><i class="fa fa-check"></i></div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption Gym-Subline tp-resizeme z-index-8 text-weight-400"
                         id="slide-27-layer-5"
                         data-x="100"
                         data-y="center" data-voffset=""
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":10,"speed":1800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Responsive</div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption tp-resizeme z-index-8 text-size-30px text-white"
                         id="slide-27-layer-19"
                         data-x="50"
                         data-y="center" data-voffset="55"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><i class="fa fa-check"></i></div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption Gym-Subline tp-resizeme z-index-8 text-weight-400"
                         id="slide-27-layer-20"
                         data-x="100"
                         data-y="center" data-voffset="55"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":10,"speed":2200,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Retina</div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption tp-resizeme z-index-8 text-size-30px text-white"
                         id="slide-27-layer-21"
                         data-x="50"
                         data-y="center" data-voffset="105"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":0,"speed":2600,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":2600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><i class="fa fa-check"></i></div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption Gym-Subline tp-resizeme z-index-8 text-weight-400"
                         id="slide-27-layer-22"
                         data-x="100"
                         data-y="center" data-voffset="105"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":10,"speed":2800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Graphics</div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption z-index-8"
                         id="slide-27-layer-7"
                         data-x="15" data-hoffset="0"
                         data-y="center" data-voffset="180"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[30,30,30,30]"><a class="btn btn-base text-weight-700" href="#">READ MORE</a></div>

                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption z-index-8"
                         id="slide-27-layer-23"
                         data-x="170"
                         data-y="center" data-voffset="180"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[{"delay":0,"speed":3200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                         data-textalign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[10,10,10,10]"
                         data-paddingleft="[30,30,30,30]"><a class="btn btn-dark text-weight-700" href="#">BUY NOW</a></div>
                    <div class="overlay dark-1"></div>
                </li>
            </ul>
        </div>
    </div>
    <!-- End: REVOLUTION SLIDER -
    ################################################################## -->


    <!--
    #################################
        - Begin: SERVICES -
    #################################
    -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="margin-bottom-medium text-center">
                        <h4 class="text-weight-700 text-uppercase upper-heading text-base">Welcome to</h4>
                        <h1 class="text-weight-700">iMax Design Agency</h1>
                        <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                        <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <img class="img-responsive margin-bottom-medium" alt="iMax Services" src="lib/iMax/assets/images/section/mob-1.png">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="row">
                        <div class="col-sm-12 service base">
                            <a href="#">
                                <div class="service-icon">
                                    <i class="fa fa-edit"></i>
                                </div>
                            </a>
                            <div class="service-text">
                                <h4 class="text-uppercase text-weight-700"><a href="#">easy customizable</a></h4>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 service base">
                            <a href="#">
                                <div class="service-icon">
                                    <i class="fa fa-laptop"></i>
                                </div>
                            </a>
                            <div class="service-text">
                                <h4 class="text-uppercase text-weight-700"><a href="#">fully responsive</a></h4>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 service base">
                            <a href="#">
                                <div class="service-icon">
                                    <i class="fa fa-bitbucket"></i>
                                </div>
                            </a>
                            <div class="service-text">
                                <h4 class="text-uppercase text-weight-700"><a href="#">unlimited colors</a></h4>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 service base">
                            <a href="#">
                                <div class="service-icon">
                                    <i class="fa fa-code"></i>
                                </div>
                            </a>
                            <div class="service-text">
                                <h4 class="text-uppercase text-weight-700"><a href="#">clean coding</a></h4>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 service base">
                            <a href="#">
                                <div class="service-icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                            </a>
                            <div class="service-text">
                                <h4 class="text-uppercase text-weight-700"><a href="#">lifetime support</a></h4>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: SERVICES -
    ################################################################## -->
    <!--
    #################################
        - Begin: PARALLAX SECTION -
    #################################
    -->
    <section class="parallax padding-top-large padding-bottom-large">
        <div class="parallax_child img-section-9"></div>
        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h4 class="text-weight-700 text-uppercase upper-heading text-base">Do you have idea ?</h4>
                        <h1 class="text-weight-400">Share your <span class="text-zoomIn text-weight-700">amazing, awesome, fantastic</span> idea with iMax</h1>
                        <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                        <p class="">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus et netus et fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center margin-top-small">
                    <a href="#" class="btn btn-base btn-lg text-weight-700 text-uppercase">Let's Get Started</a>
                </div>
            </div>
        </div>
        <div class="overlay light-8"></div>
    </section>
    <!-- End: PARALLAX SECTION -
    ################################################################## -->
    <!--
    #################################
        - Begin: ABOUT US -
    #################################
    -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="margin-bottom-medium text-center">
                        <h4 class="text-weight-700 text-uppercase upper-heading text-base"><span class="text-lowercase">i</span>Max agency</h4>
                        <h1 class="text-weight-700">Little About Us</h1>
                        <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                        <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service text-center">
                    <a href="#">
                        <div class="service-icon big">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                    </a>
                    <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">We are different</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 service text-center light">
                    <a href="#">
                        <div class="service-icon big">
                            <i class="fa fa-users"></i>
                        </div>
                    </a>
                    <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">Who we are</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 service text-center dark">
                    <a href="#">
                        <div class="service-icon big">
                            <i class="fa fa-cubes"></i>
                        </div>
                    </a>
                    <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">Our mission</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 service text-center base">
                    <a href="#">
                        <div class="service-icon big">
                            <i class="fa fa-magic"></i>
                        </div>
                    </a>
                    <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">What we do</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: ABOUT US -
    ################################################################## -->
    <!--
    #################################
        - Begin: CALLOUT -
    #################################
    -->
    <section class="base-bg padding-0">
        <div class="callout">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row equal-height-row">
                            <div class="col-md-8 col-sm-12 equal-height-column">
                                <div class="row padding-top-small padding-bottom-small">
                                    <div class="col-sm-12">
                                        <h3 class="margin-0 text-white text-uppercase text-weight-700">Do you like to try the demo?</h3>
                                        <p class="margin-0 text-white">The perfect solution for your business start building your project with iMax</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 equal-height-column equal-height-column-auto">
                                <div class="row padding-bottom-small">
                                    <div class="col-md-12 callout-button-setting text-center">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                                            <a href="#" class="btn btn-default btn-lg btn-block text-weight-700 text-uppercase box-shadow-active">Read More</a>
                                            <a href="#" class="btn btn-dark btn-lg btn-block text-weight-700 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: CALLOUT -
    ################################################################## -->
    <!--
    #################################
        - Begin: SERVICES -
    #################################
    -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="margin-bottom-medium text-center">
                        <h4 class="text-weight-700 text-uppercase upper-heading text-base">This is Question?</h4>
                        <h1 class="text-weight-700">Why Do You Choose iMax</h1>
                        <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                        <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 service base">
                    <a href="#">
                        <div class="service-icon">
                            <i class="fa fa-edit"></i>
                        </div>
                    </a>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">easy customizable</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-4 service base">
                    <a href="#">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                    </a>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">fully responsive</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-4 service base">
                    <a href="#">
                        <div class="service-icon">
                            <i class="fa fa-bitbucket"></i>
                        </div>
                    </a>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">unlimited colors</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-4 service base">
                    <a href="#">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                    </a>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">clean coding</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-4 service base">
                    <a href="#">
                        <div class="service-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                    </a>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">lifetime support</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
                <div class="col-md-4 service base">
                    <a href="#">
                        <div class="service-icon">
                            <i class="fa fa-gift"></i>
                        </div>
                    </a>
                    <div class="service-text">
                        <h4 class="text-uppercase text-weight-700"><a href="#">featured rich</a></h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: SERVICES -
    ################################################################## -->
    <!--
    #################################
        - Begin: COUNTERS -
    #################################
    -->
    <section class="parallax">
        <div class="parallax_child img-section-8"></div>
        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-sm-12">
                    <div class="margin-bottom-medium text-center">
                        <h4 class="text-weight-700 text-uppercase upper-heading text-base"><span class="text-lowercase">i</span>Max agency</h4>
                        <h1 class="text-weight-700 text-white">Our Amazing Effects</h1>
                        <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                        <p class="text-white">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus et netus et fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>
            <div class="row custom-5-column">
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="counter-number">
                        <i class="fa fa-rocket text-base text-size-40px"></i>
                        <div class="counternumber text-weight-600 text-size-xsmall text-white margin-top-small margin-bottom-small" data-from="0" data-to="1400" data-speed="1500"></div>
                        <p class="text-capitalize text-spacing-1 text-white">Projects Completed</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="counter-number">
                        <i class="fa fa-heart text-base text-size-40px"></i>
                        <div class="counternumber text-weight-600 text-size-xsmall text-white margin-top-small margin-bottom-small" data-from="0" data-to="1000" data-speed="1500"></div>
                        <p class="text-capitalize text-spacing-1 text-white">Happy Customers</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="counter-number">
                        <i class="fa fa-trophy text-base text-size-40px"></i>
                        <div class="counternumber text-weight-600 text-size-xsmall text-white margin-top-small margin-bottom-small" data-from="0" data-to="80" data-speed="1500"></div>
                        <p class="text-capitalize text-spacing-1 text-white">Awards Won</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="counter-number">
                        <i class="fa fa-code text-base text-size-40px"></i>
                        <div class="counternumber text-weight-600 text-size-xsmall text-white margin-top-small margin-bottom-small" data-from="0" data-to="9000" data-speed="1500"></div>
                        <p class="text-capitalize text-spacing-1 text-white">Lines of Code</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="counter-number">
                        <i class="fa fa-coffee text-base text-size-40px"></i>
                        <div class="counternumber text-weight-600 text-size-xsmall text-white margin-top-small margin-bottom-small" data-from="0" data-to="2300" data-speed="1500"></div>
                        <p class="text-capitalize text-spacing-1 text-white">Coffee Cup</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay dark-6"></div>
    </section>
    <!-- End: COUNTERS -
    ################################################################## -->
    <!--
    #################################
        - Begin: PORTFOLIO -
    #################################
    -->
    <section class="padding-bottom-large">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="margin-bottom-medium text-center">
                        <h4 class="text-weight-700 text-uppercase upper-heading text-base"><span class="text-lowercase">i</span>Max agency</h4>
                        <h1 class="text-weight-700">Best Practice Work</h1>
                        <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                        <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus et netus et fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>
            <!-- Begin: PORTFOLIO FILTER -->
            <div id="masnory-filter" class="text-center">
                <ul id="filterable">
                    <li class="active"><a class="btn btn-default text-weight-600 text-uppercase" data-filter="*">All</a> </li>
                    <li><a class="btn btn-default text-weight-600 text-uppercase" data-filter=".portfolio-filter-animation">Animation</a> </li>
                    <li><a class="btn btn-default text-weight-600 text-uppercase" data-filter=".portfolio-filter-Designing">Designing</a> </li>
                    <li><a class="btn btn-default text-weight-600 text-uppercase" data-filter=".portfolio-filter-marketing">Marketing</a> </li>
                    <li><a class="btn btn-default text-weight-600 text-uppercase" data-filter=".portfolio-filter-photography">Photography</a> </li>
                    <li><a class="btn btn-default text-weight-600 text-uppercase" data-filter=".portfolio-filter-development">Development</a> </li>
                </ul>
            </div>
            <!-- End: PORTFOLIO FILTER -->
            <div class="row masnory-container">
                <div class="col-md-4 col-sm-6 masnory-item portfolio-filter-development">
                    <div class="portfolio text-center box-shadow-active">
                        <div class="portfolio-image">
                            <img class="img-responsive" alt="Portfolio" src="lib/iMax/assets/images/portfolio/portfolio-1.jpg">
                            <div class="portfolio-hover text-center">
                                <a class="zoom" href="lib/iMax/assets/images/portfolio/portfolio-1.jpg" data-placement="top" data-toggle="tooltip" title="Zoom" data-gal="prettyPhoto">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a class="link" data-placement="top" data-toggle="tooltip" href="#" data-original-title="View">
                                    <i class="fa fa-film"></i>
                                </a>
                            </div>
                            <div class="overlay dark-7"></div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-heading text-weight-700"><a href="#">Making Mockups</a></h4>
                            <ul class="portfolio-category">
                                <li><a href="#"><i>Photography</i></a></li>
                                <li>/</li>
                                <li><a href="#"><i>Marketing</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 masnory-item portfolio-filter-photography">
                    <div class="portfolio text-center box-shadow-active">
                        <div class="portfolio-image">
                            <img class="img-responsive" alt="Portfolio" src="lib/iMax/assets/images/portfolio/portfolio-2.jpg">
                            <div class="portfolio-hover text-center">
                                <a class="zoom" href="http://vimeo.com/76512663&width=700" data-placement="top" data-toggle="tooltip" title="Zoom" data-gal="prettyPhoto">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a class="link" data-placement="top" data-toggle="tooltip" href="#" data-original-title="View">
                                    <i class="fa fa-film"></i>
                                </a>
                            </div>
                            <div class="overlay dark-7"></div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-heading text-weight-700"><a href="#">Making Mockups</a></h4>
                            <ul class="portfolio-category">
                                <li><a href="#"><i>Photography</i></a></li>
                                <li>/</li>
                                <li><a href="#"><i>Marketing</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 masnory-item portfolio-filter-marketing portfolio-filter-development">
                    <div class="portfolio text-center box-shadow-active">
                        <div class="portfolio-image">
                            <img class="img-responsive" alt="Portfolio" src="lib/iMax/assets/images/portfolio/portfolio-3.jpg">
                            <div class="portfolio-hover text-center">
                                <a class="zoom" href="lib/iMax/assets/images/portfolio/portfolio-3.jpg" data-placement="top" data-toggle="tooltip" title="Zoom" data-gal="prettyPhoto">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a class="link" data-placement="top" data-toggle="tooltip" href="#" data-original-title="View">
                                    <i class="fa fa-image"></i>
                                </a>
                            </div>
                            <div class="overlay dark-7"></div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-heading text-weight-700"><a href="#">Making Mockups</a></h4>
                            <ul class="portfolio-category">
                                <li><a href="#"><i>Development</i></a></li>
                                <li>/</li>
                                <li><a href="#"><i>Marketing</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 masnory-item portfolio-filter-Designing portfolio-filter-marketing">
                    <div class="portfolio text-center box-shadow-active">
                        <div class="portfolio-image">
                            <img class="img-responsive" alt="Portfolio" src="lib/iMax/assets/images/portfolio/portfolio-4.jpg">
                            <div class="portfolio-hover text-center">
                                <a class="zoom" href="http://vimeo.com/76512663&width=700" data-placement="top" data-toggle="tooltip" title="Zoom" data-gal="prettyPhoto">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a class="link" data-placement="top" data-toggle="tooltip" href="#" data-original-title="View">
                                    <i class="fa fa-film"></i>
                                </a>
                            </div>
                            <div class="overlay dark-7"></div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-heading text-weight-700"><a href="#">Making Mockups</a></h4>
                            <ul class="portfolio-category">
                                <li><a href="#"><i>Designing</i></a></li>
                                <li>/</li>
                                <li><a href="#"><i>Marketing</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 masnory-item portfolio-filter-animation">
                    <div class="portfolio text-center box-shadow-active">
                        <div class="portfolio-image">
                            <img class="img-responsive" alt="Portfolio" src="lib/iMax/assets/images/portfolio/portfolio-5.jpg">
                            <div class="portfolio-hover text-center">
                                <a class="zoom" href="http://vimeo.com/76512663&width=700" data-placement="top" data-toggle="tooltip" title="Zoom" data-gal="prettyPhoto">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a class="link" data-placement="top" data-toggle="tooltip" href="#" data-original-title="View">
                                    <i class="fa fa-film"></i>
                                </a>
                            </div>
                            <div class="overlay dark-7"></div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-heading text-weight-700"><a href="#">Making Mockups</a></h4>
                            <ul class="portfolio-category">
                                <li><a href="#"><i>Animation</i></a></li>
                                <li>/</li>
                                <li><a href="#"><i>Photography</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 masnory-item portfolio-filter-animation portfolio-filter-photography">
                    <div class="portfolio text-center box-shadow-active">
                        <div class="portfolio-image">
                            <img class="img-responsive" alt="Portfolio" src="lib/iMax/assets/images/portfolio/portfolio-6.jpg">
                            <div class="portfolio-hover text-center">
                                <a class="zoom" href="lib/iMax/assets/images/portfolio/portfolio-6.jpg" data-placement="top" data-toggle="tooltip" title="Zoom" data-gal="prettyPhoto">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a class="link" data-placement="top" data-toggle="tooltip" href="#" data-original-title="View">
                                    <i class="fa fa-film"></i>
                                </a>
                            </div>
                            <div class="overlay dark-7"></div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-heading text-weight-700"><a href="#">Making Mockups</a></h4>
                            <ul class="portfolio-category">
                                <li><a href="#"><i>Photography</i></a></li>
                                <li>/</li>
                                <li><a href="#"><i>Marketing</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: PORTFOLIO -
    ################################################################## -->
    <!--
    #################################
        - Begin: BLOG -
    #################################
    -->
    <section class="parallax">
        <div class="parallax_child img-section-3"></div>
        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-sm-12">
                    <div class="margin-bottom-medium text-center">
                        <h4 class="text-weight-700 text-uppercase upper-heading text-base"><span class="text-lowercase">i</span>Max agency</h4>
                        <h1 class="text-weight-700">Our Creative History</h1>
                        <div class="separator"><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></div>
                        <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus et netus et fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div class="blog-view">
                                <div class="blog-media">
                                    <a class="" href="lib/iMax/assets/images/blog/blog-1.jpg" title="..." data-gal="prettyPhoto">
                                        <img src="lib/iMax/assets/images/blog/blog-1-thumb.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a title="" href="#"><i class="fa fa-camera-retro"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-text">
                                <h3 class="title text-capitalize text-weight-700"><a href="#">fringilla mauris sit amet donec duis leo sed</a></h3>
                                <ul class="meta-tags">
                                    <li><i class="fa fa-calendar"></i> <a>10th February 2017</a></li>
                                    <li>|</li>
                                    <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                                    <li>|</li>
                                    <li><i class="fa fa-comments"></i> <a href="#">24</a></li>
                                </ul>
                                <p class="text-justify">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed.</p>
                                <a href="#" class="btn btn-base text-weight-700 text-uppercase">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-hr">
                        <div class="col-md-12">
                            <hr>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div class="blog-view">
                                <div class="blog-media">
                                    <a class="" href="lib/iMax/assets/images/blog/blog-2.jpg" title="..." data-gal="prettyPhoto">
                                        <img src="lib/iMax/assets/images/blog/blog-2-thumb.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a title="" href="#"><i class="fa fa-camera-retro"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-text">
                                <h3 class="title text-capitalize text-weight-700"><a href="#">eget eros fabus tincidunt duis leo fringilla mauris</a></h3>
                                <ul class="meta-tags">
                                    <li><i class="fa fa-calendar"></i> <a>10th February 2017</a></li>
                                    <li>|</li>
                                    <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                                    <li>|</li>
                                    <li><i class="fa fa-comments"></i> <a href="#">24</a></li>
                                </ul>
                                <p class="text-justify">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed.</p>
                                <a href="#" class="btn btn-base text-weight-700 text-uppercase">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-hr">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div class="blog-view">
                                <div class="blog-media">
                                    <a class="" href="lib/iMax/assets/images/blog/blog-3.jpg" title="..." data-gal="prettyPhoto">
                                        <img src="lib/iMax/assets/images/blog/blog-3-thumb.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a title="" href="#"><i class="fa fa-camera-retro"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-text">
                                <h3 class="title text-capitalize text-weight-700"><a href="#">nullam quis ante etiam sit amet duis leo</a></h3>
                                <ul class="meta-tags">
                                    <li><i class="fa fa-calendar"></i> <a>10th February 2017</a></li>
                                    <li>|</li>
                                    <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                                    <li>|</li>
                                    <li><i class="fa fa-comments"></i> <a href="#">24</a></li>
                                </ul>
                                <p class="text-justify">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed.</p>
                                <a href="#" class="btn btn-base text-weight-700 text-uppercase">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-hr">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay light-9"></div>
    </section>
    <!-- End: BLOG -
    ################################################################## -->
    <!--
    #################################
        - Begin: CLIENTS -
    #################################
    -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h1 class="text-weight-700">Clients We have Servied</h1>
                    <hr>
                    <p class="lead">Lorem ipsum dolor sit amets consec tetuer adipiscing elit aenean comm odo ligulia eget dolors aenean massa cum sociis natoque penatibus et magnis dis.</p>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="clearfix clients-grid margin-bottom-medium">
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-active box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-1.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-2.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-active box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-3.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-4.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-5.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-active box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-6.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-1.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 box-shadow-active box-shadow-hover">
                            <div class="client">
                                <a href="#" class="hover-2"><img src="lib/iMax/assets/images/client/logo-2.jpg" alt="Client" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: CLIENTS -
    ################################################################## -->
    <!--
    #################################
        - Begin: FOOTER -
    #################################
    -->
    <footer id="footer" class="dark-bg">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <!-- Begin: WIDGET -->
                        <div class="widget map-bg">
                            <h3 class="widget-title text-weight-700">Contact Us</h3>
                            <address> <abbr title="Address"><strong>Address:</strong></abbr><br> 1355 Market Street, Suite 900<br> San Francisco, CA 94103 </address>
                            <address> <abbr title="Phone"><strong>Phone:</strong></abbr><br> (123) 456-7890 </address>
                            <address> <abbr title="Email"><strong>Email:</strong></abbr><br> <a href="mailto:#">info@imax.com</a> </address>
                        </div>
                        <!-- End: WIDGET -->
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <!-- Begin: WIDGET -->
                        <div class="widget">
                            <div class="list-link">
                                <h3 class="widget-title text-weight-700">Pages</h3>
                                <ul class="list-ul">
                                    <li><i class="fa fa-circle-o"></i><a href="#">Home</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">About Us</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">Services</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">Portfolio</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">Blog</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End: WIDGET -->
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <!-- Begin: WIDGET -->
                        <div class="widget">
                            <div class="list-link">
                                <h3 class="widget-title text-weight-700">Shortcut links</h3>
                                <ul class="list-ul">
                                    <li><i class="fa fa-circle-o"></i><a href="#">ante etiam sit</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">mauris sit</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">Sed consequat</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">idunt duis</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">sit amet orci</a></li>
                                    <li><i class="fa fa-circle-o"></i><a href="#">donec sodales</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End: WIDGET -->
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <!-- Begin: WIDGET -->
                        <div class="widget margin-bottom-small">
                            <h3 class="widget-title text-weight-700">Quick links</h3>
                            <div class="tags">
                                <ul class="list-ul list-inline">
                                    <li><a class="btn btn-default btn-sm btn-dark" href="#">Office</a> </li>
                                    <li><a class="btn btn-default btn-sm btn-dark" href="#">Computer</a> </li>
                                    <li><a class="btn btn-default btn-sm btn-dark" href="#">Picture</a> </li>
                                    <li><a class="btn btn-default btn-sm btn-dark" href="#">Design</a> </li>
                                    <li><a class="btn btn-default btn-sm btn-dark" href="#">Animation</a> </li>
                                    <li><a class="btn btn-default btn-sm btn-dark" href="#">Metting</a> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End: WIDGET -->
                        <!-- Begin: WIDGET -->
                        <div class="widget margin-bottom-small">
                            <h3 class="widget-title text-weight-700">Subscribe</h3>
                            <div class="search">
                                <form class="form-inline">
                                    <div class="form-group form-group-md full-width">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputAmount" placeholder="Email">
                                            <div class="input-group-btn"><button type="submit" class="btn btn-base btn-md btn-block text-uppercase text-weight-700"><i class="fa fa-send-o"></i></button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End: WIDGET -->
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2"> <a href="index.html" class="logo"><span><i class="fa fa-info"></i></span> Max</a> </div>
                    <div class="col-md-10 col-sm-10 text-right">
                        <p>&copy; Copyright 2017 by <a href="#">iMax</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End: FOOTER -
    ################################################################## -->

    <!-- Begin: BACK TO TOP -->
    <a id="back-to-top" href="#" class="back-to-top btn btn-base">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End: BACK TO TOP -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{asset('lib/iMax/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/js/main.js') }}"></script>

    <!-- Begin: REQUIRED FOR THIS PAGE ONLY -->
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.video.min.js') }}"></script>
    <!-- Slider JS -->
    <script type="text/javascript">
    var tpj=jQuery;         
        var revapi4;
        tpj(document).ready(function() {
            if(tpj("#rev_slider").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider");
            }else{
                revapi6 = tpj("#rev_slider").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"lib/iMax/assets/plugins/revolution/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"on",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style:"metis",
                            enable:true,
                            hide_onmobile:true,
                            hide_under:800,
                            hide_onleave:true,
                            hide_delay:200,
                            hide_delay_mobile:1200,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            }
                        }
                        ,
                        bullets: {
                            enable:true,
                            hide_onmobile:false,
                            style:"uranus",
                            hide_onleave:false,
                            direction:"horizontal",
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:0,
                            v_offset:20,
                            space:5,
                            tmp:'<span class="tp-bullet-inner"></span>'
                        }
                    },
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1240,
                    gridheight:500,
                    lazyType:"none",
                    parallax: {
                        type:"mouse",
                        origo:"enterpoint",
                        speed:400,
                        levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                        type:"mouse",
                    },
                    shadow:0,
                    spinner:"spinner2",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <!-- End: REQUIRED FOR THIS PAGE ONLY -->

</body>
</html>