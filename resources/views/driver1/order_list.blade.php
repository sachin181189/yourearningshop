@include('driver/header');
@include('driver/sidebar');
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Order List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User name</th>
                                                <th>Order id</th>
                                                <th>Order date</th>
                                                <th>Sub Total</th>
                                                <th>Amount</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($order as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->fname }} {{ $value->lname }}</td>
                                                <td>{{ $value->order_id }}</td>
                                                <td>{{ $value->order_date }}</td>
                                                <td>{{ $value->sub_total }}</td>
                                                <td>{{ $value->grand_total }}</td>
                                                <td>
                                                @if ($value->order_status == 1)
                                                <button class="btn btn-success btn-sm">Confirmed</button>
                                                @elseif($value->order_status == 2)
                                                <button class="btn btn-danger btn-sm">Packed</button>
                                                @elseif($value->order_status == 3)
                                                <button class="btn btn-danger btn-sm">Shipped</button>
                                                @elseif($value->order_status == 4)
                                                <button class="btn btn-success btn-sm">Delivered</button>
                                                @elseif($value->order_status == 5)
                                                <button class="btn btn-danger btn-sm">Canceled</button>
                                                @elseif($value->order_status == 6)
                                                <button class="btn btn-danger btn-sm">Returned</button>
                                                @endif
                                                </td>
                                                <td><a title="View Order" href="driver-view-order/{{ $value->order_id }}"><i class="fa fa-eye"></i></a></td>
                                            </tr>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('driver/footer');
    