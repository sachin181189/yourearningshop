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
      <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a> </li>
      <li><a href="#"> Our Product</a></li>
    </ul>
  <div class="row">
    @foreach($productlist as $p)
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-6 col-6">
        <img src="{{asset('our_product')}}/{{$p->image}}" alt="{{$p->title}}" class="img-responsive mb-image" />
    </div>
    @endforeach
    
  </div>
</div>
@include("footer")