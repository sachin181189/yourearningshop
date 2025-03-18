@include("header");
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <img src="{{ URL::asset('/content_image/8.png' )}}" style="width:100%;">
      </div>
  </div>
</div>
  <div class="container mt-5">
    @foreach($content as $val)
        {!! $val->content !!}
    @endforeach
</div>
@include("footer");