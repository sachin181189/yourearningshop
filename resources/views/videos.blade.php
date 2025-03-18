@include("header")
<div class="container-fluid" style="border-bottom: 1px solid lightgray;">
  <div class="row">
      <div class="col-md-12">
          <h4>Company Videos</h4>
      </div>
  </div>
</div>
  <div class="container mt-5">
  <div class="row">
    @foreach($content as $val)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box p-0">
                <iframe height="250px" src="{{$val->video_url}}"></iframe>
            </div>
        </div>
    @endforeach
  </div>
</div>
@include("footer")