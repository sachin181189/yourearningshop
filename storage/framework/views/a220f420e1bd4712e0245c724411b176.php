<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php
    $delivery_charge = 0;
  ?>

    <?php 
    $month_order_amount = $month_order_amount->order_amount_of_month;
    if($month_order_amount)
    {
        $month_order_amount = $month_order_amount;
    }
    else
    {
        $month_order_amount = 0;
    }
    $date1 = $user_register_date;
    $date2 = date('Y-m-d');
    
    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);
    
    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);
    
    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);
    
    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
    $minimum_month_purchase_limit = 500*$diff;
   ?>
   <?php $__currentLoopData = $wallet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php 
    $yes_amount = $w->yes_amount;
   ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
   <style>
       .btn-common.width-180
       {
           min-width: 136px!important;
       }
   </style>
  <div class="checkout-area mt-15">
    <div class="container-fluid">
      <form action="<?php echo e(route('confirm-order')); ?>" method="POST" id="myForm">
      <div class="row mt-10">
            <!--Shipping Box-->
            <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6">
                    <div class="order-details mt-30">
                <h4 data-toggle="collapse" data-target="#demo">Shipping Address <i class="fa fa-caret-down"></i></h4>
                <div class="order-details-inner" id="demo" class="collapse">
                  <div class="payment-gateways mt-30">
                    <div class="single-payment-gateway">
                        
                      <div class="place-order mt-6">
                        <a href="#" class="btn-common width-180" data-toggle="modal" data-target="#shipModal">New address</a>
                      </div>
                        <?php $j=1; ?> 
                       <?php $__currentLoopData = $user_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="payment-gateway-desc">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if($sa->is_default == 1): ?>
                                    <span class="badge badge-primary">Default</span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-5 text-right">
                                    <span class="badge badge-success text-right" style="cursor:pointer;" data-toggle="modal" data-target="#shipModal<?php echo e($sa->id); ?>">Edit</span>
                                    <a href="<?php echo e(URL::to('remove-shipping-address')); ?>/<?php echo e($sa->id); ?>" class="badge badge-danger text-right" style="color:#fff!important;" onclick="return confirm('Are you sure you want to delete this address?');"><i class="fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                            <div class="single-payment-gateway">
                              <input type="radio" value="<?php echo e($sa->id); ?>" name="shipping_address" data-pincode="<?php echo e($sa->zip); ?>" <?php if($j == 1): ?> checked <?php endif; ?> />
                              <label for="system2"><?php echo e($sa->fname); ?> <?php echo e($sa->lname); ?></label>
                            </div>
                            <p><?php echo e($sa->address); ?>,<?php echo e($sa->city); ?>,<?php echo e($sa->state); ?>,<?php echo e($sa->zip); ?>,<?php echo e($sa->phone); ?></p>
                        </div>
                        
                        <!--EDIT ADDRESS MODEL START-->
                        <div id="shipModal<?php echo e($sa->id); ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                    
                        <!--shipping update Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Shipping Address</h4>
                          </div>
                          <div class="modal-body">
                                <form action="<?php echo e(route('update-shipping-address')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div>
                                      <div class="form-group row">
                                        <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="First Name" value="<?php echo e($sa->fname); ?>" name="fname">
                                        </div>
                                      </div>
                                      <input type="hidden" value="<?php echo e($sa->id); ?>" name="ship_id">
                                      <div class="form-group row">
                                        <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Last Name" value="<?php echo e($sa->lname); ?>" name="lname">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-company" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" placeholder="Email" value="<?php echo e($sa->email); ?>" name="email">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-company" class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-10">
                                          <input type="number" class="form-control" placeholder="Phone" value="<?php echo e($sa->phone); ?>" name="phone">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-address-1" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Address" value="<?php echo e($sa->address); ?>" name="address">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-address-2" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="City" value="<?php echo e($sa->city); ?>" name="city">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-city" class="col-sm-2 control-label">State</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="State" value="<?php echo e($sa->state); ?>" name="state">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="input-shipping-country" class="col-sm-2 control-label">Address Type</label>
                                            <div class="col-sm-10">
                                              <select class="form-control" name="address_type">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="1" <?php if($sa->type_id == "1"): ?> selected <?php endif; ?>>Home</option>
                                                <option value="2" <?php if($sa->type_id == "2"): ?> selected <?php endif; ?>>Office</option>
                                                </select>
                                            </div>
                                        </div>
                                      
                                      <div class="form-group row">
                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Pin Code</label>
                                        <div class="col-sm-10">
                                          <input type="number" class="form-control" placeholder="Pin Code" value="<?php echo e($sa->zip); ?>" name="zip">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="pull-left btn btn-default">Update</button>
                                  </div>
                                </form>
                          </div>
                        </div>
                    
                      </div>
                    </div>
                        <!--EDIT ADDRESS END-->
                        
                        <?php $j++; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                  
                </div>
              </div>
                </div>
                <div class="col-lg-6">
                    <div class="order-details mt-30">
                <h4 data-toggle="collapse" data-target="#demo1">Billing Address <i class="fa fa-caret-down"></i></h4>
                <div class="order-details-inner" id="demo1" class="collapse">
                  <div class="payment-gateways mt-30">
                    <div class="single-payment-gateway">
                        <input type="hidden" id="billing_address_count" value="<?php echo e(count($billing_address)); ?>">
                        <div class="row">
                      <div class="place-order mt-6 col-md-5">
                        <a href="#" class="btn-common width-180" data-toggle="modal" data-target="#billModal">New address</a>
                      </div>
                      <div class="place-order mt-6 col-md-7" style="margin-top: 7px;">
                        <input type="checkbox" name="same_as_shipping" value="1" id="same_as_shipping" onclick="uncheck_billing_address();"> Same as shipping address
                      </div>
                      </div>
                        <?php $j=1; ?> 
                       <?php $__currentLoopData = $billing_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="payment-gateway-desc">
                            <div class="row">
                                <div class="col-md-7">
                                    <?php if($ba->is_default == 1): ?>
                                    <span class="badge badge-primary">Default</span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-5 text-right">
                                    <span class="badge badge-success text-right" style="cursor:pointer;" data-toggle="modal" data-target="#billModal<?php echo e($ba->id); ?>">Edit</span>
                                    <a href="<?php echo e(URL::to('remove-billing-address')); ?>/<?php echo e($ba->id); ?>" class="badge badge-danger text-right" style="color:#fff!important;" onclick="return confirm('Are you sure you want to delete this address?');"><i class="fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                            <div class="single-payment-gateway">
                              <input type="radio" value="<?php echo e($ba->id); ?>" name="billing_address" onclick="uncheck_same_as_shipping_address();" />
                              <label for="system2"><?php echo e($ba->user_name); ?></label>
                            </div>
                            <p><?php echo e($ba->address); ?>,<?php echo e($ba->city); ?>,<?php echo e($ba->state); ?>,<?php echo e($ba->zip); ?>,<?php echo e($ba->phone); ?></p>
                        </div>
                        
                        <!--EDIT ADDRESS MODEL START-->
                        <div id="billModal<?php echo e($ba->id); ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                    
                        <!--shipping update Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Billing Address</h4>
                          </div>
                          <div class="modal-body">
                                <form action="<?php echo e(route('update-billing-address')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div>
                                      <div class="form-group row">
                                        <label for="input-shipping-firstname" class="col-sm-2 control-label">Full Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="First Name" value="<?php echo e($ba->user_name); ?>" name="fname">
                                        </div>
                                      </div>
                                      <input type="hidden" value="<?php echo e($ba->id); ?>" name="ship_id">
                                      <div class="form-group row">
                                        <label for="input-shipping-company" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" placeholder="Email" value="<?php echo e($ba->email); ?>" name="email">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-company" class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-10">
                                          <input type="number" class="form-control" placeholder="Phone" value="<?php echo e($ba->phone); ?>" name="phone">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-address-1" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Address" value="<?php echo e($ba->address); ?>" name="address">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-address-2" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="City" value="<?php echo e($ba->city); ?>" name="city">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-city" class="col-sm-2 control-label">State</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="State" value="<?php echo e($ba->state); ?>" name="state">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Pin Code</label>
                                        <div class="col-sm-10">
                                          <input type="number" class="form-control" placeholder="Pin Code" value="<?php echo e($ba->zip); ?>" name="zip">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="pull-left btn btn-default">Update</button>
                                  </div>
                                </form>
                          </div>
                        </div>
                    
                      </div>
                    </div>
                        <!--EDIT ADDRESS END-->
                        
                        <?php $j++; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                  
                </div>
              </div>
                </div>
            </div>
              
    
              
            </div>
            <!--Shipping box end-->
            <div class="col-lg-4">
              <div class="order-details mt-30">
                <h4>Your Order</h4>
                <div class="order-details-inner">
                  <table>
                    <thead>
                      <tr>
                        <th>PRODUCT</th>
                        <th>TOTAL</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $subtotal=0; $is_grocery_exist=0; ?>
                         <?php $__currentLoopData = $cartdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($cd->product_type == 1): ?>
                          <?php $is_grocery_exist = 1; ?>
                          <?php endif; ?>
                         <?php $subtotal = $subtotal+($cd->offer_price*$cd->qty) ?>
                      <tr>
                        <td><?php echo e($cd->product_name); ?> (Qty : <?php echo e($cd->qty); ?>)</td>
                        <td><strong>₹<?php echo e($cd->offer_price*$cd->qty); ?></strong></td>
                      </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <?php
                        if($subtotal < 500)
                            {
                                $delivery_charge = 100;
                            }
                            elseif($subtotal > 500 && $subtotal < 1000)
                            {
                                $delivery_charge = 70;
                            }
                            elseif($subtotal > 1000 && $subtotal < 2000)
                            {
                                $delivery_charge = 50;
                            }
                            else
                            {
                                $delivery_charge = 0;
                            }
                       ?>
                      <tr>
                        <td>Subtotal</td>
                        <td><strong>₹<?php echo e($subtotal); ?></strong></td>
                      </tr>
                      <tr>
                        <td>Coupon Discount</td>
                        <td><strong id="coupon_discount_text">₹0.00</strong></td>
                      </tr>
                      <tr>
                        <td>Shipping Charge</td>
                        <td>₹<?php echo e($delivery_charge); ?></td>
                      </tr>
                      <tr>
                        <td>ORDER TOTAL</td>
                        <td><strong id="grand_total_text">₹<?php echo e($subtotal+$delivery_charge); ?></strong></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="payment-gateways mt-30">
                      <h5>Prefered Time</h5>
                      <select class="form-control" name="prefered_time" required>
                          <option value="any">Any</option>
                          <?php $__currentLoopData = $time_slot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($ts->time_slot); ?>"><?php echo e($ts->time_slot); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <h5>Payment Method</h5>
                    <div class="single-payment-gateway">
                      <input type="radio" id="system3" name="payment_method" value="1" />
                      <label for="system3"><strong>Pay on delivery</strong></label>
                    </div>
                    <input type="hidden" value="<?php echo e($is_grocery_exist); ?>" id="check_grocery">
                    <div class="single-payment-gateway">
                      <input type="radio" id="system33" name="payment_method" value="2" checked />
                      <label for="system3"><strong>Online</strong></label>
                    </div>
                    <div class="single-payment-gateway">
                      <input type="radio" id="system34" name="payment_method" value="3" onclick="useWallet();" />
                      <label for="system34"><strong>Wallet (Available amount ₹<?php echo e($yes_amount); ?>)</strong></label>
                    </div>
                  </div>
                  <div class="place-order text-right mt-10">
                    <button type="button" class="btn-common width-180 confirmorder" >place porder</button>
                  </div>
                </div>
              </div>
        </div>
      </div>
      </form>
    </div>
  </div>
  
 <style>
    div#billModal, div#shipModal {
        background: #000000b3;
    }
    
    .modal-backdrop {
        z-index: 0;
        background: #fff;
    }
 </style>

