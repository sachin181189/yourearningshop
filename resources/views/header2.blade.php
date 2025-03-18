<?php 
use App\Http\Controllers\Homecontroller;
$mainmenu =Homecontroller::getMenu();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HakDuck - Product Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png') }}">
    <!-- Place favicon.ico in the root directory -->
  
    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/themify-icons.css') }}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/elegant.css') }}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.mmenu.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui.min.css') }}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/venobox.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slick.css') }}">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slick-theme.css') }}">
    <!-- cssanimation css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/cssanimation.min.css') }}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}" />     
    <!-- helper css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/helper.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
</head>

<body>

    <!--header-area start-->
    <header class="header-area pb-22">
        <div class="desktop-header">
            <!--header-top-->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="topbar-left">
                                <ul class="list-none">
                                    <li>SHOP EVENTS & SAVE UP TO <span>65% OFF!</span></li>
                                    <li>Call Us: <span>001-1234-88888</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="topbar-right">
                                <div class="social-icons pull-right">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                                <div class="currency-bar lang-bar pull-right">
                                    <ul>
                                        <li><a href="#"><img src="{{ URL::asset('assets/images/icons/gb.png') }}" alt="" />English <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Chinese</a></li>
                                            </ul>
                                        </li>
                                        <li><span class="br">|</span></li>
                                    </ul>
                                </div>
                                <div class="currency-bar pull-right">
                                    <ul>
                                        <li><a href="#">USD <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="#">EUR</a></li>
                                                <li><a href="#">AUD</a></li>
                                            </ul>
                                        </li>
                                        <li><span>|</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header-bottom-->
            <div class="sticker header-bottom">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="mainmenu">  
                                <nav>
                                    <ul>
                                        <li><a href="{{URL('/')}}">Home</a></li>
                                        <li><a href="{{URL('/shop')}}">Shop</a></li>
                                        @foreach($mainmenu as $mm)
                                            <li><a href="{{URL::to('product-list')}}/{{$mm->slug}}" class="parent">{{$mm->category}}</a> </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="register-login pull-right">
                                <a href="{{ URL('/register') }}">Register</a>
                                <span>/</span>
                                <a href="{{ URL('/login') }}">Sign in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--products-search-->
            <div class="products-search">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-2">
                            <div class="collapse-menu mt-0">
                                <ul>
                                    <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                                        <ul class="vm-dropdown d-hidden">
                                            <li><a href="#"><i class="fa fa-laptop"></i>Computer <b class="caret"></b></a>
                                                <ul class="mega-menu">
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Shop Page</span>
                                                        <ul>
                                                            <li><a href="#">Products Block Top</a></li>
                                                            <li><a href="#">Products Block Bottom</a></li>
                                                            <li><a href="#">Shop Grid 5 Column</a></li>
                                                            <li><a href="#">Shop List</a></li>
                                                            <li><a href="#">Shop width Normal</a></li>
                                                            <li><a href="#">Shop List Normal</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Featured</span>
                                                        <ul>
                                                            <li><a href="#">Thumbnails Left</a></li>
                                                            <li><a href="#">Thumbnails Right</a></li>
                                                            <li><a href="#">Thumbnails Bottom</a></li>
                                                            <li><a href="#">Thumbnails Full</a></li>
                                                            <li><a href="#">Single 2 Colums</a></li>
                                                            <li><a href="#">Tabs Content</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Shop Page</span>
                                                        <ul>
                                                            <li><a href="#">Simple Product</a></li>
                                                            <li><a href="#">Grouped Product</a></li>
                                                            <li><a href="#">Variable Product</a></li>
                                                            <li><a href="#">External Product</a></li>
                                                            <li><a href="#">My account</a></li>
                                                            <li><a href="#">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Features</span>
                                                        <ul>
                                                            <li><a href="#">Detail with Video</a></li>
                                                            <li><a href="#">Variations Swatches</a></li>
                                                            <li><a href="#">With Countdown Timer</a></li>
                                                            <li><a href="#">Catalog Mode</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="fa fa-desktop"></i>TV & Smart box <b class="caret"></b></a>
                                                <ul class="mega-menu">
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Shop Page</span>
                                                        <ul>
                                                            <li><a href="#">Products Block Top</a></li>
                                                            <li><a href="#">Products Block Bottom</a></li>
                                                            <li><a href="#">Shop Grid 5 Column</a></li>
                                                            <li><a href="#">Shop List</a></li>
                                                            <li><a href="#">Shop width Normal</a></li>
                                                            <li><a href="#">Shop List Normal</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Featured</span>
                                                        <ul>
                                                            <li><a href="#">Thumbnails Left</a></li>
                                                            <li><a href="#">Thumbnails Right</a></li>
                                                            <li><a href="#">Thumbnails Bottom</a></li>
                                                            <li><a href="#">Thumbnails Full</a></li>
                                                            <li><a href="#">Single 2 Colums</a></li>
                                                            <li><a href="#">Detail with Accessories</a></li>
                                                            <li><a href="#">Tabs Content</a></li>
                                                            <li><a href="#">Accordion Tabs</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="fa fa-camera"></i>Camera & Photography</a></li>
                                            <li><a href="#"><i class="fa fa-headphones"></i>Headphones</a></li>
                                            <li><a href="#"><i class="fa fa-music"></i>Musical Instruments</a></li>
                                            <li><a href="#"><i class="fa fa-mobile"></i>Smart phone & Tablets</a></li>
                                            <li><a href="#"><i class="fa fa-flash"></i>Accessories</a></li>
                                            <li><a href="#"><i class="fa fa-microphone"></i>Home Audio & Theater</a></li>
                                            <li><a href="#"><i class="fa fa-print"></i>Printer</a></li>
                                            <li><a href="#"><i class="fa fa-fax"></i>Fax machine</a></li>
                                            <li><a href="#"><i class="fa fa-spoon"></i>Household goods</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i>Watch</a></li>
                                            <li><a href="#"><i class="fa fa-random"></i>Other</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box">
                                <select>
                                    <option>All Categories</option>
                                    <option>Computer</option>
                                    <option>TV & Smart box</option>
                                    <option>Camera & Photography</option>
                                    <option>Headphones</option>
                                </select>
                                <input type="text" placeholder="What do you need?" />
                                <button>Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mini-cart pull-right">
                                <ul>
                                    <li><a href="#" title="Track Your Order"><i class="ti-truck"></i></a></li>
                                    <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                                    <li><a href="javascript:void(0);" class="minicart-icon"><i class="icon_bag_alt"></i>$180.00<span>2</span></a>
                                        <div class="cart-dropdown">
                                            <ul>
                                                <li>
                                                    <div class="mini-cart-thumb">
                                                        <a href="#"><img src="{{ URL::asset('assets/images/products/cart/thumb-1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="mini-cart-heading">
                                                        <span>$460.00 x 1</span>
                                                        <h5><a href="#">Kabino Bedside Table</a></h5>
                                                    </div>
                                                    <div class="mini-cart-remove">
                                                        <button><i class="ti-close"></i></button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-thumb">
                                                        <a href="#"><img src="{{ URL::asset('assets/images/products/cart/thumb-2.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="mini-cart-heading">
                                                        <span>$460.00 x 1</span>
                                                        <h5><a href="#">Kabino Bedside Table</a></h5>
                                                    </div>
                                                    <div class="mini-cart-remove">
                                                        <button><i class="ti-close"></i></button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="minicart-total fix">
                                                <span class="pull-left">total:</span>
                                                <span class="pull-right">$460.00</span>
                                            </div>
                                            <div class="mini-cart-checkout">
                                                <a href="shopping-cart.html" class="btn-common view-cart">VIEW CARD</a>
                                                <a href="checkout.html" class="btn-common checkout mt-10">CHECK OUT</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--mobile-header-->
        <div class="sticker mobile-header">
            <div class="container-fluid">
                <!--logo and cart-->
                <div class="row align-items-center">
                    <div class="col-sm-4 col-6">
                        <div class="logo">
                            <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8 col-6">
                        <div class="mini-cart text-right">
                            <ul>
                                <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                                <li class="minicart-icon"><a href="#"><i class="icon_bag_alt"></i><span>2</span></a>
                                    <div class="cart-dropdown">
                                        <ul>
                                            <li>
                                                <div class="mini-cart-thumb">
                                                    <a href="#"><img src="{{ URL::asset('assets/images/products/cart/thumb-1.jpg') }}" alt="" /></a>
                                                </div>
                                                <div class="mini-cart-heading">
                                                    <span>$460.00 x 1</span>
                                                    <h5><a href="#">Kabino Bedside Table</a></h5>
                                                </div>
                                                <div class="mini-cart-remove">
                                                    <button><i class="ti-close"></i></button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mini-cart-thumb">
                                                    <a href="#"><img src="{{ URL::asset('assets/images/products/cart/thumb-2.jpg') }}" alt="" /></a>
                                                </div>
                                                <div class="mini-cart-heading">
                                                    <span>$460.00 x 1</span>
                                                    <h5><a href="#">Kabino Bedside Table</a></h5>
                                                </div>
                                                <div class="mini-cart-remove">
                                                    <button><i class="ti-close"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="minicart-total fix">
                                            <span class="pull-left">total:</span>
                                            <span class="pull-right">$460.00</span>
                                        </div>
                                        <div class="mini-cart-checkout">
                                            <a href="shopping-cart.html" class="btn-common view-cart">VIEW CARD</a>
                                            <a href="checkout.html" class="btn-common checkout mt-10">CHECK OUT</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--search-box-->
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="search-box mt-sm-15">
                            <select>
                                <option>All Categories</option>
                                <option>Computer</option>
                                <option>TV & Smart box</option>
                                <option>Camera & Photography</option>
                                <option>Headphones</option>
                            </select>
                            <input type="text" placeholder="What do you need?" />
                            <button>Search</button>
                        </div>
                    </div>
                </div>
                <!--site-menu-->
                <div class="row mt-sm-10">
                    <div class="col-lg-12">
                        <a href="#my-menu" class="mmenu-icon pull-left"><i class="fa fa-bars"></i></a>

                        <div class="mainmenu">
                            <nav id="my-menu">
                                <ul>
                                    <li><a href="{{ URL::to('/') }}">Home <b class="caret"></b></a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home Version 1</a></li>
                                            <li><a href="index-2.html">Home Version 2</a></li>
                                            <li><a href="index-3.html">Home Version 3</a></li>
                                            <li><a href="index-4.html">Home Version 4</a></li>
                                            <li><a href="index-5.html">Home Version 5</a></li>
                                            <li><a href="index-6.html">Home Version 6</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="text-label label-featured">Featured</span>
                                            Shop
                                            <b class="caret"></b>
                                        </a>
                                        <ul>
                                            <li>
                                                <span class="mega-menu-title">Shop Page</span>
                                                <ul>
                                                    <li><a href="shop.html">Shop Grid</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-list-col-3.html">Shop Column 3</a></li>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="poduct-details-sidebar.html">Product Details Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="mega-menu-title">Features</span>
                                                <ul>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="shop-compare.html">Shop Compare</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="mega-menu-title">Pages</span>
                                                <ul>
                                                    <li><a href="about.html">About </a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="mega-menu-title">Blog</span>
                                                <ul>
                                                    <li><a href="blog.html">Blog List</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="text-label label-hot">Hot</span>
                                            Pages
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404 Eror</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog <b class="caret"></b></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#">Purchase Theme</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                        <!--category-->
                        <div class="collapse-menu mt-0 pull-right">
                            <ul>
                                <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                                    <ul class="vm-dropdown d-hidden">
                                        <li><a href="#"><i class="fa fa-laptop"></i>Computer <b class="caret"></b></a>
                                            <ul class="mega-menu">
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Shop Page</span>
                                                    <ul>
                                                        <li><a href="#">Products Block Top</a></li>
                                                        <li><a href="#">Products Block Bottom</a></li>
                                                        <li><a href="#">Shop Grid 5 Column</a></li>
                                                        <li><a href="#">Shop List</a></li>
                                                        <li><a href="#">Shop width Normal</a></li>
                                                        <li><a href="#">Shop List Normal</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Featured</span>
                                                    <ul>
                                                        <li><a href="#">Thumbnails Left</a></li>
                                                        <li><a href="#">Thumbnails Right</a></li>
                                                        <li><a href="#">Thumbnails Bottom</a></li>
                                                        <li><a href="#">Thumbnails Full</a></li>
                                                        <li><a href="#">Single 2 Colums</a></li>
                                                        <li><a href="#">Tabs Content</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Shop Page</span>
                                                    <ul>
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">External Product</a></li>
                                                        <li><a href="#">My account</a></li>
                                                        <li><a href="#">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Features</span>
                                                    <ul>
                                                        <li><a href="#">Detail with Video</a></li>
                                                        <li><a href="#">Variations Swatches</a></li>
                                                        <li><a href="#">With Countdown Timer</a></li>
                                                        <li><a href="#">Catalog Mode</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-desktop"></i>TV & Smart box <b class="caret"></b></a>
                                            <ul class="mega-menu">
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Shop Page</span>
                                                    <ul>
                                                        <li><a href="#">Products Block Top</a></li>
                                                        <li><a href="#">Products Block Bottom</a></li>
                                                        <li><a href="#">Shop Grid 5 Column</a></li>
                                                        <li><a href="#">Shop List</a></li>
                                                        <li><a href="#">Shop width Normal</a></li>
                                                        <li><a href="#">Shop List Normal</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Featured</span>
                                                    <ul>
                                                        <li><a href="#">Thumbnails Left</a></li>
                                                        <li><a href="#">Thumbnails Right</a></li>
                                                        <li><a href="#">Thumbnails Bottom</a></li>
                                                        <li><a href="#">Thumbnails Full</a></li>
                                                        <li><a href="#">Single 2 Colums</a></li>
                                                        <li><a href="#">Detail with Accessories</a></li>
                                                        <li><a href="#">Tabs Content</a></li>
                                                        <li><a href="#">Accordion Tabs</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-camera"></i>Camera & Photography</a></li>
                                        <li><a href="#"><i class="fa fa-headphones"></i>Headphones</a></li>
                                        <li><a href="#"><i class="fa fa-music"></i>Musical Instruments</a></li>
                                        <li><a href="#"><i class="fa fa-mobile"></i>Smart phone & Tablets</a></li>
                                        <li><a href="#"><i class="fa fa-flash"></i>Accessories</a></li>
                                        <li><a href="#"><i class="fa fa-microphone"></i>Home Audio & Theater</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>Printer</a></li>
                                        <li><a href="#"><i class="fa fa-fax"></i>Fax machine</a></li>
                                        <li><a href="#"><i class="fa fa-spoon"></i>Household goods</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i>Watch</a></li>
                                        <li><a href="#"><i class="fa fa-random"></i>Other</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
