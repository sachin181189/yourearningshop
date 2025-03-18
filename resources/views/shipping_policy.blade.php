@include("header");
<div class="container">
  <ul class="breadcrumb">
      <li><a href="/"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Shipping Policy</a></li>
    </ul>
</div>
  <div class="container mt-5">
    @foreach($content as $val)
        {{strip_tags($val->content)}}
    @endforeach
  </div>
@include("footer");