<div id="shipModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">New Shipping Address</h4>
          </div>
          <div class="modal-body">
                <form action="<?php echo e(route('save-shipping-address')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div id="shipping-new">
                      <div class="form-group row">
                        <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="" name="fname">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-lastname" placeholder="Last Name" value="" name="lname">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-shipping-company" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="input-shipping-email" placeholder="Email" value="" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-shipping-company" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="input-shipping-phone" placeholder="Phone" value="" name="phone">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-shipping-address-1" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-address" placeholder="Address" value="" name="address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-shipping-address-2" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="" name="city">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-shipping-city" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-state" placeholder="State" value="" name="state">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="input-shipping-country" class="col-sm-2 control-label">Address Type</label>
                            <div class="col-sm-10">
                              <select class="form-control" id="input-shipping-address-type" name="address_type">
                                <option value=""> --- Please Select --- </option>
                                <option value="1">Home</option>
                                <option value="2">Office</option>
                                </select>
                            </div>
                        </div>
                      
                      <div class="form-group row">
                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Pin Code</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="input-shipping-postcode" placeholder="Pin Code" value="" name="zip">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="pull-left btn btn-default">Save</button>
                  </div>
                </form>
          </div>
        </div>
    
    </div>
</div>

<div id="billModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Billing Address</h4>
      </div>
      <div class="modal-body">
          <form action="<?php echo e(route('save-billing-address')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <div id="billing-new">
                  <div class="form-group row">
                    <label for="input-billing-firstname" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-firstname" placeholder="Full Name" value="" name="user_name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-email" placeholder="Email" value="" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-phone" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-phone" placeholder="Phone" value="" name="phone">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-address" placeholder="Address" value="" name="address">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-city" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-city" placeholder="City" value="" name="city">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-city" class="col-sm-2 control-label">State</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-city" placeholder="State" value="" name="state">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="input-billing-postcode" class="col-sm-2 control-label">Pin Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-postcode" placeholder="Pin Code" value="" name="zip">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="pull-left btn btn-default">Save</button>
              </div>
            </form>
      </div>
    </div>

  </div>
