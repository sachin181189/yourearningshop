<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--slider-area start-->
	<div class="slider-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?php echo e(URL::asset('company_image/hero-bg.jpg')); ?>" alt="Los Angeles" style="width:100%;">
                          <div class="carousel-caption">
                              <!--<h2 style="color:#fff!important;">World’s first company only for women</h2>-->
                              <h2 style="color:#fff!important;">Networking Business with Online shopping.</h2>
                            </div>
                        </div>
                      </div>
                    </div>

                </div>
			</div>
		</div>
	</div>
	<!--slider-area end-->
	
	<div class="banner-area mt-10">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-lg-1"></div>
				<div class="col-lg-5">
					<div class="banner-md hover-effect">
						<img src="<?php echo e(URL::asset('company_image/mahila.PNG')); ?>" alt="" />
					</div>
				</div>
				<div class="col-lg-5">
					<div class="banner-md hover-effect">
						<img src="<?php echo e(URL::asset('landing_page_assets/assets/img/mission.png')); ?>" alt="" />
					</div>
				</div>
				<div class="col-lg-1"></div>
			</div>
	    </div>
	</div>
	
	<!--<div class="banner-area mt-10">-->
	<!--	<div class="container-fluid">-->
	<!--		<div class="row">-->
	<!--		    <div class="col-lg-1"></div>-->
	<!--			<div class="col-lg-5">-->
	<!--				<div class="banner-md hover-effect">-->
	<!--					<img src="<?php echo e(URL::asset('landing_page_assets/assets/img/mission_eng.png')); ?>" alt="" />-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-lg-5">-->
	<!--				<div class="banner-md hover-effect">-->
	<!--					<img src="<?php echo e(URL::asset('landing_page_assets/assets/img/mission_hindi.png')); ?>" alt="" />-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-lg-1"></div>-->
	<!--		</div>-->
	<!--    </div>-->
	<!--</div>-->
	
	<section id="services" class="services mt-5">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
          <h3>Company Videos</h3>
          <div style="text-align:right;"><a href="<?php echo e(URL::to('/videos')); ?>">View All</a></div>
        </div>

        <div class="row">
            
              <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box p-0">
                        <iframe height="250px" src="<?php echo e($vd->video_url); ?>"></iframe>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

      </div>
    </section>
    
    <section id="services" class="services mt-5">
      <div class="container-fluid" data-aos="fade-up">

        <div class="col-lg-12 pt-5 pb-5 bg-dark text-light">
  <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
    <div class="carousel-inner" role="listbox">
        <?php
        $i = 0;
        ?>
        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="carousel-item <?php if($i == 0): ?> active <?php endif; ?> text-center p-4">
            <blockquote class="blockquote text-center">
              <p class="mb-0"><i class="fa fa-quote-left"></i> <?php echo e(strip_tags($value->message)); ?> <i class="fa fa-quote-right"></i>
              </p>
              <footer class="blockquote-footer"><?php echo e($value->name); ?> <cite title="Source Title"><?php echo e($value->role); ?></cite></footer>
              
            </blockquote>
          </div>
      <?php
    $i++;
    ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <ol class="carousel-indicators">
        <?php
        $j = 0;
        ?>
        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li data-target="#client-testimonial-carousel" data-slide-to="<?php echo e($j); ?>" class="<?php if($i == 0): ?> active <?php endif; ?>"></li>
      <?php
    $j++;
    ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ol>
  </div>
</div>
    
      </div>
    </section>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yourearningshop\resources\views/home.blade.php ENDPATH**/ ?>