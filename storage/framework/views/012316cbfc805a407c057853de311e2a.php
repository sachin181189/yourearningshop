<?php 
    use App\Http\Controllers\Usercontroller;
    $company = Usercontroller::getCompanyProfile();
?>
<style>
    .float{
	position:fixed;
	width:60px;
    height: 60px;
    bottom: 112px;
    right: 8px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
a#scrollUp {
    right: 10px!important;
}
</style>
    <!--footer-area start-->
    <footer class="footer-area mt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="company-info">
                        <img src="<?php echo e(URL::asset('logo/logo.png')); ?>" alt="logo" style="width:50%;" />
                        <p><?php echo e($company->address); ?></p>
                        <p>Phone: <?php echo e($company->phone); ?></p>
                        <p>Email: <?php echo e($company->email); ?></p>
                        <p>Copyright 2022 &copy; YES. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fooer-widget">
                        <h4>Find It Fast</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Laptop & Computers</a></li>
                                <li><a href="#">Smart Phone & Tablets</a></li>
                                <li><a href="#">TV & Audio</a></li>
                                <li><a href="#">Cameras & Photography</a></li>
                                <li><a href="#">Gadgets</a></li>
                                <li><a href="#">Car Electronic & GP5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3 mt-sm-45">
                    <div class="fooer-widget">
                        <h4>Information</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="<?php echo e(URL::to('/about-us')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(URL::to('/contact-us')); ?>">Contact Us</a></li>
                                <li><a href="<?php echo e(URL::to('/company-detail')); ?>">Company Detail</a></li>
                                <li><a href="<?php echo e(URL::to('/privacy-policy')); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo e(URL::to('/term-condition')); ?>">Terms & Conditions</a></li>
                                <li><a href="<?php echo e(URL::to('become-a-vendor')); ?>">Become a vendor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3 mt-sm-45">
                    <div class="fooer-widget">
                        <h4>Customer Care</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Returns / Exchange</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="<?php echo e(URL::to('investment-plan')); ?>">Register Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-45">
                    <div class="footer-widget">
                        <div class="subscribe-form">
                            <h3>Sign Up to <strong>Newsletter</strong></h3>
                            <p>Subscribe our newsletter gor get notification about information discount.</p>
                            <input type="email" placeholder="Your email address" id="nemail" />
                            <button onclick="save_newsletter();">Subscribe</button>
                        </div>
                        <div class="social-icons style-2">
                            <strong>GET IN TOUCH !</strong>
                            <a href="<?php echo e($company->facebook_link); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo e($company->twitter_link); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo e($company->linkdin_link); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <!--<a href="#"><i class="fa fa-youtube"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->
    <a href="https://api.whatsapp.com/send?phone=8381818319&text=Hello, how can i help you" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    

    <!-- modernizr js -->
    <script src="<?php echo e(URL::asset('assets/js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
    <!-- jquery-3.3.1 version -->
    <script src="<?php echo e(URL::asset('assets/js/vendor/jquery-3.2.1.min.js')); ?>"></script>
    <!-- bootstra.min js -->
    <script src="<?php echo e(URL::asset('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- mmenu js -->
    <script src="<?php echo e(URL::asset('assets/js/jquery.mmenu.js')); ?>"></script>
    <!-- easing js -->
    <script src="<?php echo e(URL::asset('assets/js/jquery.easing.min.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('assets/js/perfect-scrollbar.min.js')); ?>"></script>
    <!---slick-js-->
    <script src="<?php echo e(URL::asset('assets/js/slick.min.js')); ?>"></script>
    <!---letteranimation-js-->
    <script src="<?php echo e(URL::asset('assets/js/letteranimation.min.js')); ?>"></script>
    <!-- jquery-ui js -->
    <script src="<?php echo e(URL::asset('assets/js/jquery-ui.min.js')); ?>"></script>
    <!-- jquery.countdown js -->
    <script src="<?php echo e(URL::asset('assets/js/jquery.countdown.min.js')); ?>"></script>
    <!-- venobox js -->
    <script src="<?php echo e(URL::asset('assets/js/venobox.min.js')); ?>"></script>
    <!-- plugins js -->
    <script src="<?php echo e(URL::asset('assets/js/plugins.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('assets/js/main.js')); ?>"></script>
    <!-- main js -->
    <script src="<?php echo e(URL::asset('assets/js/toast.script.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/jquery.toast.js')); ?>"></script>
