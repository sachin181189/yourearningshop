<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--slider-area start-->
	<div class="slider-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
                      <!-- Indicators -->
                      <div id="demo" class="carousel slide" data-ride="carousel">
                      <ul class="carousel-indicators">
                         <?php $i=0; ?>
                        <?php $__currentLoopData = $sliderlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li data-target="#demo" data-slide-to="<?php echo e($i); ?>" class="<?php if($i == 0): ?> active <?php endif; ?>"></li>
                        <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                      
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                          <?php $j=0; ?>
                          <?php $__currentLoopData = $sliderlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($j == 0): ?> active <?php endif; ?>">
                          <img src="<?php echo e(URL::asset('/slider_image' )); ?>/<?php echo e($value->slider_image); ?>" alt="Los Angeles" height="400" style="width:100%;">
                        </div>
                        <?php $j++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
				<!--				<?php $__currentLoopData = $deal_of_the_week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
				<!--				<div class="col-lg-12">-->
				<!--					<div class="product-single product-deal">-->
				<!--						<div class="product-title">-->
				<!--							<small><a href="#"><?php echo e($dod->category); ?></a></small>-->
				<!--							<h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($dod->slug); ?>"><?php echo e(mb_strimwidth($dod->product_name, 0, 30, "...")); ?></a></h4>-->
				<!--						</div>-->
				<!--						<div class="product-thumb">-->
				<!--							<a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($dod->slug); ?>"><img src="<?php echo e(URL::asset('/product_image' )); ?>/<?php echo e($dod->product_image); ?>" alt="" /></a>-->
				<!--							<div class="downsale"><?php echo e(number_format(100 * (($dod->price-$dod->offer_price) / $dod->price),2)); ?>% off</div>-->
				<!--						</div>-->
				<!--						<div class="product-price-rating">-->
				<!--							<div class="pull-left">-->
				<!--								<span>₹<?php echo e(number_format($dod->price,2)); ?></span>-->
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
				<!--				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
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
								    <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-lg-2">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#"><?php echo e($lat->category); ?></a></small>
												<h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($lat->slug); ?>" title="<?php echo e($lat->product_name); ?>"><?php echo e(mb_strimwidth($lat->product_name, 0, 22, "...")); ?></a></h4>
											</div>
											<div class="product-thumb">
												<a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($lat->slug); ?>"><img src="<?php echo e(URL::asset('/product_image' )); ?>/<?php echo e($lat->product_image); ?>" alt="" /></a>
												<?php if($lat->offer_price != $lat->price): ?>
												<div class="downsale"><?php echo e(number_format(100 * (($lat->price-$lat->offer_price) / $lat->price),2)); ?>% off</div>
												<?php endif; ?>
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹<?php echo e(number_format($lat->offer_price,2)); ?></span>
												<?php if($lat->offer_price != $lat->price): ?>
												<del>₹<?php echo e(number_format($lat->price,2)); ?></del>
												<?php endif; ?>
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(<?php echo e($lat->id); ?>,this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										<!--single-product-->
									</div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
								    <?php $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tren): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-lg-4">
										<!--single-product-->
										
										<div class="product-single">
											<div class="product-title">
												<small><a href="#"><?php echo e($tren->category); ?></a></small>
												<h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($tren->slug); ?>" title="<?php echo e($tren->product_name); ?>"><?php echo e(mb_strimwidth($tren->product_name, 0, 22, "...")); ?></a></h4>
											</div>
											<div class="product-thumb">
												<a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($tren->slug); ?>"><img src="<?php echo e(URL::asset('/product_image' )); ?>/<?php echo e($tren->product_image); ?>" alt="" /></a>
												<?php if($tren->offer_price != $tren->price): ?>
												<div class="downsale"><?php echo e(number_format(100 * (($tren->price-$tren->offer_price) / $tren->price),2)); ?>% off</div>
												<?php endif; ?>
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹<?php echo e(number_format($tren->offer_price,2)); ?></span>
												<?php if($tren->offer_price != $tren->price): ?>
												<del>₹<?php echo e(number_format($tren->price,2)); ?></del>
												<?php endif; ?>
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(<?php echo e($tren->id); ?>,this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										
										<!--single-product-->
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
						</div>
					</div>
					
	<div class="banner-area mt-10">
		<div class="container-fluid">
			<div class="row">
			    <?php $b=0; ?>
			    <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <?php if($b==2): ?>
				<div class="col-lg-12">
					<div class="banner-md hover-effect">
						<img src="<?php echo e(URL::asset('/banner_image' )); ?>/<?php echo e($ba->banner_image); ?>" alt="" style="height:400px;" />
					</div>
				</div>
				<?php endif; ?>
				<?php $b++; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
								     <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-lg-4">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#"><?php echo e($fet->category); ?></a></small>
												<h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($fet->slug); ?>" title="<?php echo e($fet->product_name); ?>"><?php echo e(mb_strimwidth($fet->product_name, 0, 22, "...")); ?></a></h4>
											</div>
											<div class="product-thumb">
												<a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($fet->slug); ?>"><img src="<?php echo e(URL::asset('/product_image' )); ?>/<?php echo e($fet->product_image); ?>" alt="" /></a>
												<?php if($fet->offer_price != $fet->price): ?>
												<div class="downsale"><?php echo e(number_format(100 * (($fet->price-$fet->offer_price) / $fet->price),2)); ?>% off</div>
												<?php endif; ?>
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹<?php echo e(number_format($fet->offer_price,2)); ?></span>
												<?php if($fet->offer_price != $fet->price): ?>
												<del>₹<?php echo e(number_format($fet->price,2)); ?></del>
												<?php endif; ?>
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(<?php echo e($fet->id); ?>,this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										<!--single-product-->
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
						    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-3">
								<div class="single-product-cat">
									<a href="<?php echo e(URL::to('product-list')); ?>/<?php echo e($cats['slug']); ?>"><img src="<?php echo e(URL::asset('/category_image' )); ?>/<?php echo e($cats['image_icon']); ?>" alt="" /></a>
									<h4><a href="<?php echo e(URL::to('product-list')); ?>/<?php echo e($cats['slug']); ?>" title="<?php echo e($cats['category']); ?>"><?php echo e(mb_strimwidth($cats['category'], 0, 20, "...")); ?></a></h4>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
								    <?php $__currentLoopData = $best_seller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-lg-2">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#"><?php echo e($lat->category); ?></a></small>
												<h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($lat->slug); ?>" title="<?php echo e($lat->product_name); ?>"><?php echo e(mb_strimwidth($lat->product_name, 0, 22, "...")); ?></a></h4>
											</div>
											<div class="product-thumb">
												<a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($lat->slug); ?>"><img src="<?php echo e(URL::asset('/product_image' )); ?>/<?php echo e($lat->product_image); ?>" alt="" /></a>
												<?php if($lat->offer_price != $lat->price): ?>
												<div class="downsale"><?php echo e(number_format(100 * (($lat->price-$lat->offer_price) / $lat->price),2)); ?>% off</div>
												<?php endif; ?>
												<!--<div class="product-quick-view">-->
												<!--	<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
												<!--</div>-->
											</div>
											<div class="product-price-rating">
												<span>₹<?php echo e(number_format($lat->offer_price,2)); ?></span>
												<?php if($lat->offer_price != $lat->price): ?>
												<del>₹<?php echo e(number_format($lat->price,2)); ?></del>
												<?php endif; ?>
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(<?php echo e($lat->id); ?>,this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
										<!--single-product-->
									</div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
			    <?php $l=0; ?>
			    <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <?php if($l<2): ?>
				<div class="col-lg-6">
					<div class="banner-md hover-effect">
						<img src="<?php echo e(URL::asset('/banner_image' )); ?>/<?php echo e($ban->banner_image); ?>" alt="" />
					</div>
				</div>
				<?php endif; ?>
				<?php $l++; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
					    <?php $__currentLoopData = $recentviewed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-3" style="margin-bottom:4em;">
										<div class="product-single">
											<div class="product-title">
												<small><a href="#"><?php echo e($rv->category); ?></a></small>
												<h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($rv->slug); ?>"><?php echo e(mb_strimwidth($rv->product_name, 0, 30, "...")); ?></a></h4>
											</div>
											<div class="product-thumb">
												<a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($rv->slug); ?>"><img src="<?php echo e(URL::asset('/product_image' )); ?>/<?php echo e($rv->product_image); ?>" alt="" /></a>
												<?php if($rv->offer_price != $rv->price): ?>
												<div class="downsale"><?php echo e(number_format(100 * (($rv->price-$rv->offer_price) / $rv->price),2)); ?>% off</div>
												<?php endif; ?>
											</div>
											<div class="product-price-rating">
												<span>₹<?php echo e(number_format($rv->offer_price,2)); ?></span>
												<?php if($rv->offer_price != $rv->price): ?>
												<del>₹<?php echo e(number_format($rv->price,2)); ?></del>
												<?php endif; ?>
											</div>
											<div class="product-action">
											<!--	<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
												<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(<?php echo e($rv->id); ?>,this);">Add to Cart</a>
											<!--	<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
											</div>
										</div>
									</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--recently-viewed-products-end-->
	
	
	<!--brands-area end-->
    <input type="hidden" id="hidden_user_id" value="<?php echo Session::get('user_id'); ?>">
    
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php if(session()->has('user_id')): ?>
        <script>
            $( document ).ready(function() {
                monthlyCommission();
            });
            
            function monthlyCommission()
            {
                var user_id = $('#hidden_user_id').val();
                $.ajax({
                    url: "<?php echo e(route('monthly-commission')); ?>",
                    type: 'POST',
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        user_id:user_id,
                        },
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                    }
                });
            }   
        </script>
    <?php else: ?> 
        
    <?php endif; ?>

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
             url: "<?php echo e(route('get-category-product')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
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
									<h4><a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`">`+product_name+` </a></h4>
								</div>
								<div class="product-thumb">
									<a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`"><img src="<?php echo e(URL::asset('/product_image' )); ?>/`+val.product_image+`" alt="" /></a>
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
</script><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/index.blade.php ENDPATH**/ ?>