@include("header");

  <div class="container mt-5">
      <div class="row text-center">
          <div class="col-md-12 text-center">
          <h2>Our Store</h2>
          </div>
      </div>
        <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Store Id</th>
        <th>Store Name</th>
        <th>Address</th>
        <th>Pincode</th>
      </tr>
    </thead>
    <tbody>
            @foreach($store_list as $val)
      <tr>
        <td>{{$val->store_id}}</td>
        <td>{{$val->fullname}}</td>
        <td>{{$val->address}}</td>
        <td>{{$val->pincode}}</td>
      </tr>
          @endforeach
    </tbody>
  </table>
</div>
@include("footer");