@include('header')
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
			    
			    @foreach($achivers_list as $al)
				<div class="col-lg-3">
					<div class="single-blog">
						<div class="blog-thumb">
						    @if($al->image == '')
							<a href="{{URL::to('/achivers-detail/')}}/{{ $al->id }}"><img src="{{ URL::asset('/' )}}/default_user_image.png" alt="" /></a>
							@else
							<a href="{{URL::to('/achivers-detail/')}}/{{ $al->id }}"><img src="{{ URL::asset('/user_image' )}}/{{ $al->image }}" alt="" /></a>
							@endif
							
						</div>
						<div class="blog-desc mt-20">
							<a href="#" class="catlink">{{$al->rank}}</a>
							<h4><a href="{{URL::to('/achivers-detail/')}}/{{ $al->id }}">{{$al->fname}}</a></h4>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!--products-area end-->
@include('footer')
	