@include("header")
<style>
    .mb-image
    {
       border: 1px solid lightgray;
        margin-bottom: 20px; 
        width:100%;
    }
</style>
<div class="container">
  <ul class="breadcrumb">
      <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Brands</a></li>
    </ul>
  <div class="row">
    @foreach($brand as $brnd)
    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-6 col-6">
        <a href="{{URL::to('product-by-brand')}}/{{$brnd->slug}}"><img src="{{asset('brand_image')}}/{{$brnd->image}}" alt="{{$brnd->brand_name}}" class="img-responsive mb-image" /></a>
    </div>
    @endforeach
    
  </div>
</div>
@include("footer")