@include('header')
	<!--slider-area start-->
	<div class="slider-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
                      <!-- Indicators -->
                      <div id="demo" class="carousel slide" data-ride="carousel">
                      <ul class="carousel-indicators">
                         @php $i=0; @endphp
                        @foreach($sliderlist as $value)
                        <li data-target="#demo" data-slide-to="{{$i}}" class="@if($i == 0) active @endif"></li>
                        @php $i++; @endphp
                        @endforeach
                      </ul>
                      
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                          @php $j=0; @endphp
                          @foreach($sliderlist as $value)
                        <div class="carousel-item @if($j == 0) active @endif">
                          <img src="{{ URL::asset('/slider_image' )}}/{{ $value->slider_image }}" alt="Los Angeles" height="400" style="width:100%;">
                        </div>
                        @php $j++; @endphp
                        @endforeach
                      </div>
                      
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<!--slider-area end-->
	
	<!--store-supports-area start-->
	<div class="store-supports-area">
		<div class="container-fluid br-bottom">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-loan2.jpg" alt="" />
						</div>
						<div class="support-text">
							<strong>Free Delivery</strong>
							<p>For all order over Rs.999/-</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-liquidity2.jpg" alt="" />
						</div>
						<div class="support-text">
							<strong>Return Policy</strong>
							<p>If goods have Problem</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-credit-card2.jpg" alt="" />
						</div>
						<div class="support-text">
							<strong>Secure Payment</strong>
							<p>100% secure payment</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-support2.jpg" alt="" />
						</div>
						<div class="support-text">
							<strong>24/7 Support</strong>
							<p>Dedicated support</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--store-supports-area end-->
	
	<!--products-area start-->
	<div class="products-area mt-40">
		<div class="container-fluid">
			<div class="row">
				<!--<div class="col-lg-3 mt-sm-35">-->
				<!--	<div class="sidebar">-->
						<!--product-deal-->
				<!--		<div class="sidebar-single">-->
				<!--			<div class="section-title">-->
				<!--				<h3>Deal off the week</h3>-->
				<!--			</div>-->
				<!--			<div class="row product-deals">-->
								<!--single-deal-->
				<!--				@foreach($deal_of_the_week as $dod)-->
				<!--				<div class="col-lg-12">-->
				<!--					<div class="product-single product-deal">-->
				<!--						<div class="product-title">-->
				<!--							<small><a href="#">{{$dod->category}}</a></small>-->
				<!--							<h4><a href="{{URL::to('product-detail')}}/{{$dod->slug}}">{{mb_strimwidth($dod->product_name, 0, 30, "...")}}</a></h4>-->
				<!--						</div>-->
				<!--						<div class="product-thumb">-->
				<!--							<a href="{{URL::to('product-detail')}}/{{$dod->slug}}"><img src="{{ URL::asset('/product_image' )}}/{{ $dod->product_image }}" alt="" /></a>-->
				<!--							<div class="downsale">{{number_format(100 * (($dod->price-$dod->offer_price) / $dod->price),2)}}% off</div>-->
				<!--						</div>-->
				<!--						<div class="product-price-rating">-->
				<!--							<div class="pull-left">-->
				<!--								<span>₹{{number_format($dod->price,2)}}</span>-->
				<!--							</div>-->
				<!--							<div class="pull-right">-->
				<!--								<i class="fa fa-star-o"></i>-->
				<!--								<i class="fa fa-star-o"></i>-->
				<!--								<i class="fa fa-star-o"></i>-->
				<!--								<i class="fa fa-star-o"></i>-->
				<!--								<i class="fa fa-star-o"></i>-->
				<!--							</div>-->
				<!--						</div>-->
				<!--					</div>-->
				<!--				</div>-->
				<!--				@endforeach-->
								<!--single-deal-->
				<!--			</div>-->
				<!--		</div>-->
						<!--product-ad-->
				<!--		<div class="sidebar-single mt-30 d-none d-xl-block">-->
				<!--			<a href="#"><img src="assets/images/ad/1.jpg" alt="" /></a>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
				<div class="col-lg-12 mt-sm-35">
					<!--New Arrival-->
					<div class="products-tab">
						<div class="product-nav-tabs">
							<ul class="nav nav-tabs">
								<li><a class="active">New Arrivals</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="new-arrivals" class="tab-pane fade in show active">
								<div class="row products-three cv-visible">
								    @foreach($latest as $lat)
									<div class="col-lg-2">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">{{$lat->category}}</a></small>
												<h4><a href="{{URL::to('product-detail')}}/{{$lat->slug}}" title="{{$lat->product_name}}">{{mb_strimwidth($lat->product_name, 0, 22, "...")}}</a></h4>
											</div>
											<div class="product-thumb">
												<a href="{{URL::to('product-detail')}}/{{$lat->slug}}"><img src="{{ URL::asset('/product_image' )}}/{{ $lat->product_image }}" alt="" /></a>
												@if($lat->offer_price != $lat->price)
												<div class="downsale">{{number_format(100 * (($lat->price-$lat->offer_price) / $lat->price),2)}}% off</div>
												@endif
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹{{number_format($lat->offer_price,2)}}</span>
												@if($lat->offer_price != $lat->price)
												<del>₹{{number_format($lat->price,2)}}</del>
												@endif
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart({{$lat->id}},this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										<!--single-product-->
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
					</div>
					
					<!--Trending-->
					
					<div class="products-tab">
						<div class="product-nav-tabs">
							<ul class="nav nav-tabs">
								<li><a class="active" data-toggle="tab" href="#on-sale">Trending</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="on-sale" class="tab-pane fade in show active">
								<div class="row products-three cv-visible">
								    @foreach($trending as $tren)
									<div class="col-lg-4">
										<!--single-product-->
										
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">{{$tren->category}}</a></small>
												<h4><a href="{{URL::to('product-detail')}}/{{$tren->slug}}" title="{{$tren->product_name}}">{{mb_strimwidth($tren->product_name, 0, 22, "...")}}</a></h4>
											</div>
											<div class="product-thumb">
												<a href="{{URL::to('product-detail')}}/{{$tren->slug}}"><img src="{{ URL::asset('/product_image' )}}/{{ $tren->product_image }}" alt="" /></a>
												@if($tren->offer_price != $tren->price)
												<div class="downsale">{{number_format(100 * (($tren->price-$tren->offer_price) / $tren->price),2)}}% off</div>
												@endif
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹{{number_format($tren->offer_price,2)}}</span>
												@if($tren->offer_price != $tren->price)
												<del>₹{{number_format($tren->price,2)}}</del>
												@endif
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart({{$tren->id}},this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										
										<!--single-product-->
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					
	<div class="banner-area mt-10">
		<div class="container-fluid">
			<div class="row">
			    @php $b=0; @endphp
			    @foreach($banner as $ba)
			    @if($b==2)
				<div class="col-lg-12">
					<div class="banner-md hover-effect">
						<img src="{{ URL::asset('/banner_image' )}}/{{ $ba->banner_image }}" alt="" style="height:400px;" />
					</div>
				</div>
				@endif
				@php $b++; @endphp
				@endforeach
			</div>
		</div>
	</div>
					<!--Featured-->
					
					<div class="products-tab">
						<div class="product-nav-tabs">
							<ul class="nav nav-tabs">
								<li><a data-toggle="tab" class="active" href="#best-rated">Featured</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="best-rated" class="tab-pane fade in show active">
								<div class="row products-three cv-visible">
								     @foreach($featured as $fet)
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">{{$fet->category}}</a></small>
												<h4><a href="{{URL::to('product-detail')}}/{{$fet->slug}}" title="{{$fet->product_name}}">{{mb_strimwidth($fet->product_name, 0, 22, "...")}}</a></h4>
											</div>
											<div class="product-thumb">
												<a href="{{URL::to('product-detail')}}/{{$fet->slug}}"><img src="{{ URL::asset('/product_image' )}}/{{ $fet->product_image }}" alt="" /></a>
												@if($fet->offer_price != $fet->price)
												<div class="downsale">{{number_format(100 * (($fet->price-$fet->offer_price) / $fet->price),2)}}% off</div>
												@endif
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹{{number_format($fet->offer_price,2)}}</span>
												@if($fet->offer_price != $fet->price)
												<del>₹{{number_format($fet->price,2)}}</del>
												@endif
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart({{$fet->id}},this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										<!--single-product-->
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--products-area end-->
	<!--mt-minus-100-->
	<!--top-categories-area start-->
	<div class="top-categories-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="product-categories">
						<div class="row">
							<div class="col-lg-12">
								<div class="section-title">
									<h3>Top Categories</h3>
								</div>
							</div>
						</div>
						<div class="row products-three mt-30">
						    @foreach($category as $cats)
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="{{URL::to('product-list')}}/{{$cats['slug']}}"><img src="{{ URL::asset('/category_image' )}}/{{ $cats['image_icon'] }}" alt="" /></a>
									<h4><a href="{{URL::to('product-list')}}/{{$cats['slug']}}" title="{{$cats['category']}}">{{mb_strimwidth($cats['category'], 0, 20, "...")}}</a></h4>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--top-categories-area end-->
	
<div class="products-area mt-40">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-12 mt-sm-35">
					<!--New Arrival-->
					<div class="products-tab">
						<div class="product-nav-tabs">
							<ul class="nav nav-tabs">
								<li><a class="active">Best Seller</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade in show active">
								<div class="row products-three cv-visible">
								    @foreach($best_seller as $lat)
									<div class="col-lg-2">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">{{$lat->category}}</a></small>
												<h4><a href="{{URL::to('product-detail')}}/{{$lat->slug}}" title="{{$lat->product_name}}">{{mb_strimwidth($lat->product_name, 0, 22, "...")}}</a></h4>
											</div>
											<div class="product-thumb">
												<a href="{{URL::to('product-detail')}}/{{$lat->slug}}"><img src="{{ URL::asset('/product_image' )}}/{{ $lat->product_image }}" alt="" /></a>
												@if($lat->offer_price != $lat->price)
												<div class="downsale">{{number_format(100 * (($lat->price-$lat->offer_price) / $lat->price),2)}}% off</div>
												@endif
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹{{number_format($lat->offer_price,2)}}</span>
												@if($lat->offer_price != $lat->price)
												<del>₹{{number_format($lat->price,2)}}</del>
												@endif
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart({{$lat->id}},this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										<!--single-product-->
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<!--banner-area-start-->
	<div class="banner-area mt-10">
		<div class="container-fluid">
			<div class="row">
			    @php $l=0; @endphp
			    @foreach($banner as $ban)
			    @if($l<2)
				<div class="col-lg-6">
					<div class="banner-md hover-effect">
						<img src="{{ URL::asset('/banner_image' )}}/{{ $ban->banner_image }}" alt="" />
					</div>
				</div>
				@endif
				@php $l++; @endphp
				@endforeach
			</div>
		</div>
	</div>
	<!--banner-area-end-->
	
	<!--recently-viewed-products-start-->
	<div class="recent-viewed-products mt-40">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title">
								<h3>Recently Viewed Products</h3>
							</div>
						</div>
					</div>
					<div class="row mlr-minus-12">
					    @foreach($recentviewed as $rv)
						<div class="col-lg-3" style="margin-bottom:4em;">
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">{{$rv->category}}</a></small>
												<h4><a href="{{URL::to('product-detail')}}/{{$rv->slug}}">{{mb_strimwidth($rv->product_name, 0, 30, "...")}}</a></h4>
											</div>
											<div class="product-thumb">
												<a href="{{URL::to('product-detail')}}/{{$rv->slug}}"><img src="{{ URL::asset('/product_image' )}}/{{ $rv->product_image }}" alt="" /></a>
												@if($rv->offer_price != $rv->price)
												<div class="downsale">{{number_format(100 * (($rv->price-$rv->offer_price) / $rv->price),2)}}% off</div>
												@endif
											</div>
											<div class="product-price-rating">
												<span>₹{{number_format($rv->offer_price,2)}}</span>
												@if($rv->offer_price != $rv->price)
												<del>₹{{number_format($rv->price,2)}}</del>
												@endif
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart({{$rv->id}},this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
									</div>
							@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--recently-viewed-products-end-->
	
	
	<!--brands-area end-->
    <input type="hidden" id="hidden_user_id" value="<?php echo Session::get('user_id'); ?>">
    
@include('footer')

	@if(session()->has('user_id'))
        <script>
            $( document ).ready(function() {
                monthlyCommission();
            });
            
            function monthlyCommission()
            {
                var user_id = $('#hidden_user_id').val();
                $.ajax({
                    url: "{{ route('monthly-commission') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        user_id:user_id,
                        },
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                    }
                });
            }   
        </script>
    @else 
        
    @endif

<script>
function destroyCarousel() {
    if ($('#cateproduct').hasClass('slick-initialized')) {
        $('#cateproduct').slick('unslick');
    }
}


    function applySlider() {
    $('#cateproduct').slick({
    dots: true,
	list:false,
	autoplay: true,
	autoplaySpeed: 5000,
	infinite: true,
	speed: 700,
	slidesToShow: 4,
	slidesToScroll: 4,
	adaptiveHeight: true,
	arrows:false,
	prevArrow: '<i class="fa fa-angle-left"></i>',
	nextArrow: '<i class="fa fa-angle-right"></i>',
	responsive: [
		{
			breakpoint: 1400,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 4
			}
		},
		{
			breakpoint: 993,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 361,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		}
	]
         });
  }
  
 var firstcat = $("#firstcategory").val();
 getProductByCat(firstcat);
function getProductByCat(cate_slug)
   {
      $.ajax({
             url: "{{ route('get-category-product') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "cate_slug":cate_slug
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(res) {
                 console.log(res);
                var producthtml = ``;
                if(res.length > 0)
                {
                    destroyCarousel();
                    $.each(res, function(key,val) {
                        if(val.product_name.length > 30)
                        {
                            var product_name = val.product_name.substring(0,30)+"...";
                        }
                        else
                        {
                            var product_name = val.product_name;
                        }
                    producthtml += `<div class="col-lg-3">
							<div class="product-single">
								<div class="product-title">
									<small>`+val.category+`</small>
									<h4><a href="{{URL::to('product-detail')}}/`+val.slug+`">`+product_name+` </a></h4>
								</div>
								<div class="product-thumb">
									<a href="{{URL::to('product-detail')}}/`+val.slug+`"><img src="{{ URL::asset('/product_image' )}}/`+val.product_image+`" alt="" /></a>
									<div class="downsale">`+parseFloat(((val.price-val.offer_price) / val.price)*100).toFixed(2)+`% off</div>
								</div>
								<div class="product-price-rating">
									<span>₹`+parseFloat(val.offer_price).toFixed(2)+`</span>
									<del>₹`+parseFloat(val.price).toFixed(2)+`</del>
								</div>
							</div>
						</div>`;
                    });
        
                    $("#cateproduct").html(producthtml);
                    applySlider();
                    
                }
                else
                {

                }

             }
          });
   }
   </script>
</script>