<?php 
    use App\Http\Controllers\Homecontroller;
    use App\Http\Controllers\Usercontroller;
    $mainmenu =Homecontroller::getMenu();
    $allcategory =Homecontroller::allCategory();
    $company = Usercontroller::getCompanyProfile();
?>
<style>
    .goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
}
li#google_translate_element{
    margin-top: 13px;
    margin-left: 10px;
}
.navbar a, .navbar a:focus
{
    font-size:14px!important;
}
</style>
<style>
    .float{
	position:fixed;
	width:60px;
    height: 60px;
    bottom: 73px;
    right: 8px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Your Earning Shop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('landing_page_assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('landing_page_assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('landing_page_assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('landing_page_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('landing_page_assets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('landing_page_assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('landing_page_assets/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('landing_page_assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.toast.css') }}">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('landing_page_assets/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('logo/logo.png') }}" alt="logo" style="width:100%;" /></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ URL::asset('landing_page_assets/assets/img/logo.png" alt') }}="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{URL::to('/shop')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{URL::to('company-detail')}}">Company Detail</a></li>
          <!--<li><a class="nav-link scrollto" href="{{URL::to('business-plan')}}">Business Plan</a></li>-->
          <li class="dropdown"><a href="#">Business Plan <i class="bi bi-chevron-down"></i></a>
			<ul>
				<li><a href="{{URL::to('royality-income-plan')}}">Free joining royalty income plan</a></li>
				<li><a href="{{URL::to('investment-plan')}}">Shop partner investment plan</a></li>
			</ul>
		  </li>
          <li><a class="nav-link scrollto" href="{{URL::to('our-store')}}">Our Shop</a></li>
          <li class="dropdown"><a href="#">Products <i class="bi bi-chevron-down"></i></a>
			<ul>
				<li><a href="{{URL::to('our-product')}}">Our Products</a></li>
				<li><a href="{{URL::to('all-brand')}}">Other Brands</a></li>
			</ul>
		  </li>
		  <li><a class="nav-link scrollto" href="{{URL::to('become-a-vendor')}}">Become a vendor</a></li>
		<!--<li><a class="nav-link scrollto " href="{{URL::to('about-us')}}">About Us</a></li>-->
		<li><a class="nav-link scrollto" href="{{URL::to('contact-us')}}">Contact Us</a></li>
		<li><a class="nav-link scrollto" href="{{URL::to('achivers-list')}}">Top Achivers</a></li>
        <li><a class="nav-link scrollto" href="{{URL::to('/shop')}}">Shopping</a></li>

                @if(session()->has('user_id'))
                <li class="dropdown"><a href="#"><span>{{Session::get('user_name')}}</span> <i class="bi bi-chevron-down"></i></a>
    				<ul>
    					<li><a href="{{URL::to('my-account')}}">My Account</a></li>
    					<li><a href="{{URL::to('shoping-list')}}">Shopping List</a></li>
    					<li><a href="{{URL::to('logout')}}">Logout</a></li>
    				</ul>
    			</li>
    			@else
    			<li class="dropdown"><a href="#"><span><i class="bi bi-person" style="font-size:14px;"></i></span> <i class="bi bi-chevron-down"></i></a>
    			 <ul>
    			<li><a href="{{URL::to('login')}}">Login</a></li>
    			<li><a href="{{URL::to('register')}}">Register</a></li>
    			</ul>
    			</li>
    			@endif
            <li id="google_translate_element"></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-12 col-lg-12 text-left">
          <h1>World’s first company only for women<span>.</span></h1>
        </div>
        <div class="col-xl-12 col-lg-12 text-right">
          <h2><b style="font-weight:800;font-size:35px;">Networking Business with Online shopping.</b></h2>
        </div>
      </div>

      <!--<div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">-->
      <!--  <div class="col-xl-3 col-md-4">-->
      <!--    <div class="icon-box">-->
      <!--      <i class="ri-store-line"></i>-->
      <!--      <h3><a href="">{{ $users }}</a></h3>-->
      <!--      <h3><a href="">Total Users</a></h3>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="col-xl-3 col-md-4">-->
      <!--    <div class="icon-box">-->
      <!--      <i class="ri-bar-chart-box-line"></i>-->
      <!--      <h3><a href="">{{ $brands }}</a></h3>-->
      <!--      <h3><a href="">Total Brands</a></h3>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="col-xl-3 col-md-4">-->
      <!--    <div class="icon-box">-->
      <!--      <i class="ri-calendar-todo-line"></i>-->
      <!--      <h3><a href="">{{ $vendors }}</a></h3>-->
      <!--      <h3><a href="">Total Shop Partners</a></h3>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="col-xl-3 col-md-4">-->
      <!--    <div class="icon-box">-->
      <!--      <i class="ri-paint-brush-line"></i>-->
      <!--      <h3><a href="">Magni Dolores</a></h3>-->
      <!--    </div>-->
      <!--  </div>-->
        <!--<div class="col-xl-2 col-md-4">-->
        <!--  <div class="icon-box">-->
        <!--    <i class="ri-database-2-line"></i>-->
        <!--    <h3><a href="">Nemos Enimade</a></h3>-->
        <!--  </div>-->
        <!--</div>-->
      <!--</div>-->

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ URL::asset('landing_page_assets/assets/img/mission.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
              <ul>
              <li><i class="ri-check-double-line"></i> Mission: Self-reliant person.</li>
              <li><i class="ri-check-double-line"></i> Goal: Our goal is to provide employment to every person in every district through small scale industries and domestic industries.</li>
              <li><i class="ri-check-double-line"></i> Company Profile: Our Company is Your Earning Shop Trading Private Limited with its Registered Office at District Bahraich and Corporate Office at Arjun Ganj Lucknow.</li>
            </ul>
            <p>
              The company's work is to provide life-useful household items to the people through small scale industries and to provide employment to all, in which jobs, domestic industry, commission on company promotion, participation in business etc.
            Company Project: Packaging of food item like vegetable fruit etc. Manufacture of dairy products like milk, cheese, curd, butter etc. Manufacture and packaging of all types of ground spices like turmeric, coriander, chillies, garam masala, atta, maida, semolina, gram flour, rava etc. and all types of standing spices, all types of pulses, all types of coarse cereals, macaroni, noodles Packaging of dry fruits etc.</p>
            <p>
              Bakery products for the manufacture and packaging of various types of biscuits, namkeens, pickles, etc.
                The objective of the company is mainly to connect all person and make them income through all person.
                Providing employment and empowering all person by connecting them with the company.
            </p>
            <p><b>Rajesh Kumar Srivastava</b></p>
            <p>director</p>
            <p>Your Earning Shop Trading Private Limited
  Corporate Office :
  Arjunganj, Behind Bank Of Baroda
  Sultanpur Road
  Lucknow
  pin code 226002</p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <!--<section id="clients" class="clients">-->
    <!--  <div class="container" data-aos="zoom-in">-->

    <!--    <div class="clients-slider swiper">-->
    <!--      <div class="swiper-wrapper align-items-center">-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1627143944.png') }}" class="img-fluid" alt=""></div>-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1627143880.png') }}" class="img-fluid" alt=""></div>-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1628964726.png') }}" class="img-fluid" alt=""></div>-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1627144220.png') }}" class="img-fluid" alt=""></div>-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1628964530.png') }}" class="img-fluid" alt=""></div>-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1627144220.png') }}" class="img-fluid" alt=""></div>-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1627144346.png') }}" class="img-fluid" alt=""></div>-->
    <!--        <div class="swiper-slide"><img src="{{ URL::asset('brand_image/1627143767.png') }}" class="img-fluid" alt=""></div>-->
    <!--      </div>-->
    <!--      <div class="swiper-pagination"></div>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{ URL::asset('landing_page_assets/assets/img/mission_eng.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ URL::asset('landing_page_assets/assets/img/mission_hindi.png') }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Company Videos</p>
          <div style="text-align:right;"><a href="{{ URL::to('/videos') }}">View All</a></div>
        </div>

        <div class="row">
            
              @foreach($videos as $vd)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box p-0">
                        <iframe height="250px" src="{{$vd->video_url}}"></iframe>
                    </div>
                </div>
            @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">-->
    <!--  <div class="container" data-aos="zoom-in">-->

    <!--    <div class="text-center">-->
    <!--      <h3>Call To Action</h3>-->
    <!--      <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
    <!--      <a class="cta-btn" href="#">Call To Action</a>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    <!-- End Cta Section -->

    <!-- ======= Counts Section ======= -->
    
    <!--    <section class="features">-->
    <!--  <div class="container" data-aos="fade-up">-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">-->
              
    <!--          <img src="{{ URL::asset('landing_page_assets/assets/img/lak_eng.png') }}" class="img-fluid" alt="">-->
    <!--      </div>-->
    <!--      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">-->
    <!--          <img src="{{ URL::asset('landing_page_assets/assets/img/lak_hindi.png') }}" class="img-fluid" alt="">-->
    <!--      </div>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    <!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            
            @foreach($testimonial as $value)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <!--<img src="{{ $value->image_url }}" class="testimonial-img" alt="">-->
                <h3>{{ $value->name }}</h3>
                <h4>{{ $value->role }}</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ strip_tags($value->message) }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('logo/logo.png') }}" alt="logo" style="width:79%;" /></a>
              <p>{{$company->address}}</p>
                <p>Phone: {{$company->phone}}</p>
                <p>Email: {{$company->email}}</p>
              <div class="social-links mt-3">
                <a href="{{$company->twitter_link}}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$company->facebook_link}}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$company->linkdin_link}}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><a href="{{URL::to('/about-us')}}">About Us</a></li>
                <li><a href="{{URL::to('/contact-us')}}">Contact Us</a></li>
                <li><a href="{{URL::to('/privacy-policy')}}">Privacy Policy</a></li>
                <li><a href="{{URL::to('/term-condition')}}">Terms & Conditions</a></li>
                <li><a href="{{URL::to('/company-detail')}}">Company Detail</a></li>
                <li><a href="{{URL::to('/become-a-vendor')}}">Become a vendor</a></li>
                <li><a href="{{URL::to('/investment-plan')}}">Register Store</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Find It Fast</h4>
            <ul>
                <li><a href="#">Laptop & Computers</a></li>
                <li><a href="#">Smart Phone & Tablets</a></li>
                <li><a href="#">TV & Audio</a></li>
                <li><a href="#">Cameras & Photography</a></li>
                <li><a href="#">Gadgets</a></li>
                <li><a href="#">Car Electronic & GP5</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe our newsletter gor get notification about information discount.</p>
            <form action="" method="post">
              <input type="email" name="email" id="nemail"><button onclick="save_newsletter();" type="button" class="btn btn-info">Subscribe</button>
            </form>

          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://api.whatsapp.com/send?phone=8381818319&text=Hello, how can i help you" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ URL::asset('landing_page_assets/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ URL::asset('landing_page_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('landing_page_assets/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ URL::asset('landing_page_assets/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ URL::asset('landing_page_assets/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ URL::asset('landing_page_assets/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ URL::asset('landing_page_assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/toast.script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.toast.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('landing_page_assets/assets/js/main.js')}}"></script>
<script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: "hi,en"}, 'google_translate_element');
}

  function save_newsletter()
  {
    var email = $("#nemail").val();
    if(email == '')
    {
        $.toast({heading: 'Error!',text: 'Please provide email',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
        return false;
    }
    $.ajax({
        url: "{{ route('save-newsletter') }}",
        type: 'POST',
        data: {
        "_token": "{{ csrf_token() }}",
        'email':email
        },
        error: function() {
        },
        success: function(res) {
            if(res=='saved')
            {
                $("#nemail").val('');
                $.toast({heading: 'Success!',text: 'Subscribed successfully',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
            }
            else if(res=='already_exist')
            {
                $.toast({heading: 'Error!',text: 'Email already subscribed',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
            }
            else
            {
                $.toast({heading: 'Error!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});

            }
        }
    });
  }
</script>
</body>

</html>