@include('header')
		<!--breadcrumb-area start-->
		<div class="breadcrumb-area mt-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
								<li><a href="#">Achivers Detail <i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--breadcrumb-area end-->
	</header>
	<!--header-area end-->
	
	<!--blog-details start-->
	<div class="shop-area blog-details-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					
				</div>
				@foreach($achivers_detail as $al)
				<div class="col-lg-6 text-center"style="border: 1px solid lightgray;box-shadow:0px 2px 5px 10px #83f4bc" >
					<div class="blog-details">
						@if($al->image == '')
						<a href="blog-detai.html"><img src="{{ URL::asset('/' )}}/default_user_image.png" alt="" style="width:50%;padding:15px;" /></a>
						@else
						<a href="blog-detai.html"><img src="{{ URL::asset('/user_image' )}}/{{ $al->image }}" alt="" style="width:50%;padding:15px;" /></a>
						@endif
						<div class="blog-title">
						    <h2>{{ $al->fname }}</h2>
							<a href="#" class="catlink">{{ $al->rank }}</a>
						</div>
						<p>{!! $al->about !!}</p></div>
				</div>
				@endforeach
				<div class="col-lg-3">
					
				</div>
			</div>
		</div>
	</div>
	<!--blog-details end-->
@include('footer')
