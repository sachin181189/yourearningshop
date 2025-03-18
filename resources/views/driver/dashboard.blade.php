@include('driver/header');
@include('driver/sidebar');

        <div class="page-wrapper">
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Driver Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Driver Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="{{URL::to('driver/driver-order-list')}}"><div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">{{$assigned_order}}</h1>
                                    <h6 class="text-white">Total Pending Order</h6>
                                </div>
                            </div>
                            </a>
                        </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="{{URL::to('driver/order-list')}}">
                    <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white">{{$delivered_order}}</h1>
                                <h6 class="text-white">Total Delivered Order</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <img src="{{asset('qrcode.jpg')}}">
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                <div class="col-12">
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
                </div> -->
            </div>
@include('driver/footer');
<!-- <script>
window.onload = function () {
    monthlyReport();
}

    function monthlyReport()
    {
      $.ajax({
        url: "{{ route('vendor-monthly-report') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}"
                },
             error: function() {
             },
             success: function(data) {
                var staticsArr=[];
                    $.each(data, function(key,val) {
                            var obj = 
                            {
                                x: new Date(2021, val.order_month), y: val.grand_total 
                            }
                            staticsArr.push(obj);
                        });
                    var options = {
                        animationEnabled: true,  
                        title:{
                            text: "Monthly Sales - 2021"
                        },
                        axisX: {
                            valueFormatString: "MMM"
                        },
                        axisY: {
                            title: "Sales (in INR)",
                            prefix: "₹"
                        },
                        data: [{
                            yValueFormatString: "$#,###",
                            xValueFormatString: "MMMM",
                            type: "spline",
                            dataPoints: staticsArr
	            }]
    };
$("#chartContainer").CanvasJSChart(options);
             }
          });
        }
</script> -->