<?php 
    use App\Http\Controllers\Homecontroller;
    $mainmenu =Homecontroller::getMenu();
    $allcategory =Homecontroller::allCategory();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Your Earning Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="icon.png">
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
    <!-- blue css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/colors/blue.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.toast.css') }}">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f3cbac87c7c450012e9213e&product=inline-share-buttons' async='async'></script>
</head>
<style>
a.VIpgJd-ZVi9od-l4eHX-hSRGPd {
    display: none;
}
    .goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
    margin-top:25px;
}
ul#google_translate_element{
    margin-top: 10px;
}

@media only screen and (min-width: 768px) {
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  }
}
.mini-cart ul li{
    margin-right:0px!important;
}
.goog-te-gadget .goog-te-combo
{
    padding: 6px;
}
ul.vm-dropdown
{
    overflow-y: scroll!important;
    max-height: unset!important;
    height: 500px!important;
    overflow-y: scroll!important;
    overflow-x: hidden!important;
}
::-webkit-scrollbar {
       width: 5px;
       background: linear-gradient(45deg, #80f9b7, #9abdeb);
    }
</style>
<body>
	<!--header-area start-->
	<header class="header-area">
	    <div class="row">
	        <div class="col-md-10">
		        <div class="desktop-header">
			<div class="header-bottom">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="logo">
								<a href="{{ URL::to('/') }}"><img src="{{ URL::asset('logo/logo.png') }}" alt="logo" style="width:79%;" /></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="search-box style-2">
								<input type="text" placeholder="What do you need?" id="search_key" class="search_key" />
								<button onclick="searchProduct();">Search</button>
							</div>
						</div>
						<!--<div class="col-lg-2 text-center">-->
						<!--    <div id="google_translate_element"></div>-->
						<!--</div>-->
						<div class="col-lg-3 text-center">
							<div class="mini-cart">
								<ul>
									@if(session()->has('user_id'))
                            		<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{Session::get('referral_code')}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{URL::to('my-account')}}">My Account</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="{{URL::to('shoping-list')}}">Shopping List</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="{{URL::to('logout')}}">Logout</a>
                                    </div>
                                  </li>
                                  @else
                                  <li><a href="{{URL::to('my-account')}}" title="My Account"><i class="fa fa-user-o fa-2x"></i></a></li>
                                  @endif
									<li><a href="{{URL::to('wishlist')}}" class="wwcount"><i class="icon_heart_alt"></i></a></li>
									<li><a href="{{URL::to('view-cart')}}" class="minicart-icon" id="cart-total"><i class="icon_bag_alt"></i>₹0.00</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		        <div class="sticker mobile-header">
			<div class="container">
				<!--logo and cart-->
				<div class="row align-items-center">
					<div class="col-sm-4 col-6">
						<div class="logo">
							<a href="{{URL::to('/')}}"><img src="{{ URL::asset('logo/logo.png') }}" alt="logo" /></a>
						</div>
					</div>
					<div class="col-sm-8 col-6">
						<div class="mini-cart text-right">
							<ul>
								<li><a href="{{URL::to('my-account')}}" title="Track Your Order"><i class="ti-truck"></i></a></li>
									<li><a href="{{URL::to('wishlist')}}" class="wwcount"><i class="icon_heart_alt"></i></a></li>
									<li><a href="{{URL::to('view-cart')}}" class="minicart-icon" id="cart-total-mobile"><i class="icon_bag_alt"></i>₹0.00</a>
					
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--search-box-->
				<div class="row align-items-center">
					<div class="col-sm-12">
						<div class="search-box mt-sm-15">
							<!--<select>-->
							<!--	<option>All Categories</option>-->
							<!--	@foreach($allcategory as $cat)-->
							<!--	<option>{{$cat['category']}}</option>-->
       <!--                         @endforeach-->
							<!--</select>-->
							<input type="text" placeholder="What do you need?" id="search_key1" />
							<button onclick="searchProduct1();">Search</button>
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
                                      <li><a  href="{{URL::to('/shop')}}">Home</a></li>
                                      <li><a href="{{URL::to('company-detail')}}">Company Detail</a></li>
                                      <!--<li><a href="{{URL::to('business-plan')}}">Business Plan</a></li>-->
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Business Plan
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                          <a class="dropdown-item" href="{{URL::to('royality-income-plan')}}">Free joining royalty income plan</a>
                                          <a class="dropdown-item" href="{{URL::to('investment-plan')}}">Shop partner investment plan</a>
                                        </div>
                                      </li>
                                      <li><a href="{{URL::to('our-store')}}">Our Shop</a></li>
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Products
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{URL::to('our-product')}}">Our Products</a>
                                          <a class="dropdown-item" href="{{URL::to('all-brand')}}">Other Brands</a>
                                        </div>
                                      </li>
                                       <li><a href="{{URL::to('become-a-vendor')}}">Become a vendor</a></li>
                                	   <!--<li><a  href="{{URL::to('about-us')}}">About Us</a></li>-->
                                	   <li><a  href="{{URL::to('contact-us')}}">Contact Us</a></li>
                                	   <li><a  href="{{URL::to('achivers-list')}}">Top Achivers</a></li>
                                       <li><a  href="{{URL::to('/shop')}}">Shopping</a></li>
								</ul>
							</nav>
						</div>
						
						<!--category-->
						<div class="collapse-menu mt-0 pull-right">
							<ul>
								<li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Category</span></a>
									<ul class="vm-dropdown">
									    @foreach($allcategory as $cat1)
                                            @if ($cat1['is_subcategory'] == 1)
										<li><a href="{{URL::to('product-list')}}/{{$cat1['slug']}}"><i class="fa fa-list"></i>{{$cat1['category']}} <b class="caret"></b></a>
											<ul class="mega-menu">
												<li class="megamenu-single">
													<ul>
													    @foreach($cat1['subcategory'] as $subcat1)
														<li><a href="{{URL::to('product-list')}}/{{$cat1['slug']}}/{{$subcat1['slug']}}">{{$subcat1['subcategory']}}</a></li>
														@endforeach
													</ul>
												</li>
											</ul>
										</li>
										@else
                                        <li><a href="{{URL::to('product-list')}}/{{$cat1['slug']}}"><i class="fa fa-camera"></i>{{$cat1['category']}}</a></li>
                                        @endif
                                        @endforeach
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		    </div>
		    <div class="col-md-2 text-center">
		        <div id="google_translate_element"></div>
		    </div>
		</div>
		
	</header>
	
		<!--mainmenu-area start-->
	<div class="sticker mainmenu-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 pr-0 d-none-sm">
					<div class="collapse-menu style-2 mt-0">
						<ul>
							<li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Category</span></a>
								<ul class="vm-dropdown" style="display:none;">
								     @foreach($allcategory as $cat1)
                                            @if ($cat1['is_subcategory'] == 1)
									<li><a href="{{URL::to('product-list')}}/{{$cat1['slug']}}"><i class="fa fa-list"></i>{{$cat1['category']}} <b class="caret"></b></a>
										<ul class="mega-menu">
											<li class="megamenu-single">
												<ul>
												    @foreach($cat1['subcategory'] as $subcat)
													<li><a href="{{URL::to('product-list')}}/{{$cat1['slug']}}/{{$subcat['slug']}}">{{$subcat['subcategory']}}</a></li>
													@endforeach
												</ul>
											</li>
										</ul>
									</li>
									@else
                                        <li><a href="{{URL::to('product-list')}}/{{$cat1['slug']}}"><i class="fa fa-camera"></i>{{$cat1['category']}}</a></li>
                                    @endif
                                    @endforeach
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-10 pl-0">
					<div class="slider-top">
						<div class="row align-items-center">
							<div class="col-xl-12">
								<div class="mainmenu style-2">  
									<nav>
										<ul>
									<li><a  href="{{URL::to('/shop')}}">Home</a></li>
                                      <li><a href="{{URL::to('company-detail')}}">Company Detail</a></li>
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Business Plan
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                          <a class="dropdown-item" href="{{URL::to('royality-income-plan')}}">Free joining royalty income plan</a>
                                          <a class="dropdown-item" href="{{URL::to('investment-plan')}}">Shop partner investment plan</a>
                                        </div>
                                      </li>
                                      <li><a href="{{URL::to('our-store')}}">Our Shop</a></li>
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Products
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{URL::to('our-product')}}">Our Products</a>
                                          <a class="dropdown-item" href="{{URL::to('all-brand')}}">Other Brands</a>
                                        </div>
                                      </li>
                                       <li><a href="{{URL::to('become-a-vendor')}}">Become a vendor</a></li>
                                	   <li><a  href="{{URL::to('contact-us')}}">Contact Us</a></li>
                                	   <li><a  href="{{URL::to('achivers-list')}}">Top Achivers</a></li>
                                       <li><a  href="{{URL::to('/shop')}}">Shopping</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--mainmenu-area end-->
	<!--header-area end-->