<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .single-blog
    {
        border: 1px solid lightgray;
        text-align: center;
    }
    .blog-thumb img {
    height: 200px;
    width: 200px;
    border-radius: 50%;
    padding:15px;
}
</style>
		<div class="breadcrumb-area mt-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
								<li><a href="#">Achivers List</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--breadcrumb-area end-->
	</header>
	<!--header-area end-->
	
	<!--products-area start-->
	<div class="shop-area">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12 text-center"><h3>Our top achivers</h3></div>
			    
			    <?php $__currentLoopData = $achivers_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-3">
					<div class="single-blog">
						<div class="blog-thumb">
						    <?php if($al->image == ''): ?>
							<a href="<?php echo e(URL::to('/achivers-detail/')); ?>/<?php echo e($al->id); ?>"><img src="<?php echo e(URL::asset('/' )); ?>/default_user_image.png" alt="" /></a>
							<?php else: ?>
							<a href="<?php echo e(URL::to('/achivers-detail/')); ?>/<?php echo e($al->id); ?>"><img src="<?php echo e(URL::asset('/user_image' )); ?>/<?php echo e($al->image); ?>" alt="" /></a>
							<?php endif; ?>
							
						</div>
						<div class="blog-desc mt-20">
							<a href="#" class="catlink"><?php echo e($al->rank); ?></a>
							<h4><a href="<?php echo e(URL::to('/achivers-detail/')); ?>/<?php echo e($al->id); ?>"><?php echo e($al->fname); ?></a></h4>
						</div>
					</div>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
	<!--products-area end-->
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/achivers_list.blade.php ENDPATH**/ ?>