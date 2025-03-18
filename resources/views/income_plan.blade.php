@include("header")
    @foreach($business_plan as $value)
        @php 
            $id = $value->id;
            $content = $value->content;
            $image1 = $value->image1;
            $image2 = $value->image2;
            $image3 = $value->image3;
            $image4 = $value->image4;
        @endphp
    @endforeach
<div class="container-fluid">
  <!--<div class="row">-->
  <!--    <div class="col-md-12">-->
  <!--        <img src="{{ URL::asset('/content_image/2.png' )}}" style="width:100%;">-->
  <!--    </div>-->
  <!--</div>-->
</div>
    <div class="container mt-5">
        {!! $content !!}
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6"><img src="{{ URL::asset('/business_plan' )}}/{{$image1}}" style="width:100%;"></div>
            <div class="col-md-6"><img src="{{ URL::asset('/business_plan/' )}}/{{$image2}}" style="width:100%;"></div>
            <div class="col-md-6"><img src="{{ URL::asset('/business_plan/' )}}/{{$image3}}" style="width:100%;"></div>
            <div class="col-md-6"><img src="{{ URL::asset('/business_plan/' )}}/{{$image4}}" style="width:100%;"></div>
        </div>
    </div>
@include("footer")