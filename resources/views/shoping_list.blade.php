@include("header")
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
                  <th>Price</th>
                  <th>Total</th>
                  <th><i class="fa fa-times" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody id="shoping_list">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row mt-40">
        <div class="col-lg-8">
        </div>
        <div class="col-lg-4">
          <div class="cart-box cart-total">
            <h5>Total</h5>
            <div class="cart-box-inner">
              <table class="table">
                <tr>
                  <td>SUB TOTAL:</td>
                  <td><span id="s_sub_total">₹0.00</span></td>
                </tr>
                <tr>
                  <td>COUPON:</td>
                  <td><span id="s_coupon_discount">₹0.00</span></td>
                </tr>
                <tr>
                  <td>GRAND TOTAL:</td>
                  <td><span id="s_grand_total">₹0.00</span></td>
                </tr>
              </table>
              <div class="proceed-checkout">
                <div class="col-lg-12">
                  <a class="btn-common" href="{{ route('bulk-add-to-cart') }}">Add All To Cart</a>
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
getShopingList();
   function addToCartFromShopingList(product_id)
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