</div>

<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
function useWallet()
{
    var wallet_amount = <?php echo e($yes_amount); ?>;
    var price = <?php echo $subtotal; ?>;
    var delivery_charge = <?php echo $delivery_charge; ?>;
    
    if(localStorage.getItem("coupon_type") && localStorage.getItem("coupon_val"))
    {
        var coupon_type = localStorage.getItem("coupon_type");
        var coupon_val = localStorage.getItem("coupon_val");
        
        if(coupon_type != '' && coupon_val != '')
        {
            if(coupon_type == 'percent')
            {
                var coupon_discount = ((coupon_val/ 100) * price).toFixed(2);
            }
            else
            {
                var coupon_discount = coupon_val.toFixed(2);
            }
            var final_price = parseFloat(delivery_charge)+parseFloat(price)-parseFloat(coupon_discount);

        }
        else
        {
            var final_price = parseFloat(delivery_charge)+parseFloat(price);
        }
    }
    else
    {
        var final_price = parseFloat(delivery_charge)+parseFloat(price);
    }
    if(wallet_amount >= final_price)
    {
        var order_month_amount = <?php echo e($month_order_amount); ?>;
        var minimum_month_purchase_limit = <?php echo e($minimum_month_purchase_limit); ?>;
        if(order_month_amount < minimum_month_purchase_limit)
        {
            $("#system33").prop("checked", true);

            $.toast({heading: 'Error!',text: 'Wallet amount is eligble to use as you are not purchase minmum order in month .',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
            return false;
        }
    }
    else
    {
        $("#system33").prop("checked", true);

        $.toast({heading: 'Error!',text: 'Insufficient balance .',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
        return false;
    }
}    

function uncheck_billing_address()
{
    $("input:radio[name='billing_address']").each(function(i) {
       this.checked = false;
    });
}
function uncheck_same_as_shipping_address()
{
    $('#same_as_shipping').prop('checked', false);
}

$(".confirmorder" ).click(function( event ) {
    
    var pincode = $('input[name="shipping_address"]:checked').attr("data-pincode");
    var billing_address = $('input[name="billing_address"]:checked').val();
    var billing_address_count = $("#billing_address_count").val();
    var same_as_shipping_address = $('input[name="same_as_shipping"]:checked').val();
    var grocery_exist = $("#check_grocery").val();
    if(billing_address == undefined)
    {
        if(same_as_shipping_address == undefined)
        {
            alert("Please select billing address");
            return false;
        }
        
    }
    if(grocery_exist == 0)
    {
        $("#myForm").submit();
        return true;
    }
    else
    {
        $.ajax({
             url: "<?php echo e(route('check-grocery-available')); ?>",
             type: 'POST',
             data: {
                 "pincode":pincode,
                "_token": "<?php echo e(csrf_token()); ?>"
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(res) {
                 if(res == 'not_available')
                 {
                     $.toast({heading: 'Error!',text: 'Store not available for your grocery item .',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                     return false;
                 }
                 else
                 {
                     $("#myForm").submit();
                     return true;
                 }
             }
          });
    }
});
    if(localStorage.getItem("coupon_type") && localStorage.getItem("coupon_val"))
    {
        var coupon_type = localStorage.getItem("coupon_type");
        var coupon_val = localStorage.getItem("coupon_val");
        var price = <?php echo $subtotal; ?>;
        var delivery_charge = <?php echo $delivery_charge; ?>;
        
        if(coupon_type != '' && coupon_val != '')
        {
            if(coupon_type == 'percent')
            {
                var coupon_discount = ((coupon_val/ 100) * price).toFixed(2);
            }
            else
            {
                var coupon_discount = coupon_val.toFixed(2);
            }
            $("#coupon_discount_text").text(coupon_discount);
            $("#grand_total_text").text(parseFloat(delivery_charge)+parseFloat(price)-parseFloat(coupon_discount));

        }
        else
        {
            var coupon_discount = 0;
            $("#remove-coupon").css("display", "none");
            $("#input-coupon").val('');
        }
    }

$('input[name=\'payment_address\']').on('change', function() {
	if (this.value == 'new') {
		$('#payment-existing').hide();
		$('#payment-new').show();
	} else {
		$('#payment-existing').show();
		$('#payment-new').hide();
	}
});

</script> 
<script type="text/javascript">
$('input[name=\'shipping_address\']').on('change', function() {
	if (this.value == 'new') {
		$('#shipping-existing').hide();
		$('#shipping-new').show();
	} else {
		$('#shipping-existing').show();
		$('#shipping-new').hide();
	}
});
</script> <?php /**PATH C:\xampp\htdocs\yourearningshop\resources\views/checkout.blade.php ENDPATH**/ ?>