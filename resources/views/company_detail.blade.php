@include("header")
<div class="container-fluid" style="border-bottom: 1px solid lightgray;">
  <div class="row">
      <div class="col-md-12 text-center mt-5">
          <h4>Company Documents</h4>
      </div>
      <hr>
  </div>
</div>
  <div class="container mt-5">
  <div class="row text-center mb-5" style="border:1px solid lightgray;padding:10px;">
      <div class="col-md-12">
          <b>Founder Name : Rajesh Kumar Srivastava</b>
      </div>
            <div class="col-md-12">
          <b>YourEarningShop Trading Pvt. Ltd.</b>
      </div>
            <div class="col-md-12">
          <b>Atma Nirbhar Mahila Foundation </b>
      </div>
  </div>
  <div class="row">
    @foreach($content as $val)
    <div class="col-md-4">
        <div class="row text-center">
            <div class="col-md-12">
                <img src="{{ URL::asset('/document' )}}/{{ $val->document }}" style="width:100%;">
            </div>
            <div class="col-md-12">
                <p style="font-size: 18px;font-weight: 400;">{{ $val->document_name }}</p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
@include("footer")