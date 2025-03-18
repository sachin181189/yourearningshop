@include("header")

  
  <!--<div class="shopping-cart-steps">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-12">-->
  <!--        <div class="cart-steps">-->
  <!--          <ul class="clearfix">-->
  <!--            <li class="active">-->
  <!--              <div class="inner">-->
  <!--                <span class="step">01</span> <span class="inner-step">Shopping Cart</span>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <div class="inner">-->
  <!--                <span class="step">02</span> <span class="inner-step">Checkout </span>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <div class="inner">-->
  <!--                <span class="step">03</span> <span class="inner-step">Order Completed </span>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--          </ul>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  
  <!--shopping-cart area-->
  <div class="shopping-cart-area mt-10">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="cart-table">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th><i class="fa fa-times" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody id="cart_list">

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row mt-40">
        <div class="col-lg-8">
          <div class="cart-box cart-coupon fix">
            <h5>Discount Codes</h5>
            <div class="cart-box-inner">
              <p>Enter your coupin if you have one</p>
              <div class="row">
                 <div class="col-lg-6">
                     <input type="text" id="input-coupon" style="width:100%;"/>
                 </div>
                 <div class="col-lg-3">
                     <a class="btn-common" id="button-coupon" onclick="applyCoupon();">Apply</a>
                 </div> 
                 <div class="col-lg-3">
                    <a class="btn-common btn-danger" id="remove-coupon" onclick="removeCoupon();" style="display:none;">Remove</a>
                 </div> 
              </div>
              
              
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cart-box cart-total">
            <h5>Cart Total</h5>
            <div class="cart-box-inner">
              <table class="table">
                <tr>
                  <td>SUB TOTAL:</td>
                  <td><span id="sub_total">₹0.00</span></td>
                </tr>
                <tr>
                  <td>COUPON:</td>
                  <td><span id="coupon_discount">₹0.00</span></td>
                </tr>
                <tr>
                  <td>GRAND TOTAL:</td>
                  <td><span id="grand_total">₹0.00</span></td>
                </tr>
              </table>
              <div class="proceed-checkout">
                <div class="col-lg-12">
                  <a href="checkout" class="btn-common">PROCEED TO CHECK OUT</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--shopping-cart end-->


@include("footer")
<script>
localStorage.removeItem("coupon_type");
localStorage.removeItem("coupon_val");
localStorage.removeItem("coupon_code");
localStorage.removeItem("coupon_code");
localStorage.removeItem("coupon_discount");
   function applyCoupon()
   {
       var coupon=$("#input-coupon").val();
      
       $.ajax({
             url: "{{ route('apply-coupon') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                "coupon_code":coupon
                },
             error: function() {
             },
             success: function(res) {
                 
                 if(res.length == 1)
                 {
                     var coupon_type = '';
                     var coupon_val = '';
                     var coupon_code = '';
                     $.each(res, function(key,val) { 
                         coupon_type = val.coupon_type;
                         coupon_val = val.coupon_val;
                         coupon_code = val.coupon_code;
                         localStorage.setItem("coupon_type", coupon_type);
                         localStorage.setItem("coupon_val", coupon_val);
                         localStorage.setItem("coupon_code", coupon_code);
                     });
                     getCartList(coupon_type,coupon_code,coupon_val);
                         
                 }
                 else
                 {
                     $.toast({heading: 'Error!',text: 'Invalid coupon',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                 }
             }
          });
   }
   function removeCoupon()
   {
        coupon_type = '';
        coupon_val = '';
        coupon_code = '';
        localStorage.setItem("coupon_type", '');
        localStorage.setItem("coupon_val", '');
        getCartList(coupon_type,coupon_code,coupon_val);
        localStorage.setItem("coupon_code", '');
   }
   function updateCart(product_id)
   {
      var qty = $("#cartqty"+product_id).val();
      $.ajax({
             url: "{{ route('update-cart') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "product_id":product_id,
                 "qty":qty
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {

                if(data == 'Saved')
                {
                    $.toast({heading: 'Success!',text: 'Product cart updated',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getCartList();

                }
                else if(data=='auth')
                {
                    $.toast({heading: 'Error!',text: 'Login required',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else
                {
                    $.toast({heading: 'Success!',text: 'Product cart updated',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getCartList();

                }

             }
          });
   }
</script>