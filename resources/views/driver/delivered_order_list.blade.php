@include('driver/header');
@include('driver/sidebar');
<style>
    .card-body {
    padding: 0.8rem!important;
}
</style>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Order List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Delivered Order List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @if(count($order) > 0)
                    @foreach($order as $value)
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12" style="font-weight: bold;margin-bottom: 10px;"><a href="driver-view-order/{{ $value->order_id }}">View Order</a></div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 col-6"><h4>{{ $value->fname }} {{ $value->lname }}</h4></div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 col-6"><h4>₹{{ $value->grand_total }}</h4></div>
                                </div>
                                <p>
                                {{$value->sfname}} {{$value->slname}} , {{$value->address}}
                                {{$value->city}} , {{$value->state}} , {{$value->zip}},{{$value->phone}}
                                </p>
                                
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row text-center">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12">
                                    <h4>No order available</h4>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
@include('driver/footer');