</body>
</html>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABQF4WxVVqkPOFfEQkZet90NpveVISj_k&amp;libraries=places"></script>
<script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: "hi,en"}, 'google_translate_element');
}

</script>
<script>
    getCartList();
   function moveToCart(product_id,cart_variant1='',cart_variant2='',wid)
   {   
       var qty=1;
      $.ajax({
             url: "<?php echo e(route('add-to-cart')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                 "product_id":product_id,
                 "qty":qty,
                 "cart_variant1":cart_variant1,
                 "cart_variant2":cart_variant2,
                 "tb_type":0
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(res) {
                if(res.type == 'max_stock')
                {
                    $.toast({heading: 'Error!',text: 'Stock not available.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type == 'min_qty')
                {
                    $.toast({heading: 'Error!',text: 'Minimum '+res.qty+' qty required.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='max_qty')
                {
                    $.toast({heading: 'Error!',text: 'Purchase qty exceeded .Maximum '+res.qty+' qty allowed.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='update')
                {
                    $.toast({heading: 'Success!',text: 'Product added to cart.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    removeFromWishlist(wid,1);
                    getCartList();
                }
                else if(res.type=='saved')
                {
                    $.toast({heading: 'Success!',text: 'Product added to cart.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    removeFromWishlist(wid,1);
                    getWishList();
                }
                else if(res.type=='error')
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    

                }

             }
          });
   }
   function addToCart(product_id,cart_variant1='',cart_variant2='',type)
   {   
       if(type == 1)
       {
           if(cart_variant1 == '')
           {
               cart_variant1 = $("#cart_variant1").val();
           }
           if(cart_variant2 == '')
           {
               cart_variant2 = $("#cart_variant2").val();
           }
           var tb_type = $("#tb_type").val();
           var qty = $("#input-quantity").val();
       }
       else
       {
           var qty = 1;
       }
       if(qty == 0)
       {
            $.toast({heading: 'Error!',text: 'Qty must be greater than 0.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
       }
        // var datas = {
        //         "_token": "<?php echo e(csrf_token()); ?>",
        //          "product_id":product_id,
        //          "qty":qty,
        //          "cart_variant1":cart_variant1,
        //          "cart_variant2":cart_variant2,
        //          "tb_type":tb_type
        //         };
      $.ajax({
             url: "<?php echo e(route('add-to-cart')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                 "product_id":product_id,
                 "qty":qty,
                 "cart_variant1":cart_variant1,
                 "cart_variant2":cart_variant2,
                 "tb_type":tb_type
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(res) {
                if(res.type == 'max_stock')
                {
                    $.toast({heading: 'Error!',text: 'Stock not available.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type == 'min_qty')
                {
                    $.toast({heading: 'Error!',text: 'Minimum '+res.qty+' qty required.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='max_qty')
                {
                    $.toast({heading: 'Error!',text: 'Purchase qty exceeded .Maximum '+res.qty+' qty allowed.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='update')
                {
                    $.toast({heading: 'Success!',text: 'Cart qty updated.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getCartList();
                }
                else if(res.type=='saved')
                {
                    $.toast({heading: 'Success!',text: 'Product added to cart.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getCartList();
                }
                else if(res.type=='error')
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='auth')
                {
                    // $.toast({heading: 'Error!',text: 'Please login before proceed.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    location.href="<?php echo e(URL::to('login')); ?>";
                }
                else
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    

                }

             }
          });
   }
   function thumbnailAddToCart(product_id,e)
   {   
      $.ajax({
             url: "<?php echo e(route('thumbnail-add-to-cart')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                 "product_id":product_id,
                 "tb_type":0
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(res) {
                if(res.type == 'max_stock')
                {
                    $.toast({heading: 'Error!',text: 'Stock not available.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type == 'min_qty')
                {
                    $.toast({heading: 'Error!',text: 'Minimum '+res.qty+' qty required.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='max_qty')
                {
                    $.toast({heading: 'Error!',text: 'Purchase qty exceeded .Maximum '+res.qty+' qty allowed.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='update')
                {
                    $.toast({heading: 'Success!',text: 'Cart qty updated.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getCartList();
                }
                else if(res.type=='saved')
                {
                    $(e).text('Added').attr('disabled','disabled');
                    $.toast({heading: 'Success!',text: 'Product added to cart.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getCartList();
                }
                else if(res.type=='error')
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='auth')
                {
                    // $.toast({heading: 'Error!',text: 'Please login before proceed.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    location.href="<?php echo e(URL::to('login')); ?>";
                }
                else
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    

                }

             }
          });
   }
   
  function addToWishlist(product_id)
   {   
      var qty = 1;   
      $.ajax({
             url: "<?php echo e(route('add-to-wishlist')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                 "product_id":product_id
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {

                if(data == 'Saved')
                {
                    $.toast({heading: 'Success!',text: 'Product added to wishlist',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getWishList();

                }
                else if(data=='removed')
                {
                    $.toast({heading: 'Success!',text: 'Product removed from wishlist',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getWishList();
                }
                else if(data=='auth')
                {
                    location.href="<?php echo e(URL::to('login')); ?>";
                    // $.toast({heading: 'Error!',text: 'Login required',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                   

                }

             }
          });
   }
   getWishList();
   function getWishList()
   {
      $.ajax({
             url: "<?php echo e(route('get-wishlist')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>"
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(wishlistdata) {
                 createWishListHtml(wishlistdata);
                 $("#wcount").text("("+wishlistdata.length+")")
             }
          });
   }
    function createWishListHtml(wishlistdata)
   {
       console.log(wishlistdata);
        var wishlisthtml = ``;
        if(wishlistdata.length > 0){
        $.each(wishlistdata, function(key,val) { 
            if(val.counts == 0)
            {
                var action_button = `<a onclick="moveToCart(`+val.product_id+`,'`+val.variant_value1+`','`+val.variant_value2+`',`+val.id+`);" style="cursor:pointer;color:#fff!important;" class="btn btn-success btn-sm">Move to cart</a>`;
            }
            else
            {
                var action_button = `<a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`" style="cursor:pointer;" class="btn btn-success btn-sm">Check Available Option</a>`;
            }
            wishlisthtml += `<tr>
                        <td class="text-center"><a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`"><img class="img-thumbnail" title="`+val.product_name+`" alt="`+val.product_name+`" src="public/product_image/`+val.product_image+`" style="width:100px;"></a></td>
                        <td class="text-left"><a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`">`+val.product_name+`</a></td>
                        <td class="text-center">₹`+parseInt(val.offer_price).toFixed(2)+`</td>
                        <td class="text-center">₹`+parseInt(val.price).toFixed(2)+`</td> 
                        <td class="text-center">
                        `+action_button+`
                        <a onclick="removeFromWishlist(`+val.id+`);" style="cursor:pointer;color:#fff!important;" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>`;
            });
        }
        else
        {
            wishlisthtml += `<tr><td colspan="5" class="text-center">No data available</td></tr>`;
        }
        
        $("#wishlist_list").html(wishlisthtml);
        
        if(wishlistdata.length == 0)
        {
            var whtml = `<i class="icon_heart_alt"></i>`;
        }
        else
        {
            var whtml = `<i class="icon_heart_alt"></i><span class="wcount">`+wishlistdata.length+`</span>`;
        }
        $(".wwcount").html(whtml);
        
        
   }
   function removeFromWishlist(wid,type=0)
   {
        $.ajax({
             url: "<?php echo e(route('remove-wishlist')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'wid':wid
                },
             error: function() {
             },
             success: function(res) {
                if(res=='removed')
                {
                    if(type==0)
                    {
                    $.toast({heading: 'Success!',text: 'Removed from wishlist',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    }
                    getWishList();
                }
                else
                {
                    if(type==0)
                    {
                    $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    }

                }
             }
          });
   }
   function getCartList(coupon_type='',coupon_code='',coupon_val='')
   {
      $.ajax({
             url: "<?php echo e(route('get-cart')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>"
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(cartdata) {
            //   createHeaderCartListHtml(cartdata,coupon_type,coupon_code,coupon_val);
              createCartListHtml(cartdata,coupon_type,coupon_code,coupon_val);
             }
          });
   }
   
   function changeCartQty(product_id,type)
   {
       var cartQty = $("#cartqty"+product_id).val();
       if(type == 1)
       {
           if(cartQty != 1)
           {
               $("#cartqty"+product_id).val(parseInt(cartQty)-1);
              updateCart(product_id);
           }
       }
       else if(type == 2)
       {
           $("#cartqty"+product_id).val(parseInt(cartQty)+1);
          updateCart(product_id);
       }
       
   }
   function createCartListHtml(cartdata,coupon_type,coupon_code,coupon_val)
   {
        var carthtml = ``;
        var qty=0;
        var price=0;
        $.each(cartdata, function(key,val) { 
            qty = parseInt(qty)+parseInt(val.qty);
            price = parseInt(price)+parseInt(val.offer_price*val.qty);
            carthtml += `<tr>
                        <td><a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`"><img class="img-thumbnail" title="`+val.product_name+`" alt="`+val.product_name+`" src="public/product_image/`+val.product_image+`" style="width:100px;"></a></td>
                        <td class="pl-0"><a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`">`+val.product_name+`</a></td>
                        <td class="pl-0">
                        <div style="max-width: 130px;" class="input-group btn-block">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" title="" data-toggle="tooltip" type="button" data-original-title="Update" onclick="changeCartQty(`+val.product_id+`,1);" style="border-radius:0;">-</button>
                            </span>
                            <input type="text" class="form-control quantity" size="1" value="`+val.qty+`" name="quantity" id="cartqty`+val.product_id+`" style="text-align:center;" disabled>
                            <span class="input-group-btn">
                            <button class="btn btn-primary" title="" data-toggle="tooltip" type="button" data-original-title="Update" onclick="changeCartQty(`+val.product_id+`,2);" style="border-radius:0;">+</button>
                            </span>
                        </div></td>
                        <td class="pl-0">₹`+parseInt(val.offer_price).toFixed(2)+`</td>
                        <td class="pl-0">₹`+parseInt(val.offer_price*val.qty).toFixed(2)+`</td>
                        <td class="pl-0">
                        <button  class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove" onclick="removeFromCart(`+val.id+`);"><i class="fa fa-times-circle"></i></button>
                        <button  class="btn btn-success" title="" data-toggle="tooltip" type="button" data-original-title="Wishlist" onclick="addToWishlist(`+val.product_id+`);"><i class="fa fa-heart"></i></button>
                        </td>
                    </tr>`;
        });
        
        if(coupon_type != '' && coupon_code != '' && coupon_val != '')
        {
            if(coupon_type == 'percent')
            {
                var coupon_discount = ((coupon_val/ 100) * price).toFixed(2);
            }
            else
            {
                coupon_discount = coupon_val.toFixed(2);
            }
            $("#remove-coupon").css("display", "block");
            $("#input-coupon").val(coupon_code);

        }
        else
        {
            var coupon_discount = 0;
            $("#remove-coupon").css("display", "none");
            $("#input-coupon").val('');
        }
        var grand_total = price-coupon_discount;
        $("#cart_list").html(carthtml);
        $("#sub_total").text("₹"+price.toFixed(2));
        $("#grand_total").text("₹"+grand_total.toFixed(2));
        $("#coupon_discount").text("₹"+coupon_discount);
        if(cartdata.length == 0)
        {
           var carth = `<i class="icon_bag_alt"></i>₹`+price.toFixed(2); 
        }
        else
        {
            var carth = `<i class="icon_bag_alt"></i>₹`+price.toFixed(2)+`<span>`+cartdata.length+`</span>`;
        }
        
        $("#cart-total").html(carth);
        $("#cart-total-mobile").html(carth);
        
        
   }

   function removeFromCart(cart_id)
   {
        $.ajax({
             url: "<?php echo e(route('remove-cart')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'cart_id':cart_id
                },
             error: function() {
             },
             success: function(res) {
                if(res=='removed')
                {
                    $.toast({heading: 'Success!',text: 'Removed from cart',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getCartList();
                }
                else
                {
                    $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
   }
   function searchProduct()
   {
       var searchkey = $(".search_key").val();
       if(searchkey == '')
       {
            $.toast({heading: 'Error!',text: 'Search Key Can Not Be Blank',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
            return;
       }
       location.href="<?php echo e(URL::to('product-list/search')); ?>/"+searchkey;
   }
   function searchProduct1()
   {
       var searchkey = $("#search_key1").val();
       if(searchkey == '')
       {
            $.toast({heading: 'Error!',text: 'Search Key Can Not Be Blank',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
            return;
       }
       location.href="<?php echo e(URL::to('product-list/search')); ?>/"+searchkey;
   }
   function addToShopingList(product_id,cart_variant1='',cart_variant2='',type)
   {   
       if(type == 1)
       {
           if(cart_variant1 == '')
           {
               cart_variant1 = $("#cart_variant1").val();
           }
           if(cart_variant2 == '')
           {
               cart_variant2 = $("#cart_variant2").val();
           }
           var tb_type = $("#tb_type").val();
           var qty = $("#input-quantity").val();
       }
       else
       {
           var qty = 1;
       }
       if(qty == 0)
       {
            $.toast({heading: 'Error!',text: 'Qty must be greater than 0.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
       }
        var datas = {
                "_token": "<?php echo e(csrf_token()); ?>",
                 "product_id":product_id,
                 "qty":qty,
                 "cart_variant1":cart_variant1,
                 "cart_variant2":cart_variant2,
                 "tb_type":tb_type
                };
                console.log(datas);
      $.ajax({
             url: "<?php echo e(route('add-to-shoping-list')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                 "product_id":product_id,
                 "qty":qty,
                 "cart_variant1":cart_variant1,
                 "cart_variant2":cart_variant2,
                 "tb_type":tb_type
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(res) {
                if(res.type == 'max_stock')
                {
                    $.toast({heading: 'Error!',text: 'Stock not available.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type == 'min_qty')
                {
                    $.toast({heading: 'Error!',text: 'Minimum '+res.qty+' qty required.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='max_qty')
                {
                    $.toast({heading: 'Error!',text: 'Purchase qty exceeded .Maximum '+res.qty+' qty allowed.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='update')
                {
                    $.toast({heading: 'Success!',text: 'Shoping qty updated.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                }
                else if(res.type=='saved')
                {
                    $.toast({heading: 'Success!',text: 'Product added to shoping list.',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                }
                else if(res.type=='error')
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                }
                else if(res.type=='auth')
                {
                    // $.toast({heading: 'Error!',text: 'Login required.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    location.href="<?php echo e(URL::to('login')); ?>";
                }
                else
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong.',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    

                }

             }
          });
   }
   function getShopingList()
   {
      $.ajax({
             url: "<?php echo e(route('get-shoping-list-data')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>"
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(shopingdata) {
            //   createHeaderCartListHtml(cartdata,coupon_type,coupon_code,coupon_val);
              createShopingListHtml(shopingdata);
             }
          });
   }
   function createShopingListHtml(shopingdata)
   {
        var shopinghtml = ``;
        var qty=0;
        var price=0;
        $.each(shopingdata, function(key,val) { 
            qty = parseInt(qty)+parseInt(val.qty);
            price = parseInt(price)+parseInt(val.offer_price*val.qty);
            shopinghtml += `<tr>
                        <td><a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`"><img class="img-thumbnail" title="`+val.product_name+`" alt="`+val.product_name+`" src="public/product_image/`+val.product_image+`" style="width:100px;"></a></td>
                        <td class="pl-0"><a href="<?php echo e(URL::to('product-detail')); ?>/`+val.slug+`">`+val.product_name+`</a></td>
                        <td class="pl-0">₹`+parseInt(val.offer_price).toFixed(2)+`</td>
                        <td class="pl-0">₹`+parseInt(val.offer_price*val.qty).toFixed(2)+`</td>
                        <td class="pl-0"><button  class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove" onclick="removeFromShopingList(`+val.id+`);"><i class="fa fa-times-circle"></i></button></td>
                    </tr>`;
        });

        var grand_total = price;
        $("#shoping_list").html(shopinghtml);
        $("#s_sub_total").text("₹"+price.toFixed(2));
        $("#s_grand_total").text("₹"+grand_total.toFixed(2));
   }
   function removeFromShopingList(shoping_id)
   {
        $.ajax({
             url: "<?php echo e(route('remove-from-shoping-list')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'shoping_id':shoping_id
                },
             error: function() {
             },
             success: function(res) {
                if(res=='removed')
                {
                    $.toast({heading: 'Success!',text: 'Removed from shoping list',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    getShopingList();
                }
                else
                {
                    $.toast({heading: 'Error!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
   }

function setCurrentPincode(pincode)
{
        $.ajax({
             url: "<?php echo e(route('set-pincode-session')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'pincode':pincode
                },
             error: function() {
             },
             success: function(res) {

             }
          });
}

initialize();
  var geocoder;

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}

function errorFunction(){
    alert("Please enable location.");
}

  function initialize() {
    geocoder = new google.maps.Geocoder();
  }

  function codeLatLng(lat, lng) {

    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
    //   console.log(results)
        if (results[1]) {
         if(results[0].formatted_address.length > 20)
         {
             address = results[0].formatted_address.substring(0,20)+"...";
         }
         else
         {
            address = results[0].formatted_address;
         }

             for (var i=0; i<results.length; i++) {

                if (results[i].types == "route") {

                    mainaddress= results[i].formatted_address;
                    if(mainaddress != '')
                    {
                        $("#input-address-2").val(mainaddress);
                    }
                }
                // console.log(results[i].types);
                if (results[i].types[0] == "administrative_area_level_2") {

                    var city= results[i].address_components[0].long_name;
                    var state= results[i].address_components[1].long_name;
                    if(state != '')
                    {
                        $("#input-state").val(state);
                    }
                    if(city != '')
                    {
                        $("#input-city").val(city);
                    }
                }
                
                if (results[i].types == "postal_code") {
                    var postal_code = results[i].address_components[0].long_name;
                    if(postal_code != '')
                    {
                        $("#input-postcode").val(postal_code);
                        $("#headerpincode").text(postal_code);
                        setCurrentPincode(postal_code);
                    }
                }
            }
        // }
        //city data
        // console.log(results[0].address_components[2].short_name+","+results[0].address_components[1].short_name+","+results[0].address_components[0].short_name)


        } else {
          alert("No results found");
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  }
  var perfEntries = performance.getEntriesByType("navigation");

  function getLatLong()
  {
    var address = $("#address").val();
    var city = $("#city").val();
    if(address != '' && city != '')
    {
      var mainaddress = address+","+city;
      var geocoder = new google.maps.Geocoder();
      // var address = document.getElementById("address").value;
      geocoder.geocode( { 'address': mainaddress}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK)
        {
          var long = results[0].geometry.location.lng();
          var lat = results[0].geometry.location.lat();
          $("#user_lat").val(lat);
          $("#user_long").val(long);
        }
        else
        {
            alert("Invalid address");
            $("#user_lat").val("");
            $("#user_long").val("");
            $("#address").val("");
            $("#city").val("");
        }
      });
    }

  }
  function save_newsletter()
  {
    var email = $("#nemail").val();
    if(email == '')
    {
        $.toast({heading: 'Error!',text: 'Please provide email',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
    }
    $.ajax({
        url: "<?php echo e(route('save-newsletter')); ?>",
        type: 'POST',
        data: {
        "_token": "<?php echo e(csrf_token()); ?>",
        'email':email
        },
        error: function() {
        },
        success: function(res) {
            if(res=='saved')
            {
                $("#nemail").val('');
                $.toast({heading: 'Success!',text: 'Subscribed successfully',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
            }
            else if(res=='already_exist')
            {
                $.toast({heading: 'Error!',text: 'Email already subscribed',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
            }
            else
            {
                $.toast({heading: 'Error!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});

            }
        }
    });
  }
  
</script><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/footer.blade.php ENDPATH**/ ?>