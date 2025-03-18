@foreach($cdata['order'] as $value)
        @php 
            $id = $value['id'];
            $order_id = $value['order_id'];
            $coupon_code = $value['coupon_code'];
            $coupon_amount = $value['coupon_amount'];
            $shipping_charge = $value['shipping_charge'];
            $payment_id = $value['payment_id'];
            $sub_total = $value['sub_total'];
            $grand_total = $value['grand_total'];
            $order_status = $value['order_status'];
            $payment_status = $value['payment_status'];
            $fname = $value['fname'];
            $lname = $value['lname'];
            $payment_method = $value['payment_method'];
            $order_date = $value['order_date'];
            $assigned_driver = $value['assigned_driver'];
            $invoice_file = $value['invoice_file'];

            $sfname = $value['sfname'];
            $slname = $value['slname'];
            $email = $value['email'];
            $phone = $value['phone'];
            $address = $value['address'];
            $city = $value['city'];
            $state = $value['state'];
            $zip = $value['zip'];
            $addr_type = $value['addr_type'];
        @endphp
    @endforeach
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2 style="text-align:center;">Invoice No - {{$cdata['invoice_no']}}</h2>
<table>
	<tr>
		<td style="border: none !important;text-align:left;"><img src="{{asset('logo/logo.png')}}" style="width:200px;"></td>
		<td style="border: none !important;text-align:right;">FROM : Your Earning shop Pvt Ltd , 101 E 129th St,IN 226001, Lucknow- 226028</td>
	</tr>
</table>
<br>
<br>
<br>
<table>
<tr>
    <th>Name</th>
    <td>{{$fname}} {{$lname}}</td>
  </tr>
  <tr>
    <th>Order Id</th>
    <td>{{$order_id}}</td>
  </tr>
    <tr>
    <th>Coupon Code</th>
    <td>{{$coupon_code}}</td>
  </tr>
    <tr>
    <th>Coupon Amount</th>
    <td>{{$coupon_amount}}</td>
  </tr>
    <tr>
    <th>Shipping Charge</th>
    <td>{{$shipping_charge}}</td>
  </tr>
    <tr>
    <th>Payment Method</th>
    <td>{{$payment_method}}</td>
  </tr>
    <tr>
    <th>Payment Id</th>
    <td>{{$payment_id}}</td>
  </tr>
   <tr>
    <th>Sub Total</th>
    <td>{{$sub_total}}</td>
  </tr>
  <tr>
    <th>Grand Total</th>
    <td>{{$grand_total}}</td>
  </tr>
  <tr>
    <th>Bill To</th>
    <td>{{$sfname}} {{$slname}} , {{$email}} , {{$phone}} , {{$address}}
                                {{$city}} , {{$state}} , {{$zip}}</td>
  </tr>
</table>
<br>
<h2>Product Detail</h2>
<table>
  <tr>
    <th>SR No.</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Offer Price</th>
    <th>Qty</th>
    <th>Color</th>
    <th>Size</th>
  </tr>
  @php
	$i = 1;
	@endphp
	@foreach($cdata['product'] as $value1)
  <tr>
  	<td>{{ $i }}</td>
	<td>{{ $value1->product_name }}</td>
	<td>{{ $value1->product_price }}</td>
	<td>{{ $value1->offer_price }}</td>
	<td>{{ $value1->qty }}</td>
	<td>{{ $value1->color }}</td>
	<td>{{ $value1->size }}</td>
  </tr>
  @php
	$i++;
	@endphp
	@endforeach
</table>

</body>
</html>
