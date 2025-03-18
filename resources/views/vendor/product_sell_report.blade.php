@include('vendor/header')
@include('vendor/sidebar')
<?php 
@$date = $_GET['date'];
?>
<style>
    .table th, .table thead th {
    font-weight: 700!important;
}
.table td, .table th
{
    padding:0.5rem!important;
}
</style>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Product Sell Report</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Sell Report</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form method="get" action="{{ route('product-sell-report') }}">
                    <div class="row">
                        <div class="col-3">
                            <input type="date" class="form-control" value="{{$date}}" name="date">
                        </div>
                        <div class="col-3">
                        <button class="btn btn-success">Filter</button>
                        <a class="btn btn-danger" href="{{ url('vendor/product-sell-report') }}">Reset</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 style="text-align: center;border-bottom: 1px solid lightgray;padding-bottom: 8px;">Product Sell Report</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero_config" id="zero_config">
                                        <thead>
                                            <tr>
                                                <th>SR.</th>
                                                <th>Product Name</th>
                                                <th>Total Sell Count</th>
                                                <th>Total Product Price</th>
                                                <th>Total Sell Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
    
                                        @foreach($sell_report as $st)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $st->product_name }}</td>
                                                <td>{{ $st->total_count }}</td>
                                                <td>{{ $st->total_product_price }}</td>
                                                <td>{{ $st->total_sell }}</td>
                                            </tr>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>
</div>
@include('vendor/footer') 