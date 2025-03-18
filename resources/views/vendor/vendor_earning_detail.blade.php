@include('vendor/header')
@include('vendor/sidebar')
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
                <h4 class="page-title">Delivery Earning Detail</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Delivery Earning Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 style="text-align: center;border-bottom: 1px solid lightgray;padding-bottom: 8px;">Delivery Partner Income</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero_config" id="zero_config">
                                        <thead>
                                            <tr>
                                                <th>SR.</th>
                                                <th>Month</th>
                                                <th>Year</th>
                                                <th>Deposit Money Income</th>
                                                <th>Sales Income</th>
                                                <th>Total</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
    
                                        @foreach($store_transaction as $st)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $st->month }}</td>
                                                <td>{{ $st->year }}</td>
                                                <td>{{ $st->deposit_money_percentage_income }}</td>
                                                <td>{{ $st->sales_percentage_income }}</td>
                                                <td>{{ $st->total_amount }}</td>
                                                <td>{{ $st->note }}</td>
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
</div>
@include('vendor/footer') 