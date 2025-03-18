 @include('header');
 <div class="wishlist-area d-md-block mb-100" style="margin-bottom:50px">
  <div class="container-wrapper pl-15 pr-15">
    <section class="order-complete-area pattern-bg pt-50 pb-50">
      <div class="container">
        <div class="row justify-content-center" style="margin:20px 0px">
          <div class="col-xl-12 col-lg-12" style="background:#f6f6f6;padding:50px 0px">
            <div class="order-complete-bg">
              <div class="order-complete-content text-center p-4">
                  <p>{{ Session::get('grand_total') }}</p>
                <div class="check" style="margin-bottom: 25px">
                    <img src="{{ URL::asset('/web/image/check.png' )}}" alt="">
                </div>
          <button id="rzp-button1" class="btn btn-success btn-lg">Pay</button>

          
                <h4 style="color: #333;">Get answers to all <a href="#"><sup>Questions</sup></a> you might have</h4>
              </div>
            </div>
          </div>
          <!-- <div class="col-xl-1 col-lg-1"></div> -->
        </div>
      </div>
    </section>

  </div>
</div>
 @include('footer');
 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click','#rzp-button1',function(e){
            e.preventDefault();
            var amount = {{ Session::get('grand_total') }}
            var total_amount = amount * 100;
            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}", // Enter the Key ID generated from the Dashboard
                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": "YES",
                "description": "YES",
                "image": "https://www.bugerro.com/yourearningshop.com/public/logo/logo.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    $.ajax({
                        type:'POST',
                        url:"{{ route('razorpay.payment.store') }}",
                        data:{
                            razorpay_payment_id:response.razorpay_payment_id,
                            "_token": "{{ csrf_token() }}",
                            
                        },
                        success:function(res){
                            if(res == true)
                            {
                                location.href="{{ route('order-success') }}";
                            }
                            else
                            {
                                location.href="{{ route('order-failed') }}";
                            }
                            // $('.success-message').text(data.success);
                            // $('.success-alert').fadeIn('slow', function(){
                            //   $('.success-alert').delay(5000).fadeOut(); 
                            // });
                            // $('.amount').val('');
                        }
                    });
                },
                "prefill": {
                    "name": "Mehul Bagda",
                    "email": "mehul.bagda@example.com",
                    "contact": "9650266972"
                },
                "notes": {
                    "address": "test test"
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script>