@include("header");
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <img src="{{ URL::asset('/content_image/5.png' )}}" style="width:100%;">
      </div>
  </div>
</div>
  <div class="container">
    @foreach($content as $val)
        {!! $val->content !!}
    @endforeach
</div>
@include("footer");