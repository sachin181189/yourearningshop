<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css" />

<style>
.modal-backdrop
{
    position: inherit!important;
}
/*    .nav-tabs>li.active>a{*/
/*        background:#333;*/
/*        color:#fff;*/
/*    }*/
/*    .nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{*/
/*        background:#333;*/
/*        color:#fff;*/
/*    }*/
/*    .mt-3*/
/*    {*/
/*        margin-top: 3rem;*/
/*    }*/
/*    .row.mb-10{*/
/*        margin-bottom:10px;*/
/*    }*/
/*    .edit_add*/
/*    {*/
/*        position: absolute;*/
/*        right: 25px;*/
/*        top: 18px;*/
/*        padding: 5px;*/
/*        cursor:pointer;*/
/*    }*/
/*    .modal-backdrop{*/
/*        z-index:0!important;*/
/*    }*/
/*    .
/*    .pad{*/
/*        padding-bottom:10px!important;*/
/*    }*/
.bol{
       font-weight:bold!important;
   }
</style>

    <?php $__currentLoopData = $user_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
            $id = $ud->id;
            $fname = $ud->fname;
            $lname = $ud->lname;
            $email = $ud->email;
            $phone = $ud->phone;
            $aadhar_back = $ud->aadhar_back;
            $aadhar_front = $ud->aadhar_front;
            $gender = $ud->gender;
            $image = $ud->image;
            $referral_code = $ud->referral_code;
            $password = $ud->password;
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<div class="container mt-3">
    <!--<ul class="breadcrumb">-->
    <!--  <li><a href="#"><i class="fa fa-home"></i></a></li>-->
    <!--  <li><a href="#">My Account</a></li>-->
    <!--</ul>-->
    <div class="row">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong> <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <div class="col-md-12 mb-3 mt-3 text-center">
            <h4>Refer and Earn</h4>
            <div class="sharethis-inline-share-buttons" data-url="<?php echo e(URL::to('register')); ?>?r=<?php echo e(base64_encode($referral_code)); ?>" data-title="Sharing is great!"></div>

        </div>
        <div class="col-md-12">
            <ul class="nav nav-tabs nav-justified product-review-nav">
                <li class="active"><a data-toggle="tab" href="#home" class="active show">ORDER</a></li>
                <li><a data-toggle="tab" href="#menu1">PROFILE</a></li>
                <li><a data-toggle="tab" href="#menu5">MY EARNING</a></li>
                <li><a data-toggle="tab" href="#menu2">SHIPPING ADDRESS</a></li>
                <li><a data-toggle="tab" href="#menu3">BILLING ADDRESS</a></li>
                <li><a data-toggle="tab" href="#menu4">MY CONNECTION</a></li>
            </ul>
            <div class="tab-content mt-3">
                <div id="home" class="tab-pane fade in active">
                    <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                                <?php if(count($order) > 0): ?>
                                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $od): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-12">
                                        <div class="card">
                                          <div class="card-body">
                                              <div class="row">
                                                  <div class="col-md-2 pad bol">Order Id</div>
                                                  <div class="col-md-2 pad"><?php echo e($od['order_id']); ?></div>
                                                  <div class="col-md-2 pad bol">Order Date</div>
                                                  <div class="col-md-2 pad"><?php echo e($od['order_date']); ?></div>
                                                  <div class="col-md-2 pad bol">Amount</div>
                                                  <div class="col-md-2 pad">₹<?php echo e($od['grand_total']); ?></div>
                                                  <div class="col-md-2 pad bol">Invoice</div>
                                                  <div class="col-md-2 pad">
                                                     <?php if($od['invoice_file'] == ''): ?>
                                                    Not generated
                                                    <?php else: ?>
                                                    <a class="btn btn-danger btn-sm" download href="<?php echo e(URL::asset('/invoice' )); ?>/<?php echo e($od['invoice_file']); ?>" target="_blank">Download</a>
                                                    <?php endif; ?>
                                                  </div>
                                                  <div class="col-md-2 pad bol">Status</div>
                                                  <div class="col-md-2 pad">
                                                        <?php if($od['order_status'] == 1): ?>
                                                        
                                                        <span class="label label-success">Confirmed</span>
                                                        <?php elseif($od['order_status'] == 2): ?>
                                                        <span class="label label-danger">Packed</span>
                                                        <?php elseif($od['order_status'] == 3): ?>
                                                        <span class="label label-info">Shipped</span>
                                                        <?php elseif($od['order_status'] == 4): ?>
                                                        <span class="label label-primary">Delivered</span>
                                                        <?php elseif($od['order_status'] == 5): ?>
                                                        <span class="label label-warning">Canceled</span>
                                                        <?php elseif($od['order_status'] == 6): ?>
                                                        <span class="label label-danger">Returned</span>
                                                        <?php endif; ?>
                                                  </div>
                                                  <div class="col-md-2" data-toggle="collapse" data-target="#order_detail<?php echo e($od['id']); ?>"><span class="badge badge-primary" style="cursor:pointer;">View</span></div>
                                                    <div class="col-md-2"><a class="btn btn-danger btn-sm" href="#" onclick="show_cancel_modal('<?php echo e($od['order_id']); ?>');">Cancel Order</a></div>
                                              </div>
                                          </div>
                                          <div class="card-body collapse" id="order_detail<?php echo e($od['id']); ?>" style="border-top: 1px solid lightgray;">
                                              <h5 style="border-bottom: 1px solid lightgray;padding-block: 10px;"><b>Order Detail</b></h5>
                                                <div class="row">
                                                      <div class="col-md-2 bol pad">Txn. no</div>
                                                      <div class="col-md-2 pad"><?php echo e($od['payment_id']??'NA'); ?></div>
                                                      <div class="col-md-2 bol pad">Shipping charge</div>
                                                      <div class="col-md-2 pad">₹<?php echo e($od['shipping_charge']); ?></div>
                                                      <div class="col-md-2 pad bol">Sub total</div>
                                                      <div class="col-md-2 pad">₹<?php echo e($od['sub_total']); ?></div>
                                                      <div class="col-md-2 pad bol">Payment Status</div>
                                                      <div class="col-md-2 pad">
                                                          <?php if($od['payment_status'] == 0): ?>
                                                            <span class="label label-danger">Pending</span>
                                                            <?php elseif($od['payment_status'] == 1): ?>
                                                            <span class="label label-success">Paid</span>
                                                            <?php elseif($od['payment_status'] == 2): ?>
                                                            <span class="label label-info">Failed</span>
                                                            <?php elseif($od['payment_status'] == 3): ?>
                                                            <span class="label label-primary">Refunded</span>
                                                            <?php endif; ?>
                                                      </div>
                                                      <?php if(!empty($od['coupon_code'])): ?>
                                                      <div class="col-md-2 pad bol">Coupon code</div>
                                                      <div class="col-md-2 pad"><?php echo e($od['coupon_code']); ?></div>
                                                      <div class="col-md-2 bol">Coupon amount</div>
                                                      <div class="col-md-2 pad">₹<?php echo e($od['coupon_amount']); ?></div>
                                                      <?php endif; ?>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 pad bol">Shipping Address</div>
                                                    <div class="col-md-10 pad">
                                                        <span><?php echo $od['shipping_user_name']; ?> , <?php echo $od['shipping_address']; ?> , <?php echo $od['shipping_city']; ?> , <?php echo $od['shipping_state']; ?> ,<?php echo $od['shipping_zip']; ?> ,<?php echo $od['shipping_phone']; ?> , <?php echo $od['shipping_email']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 pad bol">Billing Address</div>
                                                    <div class="col-md-10 pad">
                                                        <span><?php echo $od['billing_name']; ?> , <?php echo $od['billing_address']; ?> , <?php echo $od['billing_city']; ?> , <?php echo $od['billing_state']; ?> ,<?php echo $od['billing_zip']; ?> ,<?php echo $od['billing_phone']; ?> , <?php echo $od['billing_email']; ?></span>
                                                    </div>
                                                </div>
                                                <h5 style="border-bottom: 1px solid lightgray;padding-block: 10px;"><b>Product Detail</b></h5>
                                                    <?php $__currentLoopData = $od['order_product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $odp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <div class="row">
                                                          <div class="col-md-2 pad"><img src="<?php echo e(URL::asset('/product_image' )); ?>/<?php echo e($odp['product_image']); ?>" style="width:50px;"></div>
                                                          <div class="col-md-4 pad"><?php echo e($odp['product_name']); ?> (QTY:<?php echo e($odp['qty']); ?>)</div>
                                                          <div class="col-md-2 pad"><?php echo e($odp['variant_value1']); ?> , <?php echo e($odp['variant_value2']); ?></div>
                                                          <div class="col-md-2 pad"><?php echo e($odp['offer_price']); ?></div>
                                                          <div class="col-md-2">
                                                              <?php if($odp['status'] == 6): ?>
                                                              Return Requested
                                                              <?php else: ?>
                                                              <a class="btn btn-danger btn-sm" href="#" onclick="show_return_modal('<?php echo e($odp['order_id']); ?>',<?php echo e($odp['product_id']); ?>);">Return</a>
                                                              <?php endif; ?>
                                                        </div>
                                                          
                                                      </div>
                                                      
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                          <div class="row">
                                              <div class="col-md-12 text-center">
                                                  <h4>No order yet</h4>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-1 hidden-xs column-left"></div>
                            <div class="col-sm-10" id="content">
                                <h3>Your Personal Details</h3>
                                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo e(route('update-profile')); ?>">
                                <?php echo csrf_field(); ?>
                                    <fieldset id="account" class="mb-3">
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label">First Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="<?php echo e($fname); ?>" name="fname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="input-lastname" class="col-sm-3 control-label">Gender</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="gender">
                                                            <option value="Female" <?php if($gender == "Female"): ?> selected <?php endif; ?>>Female</option>
                                                             <option value="Male" <?php if($gender == "Male"): ?> selected <?php endif; ?>>Male</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="input-email" placeholder="First Name" value="<?php echo e($email); ?>" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="input-lastname" class="col-sm-3 control-label">Phone</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="input-phone" placeholder="Last Name" value="<?php echo e($phone); ?>" name="phone">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <span class="badge badge-primary" style="cursor:pointer;" onclick="change_mobile_otp(<?php echo e($phone); ?>);">Change</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label">Profile Pic</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="file">
                                                        <input type="hidden" value="<?php echo e($image); ?>" name="hidden_image" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label">Aadhar Front</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="aadhar_front" />
                                                        <input type="hidden" value="<?php echo e($aadhar_front); ?>" name="hidden_aadhar_front" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label">Aadhar Back</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="aadhar_back">
                                                        <input type="hidden" value="<?php echo e($aadhar_back); ?>" name="hidden_aadhar_back" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <?php if($image == ''): ?>
                                                        <img src="<?php echo e(URL::asset('user_image' )); ?>/default.png" style="width:200px;">
                                                        <?php else: ?>
                                                        <img src="<?php echo e(URL::asset('user_image' )); ?>/<?php echo e($image); ?>" style="width:200px;">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <?php if($image == ''): ?>
                                                        <p>Aadhar front image not uploaded</p>
                                                        <?php else: ?>
                                                        <img src="<?php echo e(URL::asset('customer_aadhar' )); ?>/<?php echo e($aadhar_front); ?>" style="width:200px;">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <label for="input-firstname" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <?php if($image == ''): ?>
                                                        <p>Aadhar back image not uploaded</p>
                                                        <?php else: ?>
                                                        <img src="<?php echo e(URL::asset('customer_aadhar' )); ?>/<?php echo e($aadhar_back); ?>" style="width:200px;">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                    </fieldset>
                                <fieldset>
                                    <legend>Change Password (Leave it blank if don't want to change)</legend>
                                    <div class="form-group required">
                                        <label for="input-password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="input-password" placeholder="Password" value="" name="password" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo e($password); ?>" name="old_password">
                                    <div class="form-group required">
                                        <label for="input-confirm" class="col-sm-3 control-label">Password Confirm</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm_password" autocomplete="new-password">
                                        </div>
                                    </div>
                                </fieldset>
                                    <div class="buttons">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                            </form>
                        </div>
                            <div class="col-sm-1 hidden-xs column-left"></div>
                        </div>
                    </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="container">
                        <button class="btn btn-info mb-2" type="button" data-toggle="modal" data-target="#shipModal">Add new address</button>
                        <div class="row">
                            <?php if(count($shipping_address) > 0): ?>
                            <?php $__currentLoopData = $shipping_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <div class="card">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-md-12">
                                          <b><?php echo $sa->fname." ".$sa->lname; ?></b> <span class="badge badge-warning"><?php echo $sa->address_type; ?></span>
                                          <?php if($sa->is_default == 1) {?>
                                          <span class="badge badge-primary">Default</span>
                                          <?php } ?>
                                          <span class="badge badge-info edit_add" data-toggle="modal" data-target="#shipModal<?php echo e($sa->id); ?>"><i class="fa fa-pencil"></i> Edit</span>
                                          <a href="<?php echo e(URL::to('remove-shipping-address')); ?>/<?php echo e($sa->id); ?>" class="badge badge-danger delete_add" style="color:#fff!important;" onclick="return confirm('Are you sure you want to delete this address?');"><i class="fa fa-trash"></i> Delete</a>
                                          </div>
                                          <div class="col-md-12">
                                          <span><?php echo $sa->address; ?> , <?php echo $sa->city; ?> , <?php echo $sa->state; ?> ,<?php echo $sa->zip; ?></span>
                                          </div>
                                          <div class="col-md-12">
                                          <span><?php echo $sa->phone; ?> , <?php echo $sa->email; ?></span>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div id="shipModal<?php echo e($sa->id); ?>" class="modal fade" role="dialog" data-backdrop="false">
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
                                            <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code</label>
                                            <div class="col-sm-10">
                                              <input type="number" class="form-control" placeholder="Post Code" value="<?php echo e($sa->zip); ?>" name="zip">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                      <div class="row">
                                          <div class="col-md-12 text-center">
                                              <h4>No address yet</h4>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                    </div>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <div class="container">
                        <button class="btn btn-info mb-2" type="button" data-toggle="modal" data-target="#billModal">Add new address</button>
                        <div class="row">
                              <?php $__currentLoopData = $billing_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6">
                                    
                                    <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-md-12">
                                              <b><?php echo $ba->user_name; ?></b>
                                              <?php if($ba->is_default == 1) {?>
                                              <span class="badge badge-info">Default</span>
                                              <?php } ?>
                                              <span class="badge badge-danger edit_add" data-toggle="modal" data-target="#billModal<?php echo e($ba->id); ?>"><i class="fa fa-pencil"></i> Edit</span>
                                              <a href="<?php echo e(URL::to('remove-billing-address')); ?>/<?php echo e($ba->id); ?>" class="badge badge-danger text-right" style="color:#fff!important;" onclick="return confirm('Are you sure you want to delete this address?');"><i class="fa fa-trash"></i> Delete</a>
                                              </div>
                                              <div class="col-md-12">
                                              <span><?php echo $ba->address; ?> , <?php echo $ba->city; ?> , <?php echo $ba->state; ?> ,<?php echo $ba->zip; ?></span>
                                              </div>
                                              <div class="col-md-12">
                                              <span><?php echo $ba->phone; ?> , <?php echo $ba->email; ?></span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div id="billModal<?php echo e($ba->id); ?>" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                    
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Update Billing Address</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form action="<?php echo e(route('update-billing-address')); ?>" method="post">
                                                  <?php echo csrf_field(); ?>
                                                    <div id="billing-new">
                                                      <div class="form-group row">
                                                        <label for="input-billing-firstname" class="col-sm-2 control-label">Full Name</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" placeholder="Full Name" value="<?php echo e($ba->user_name); ?>" name="user_name">
                                                        </div>
                                                      </div>
                                                      <input type="hidden" value="<?php echo e($ba->id); ?>" name="bill_id">
                                                      <div class="form-group row">
                                                        <label for="input-billing-email" class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" placeholder="Email" value="<?php echo e($ba->email); ?>" name="email">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row">
                                                        <label for="input-billing-phone" class="col-sm-2 control-label">Phone</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" placeholder="Phone" value="<?php echo e($ba->phone); ?>" name="phone">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row">
                                                        <label for="input-billing-address" class="col-sm-2 control-label">Address</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" placeholder="Address" value="<?php echo e($ba->address); ?>" name="address">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row">
                                                        <label for="input-billing-city" class="col-sm-2 control-label">City</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" placeholder="City" value="<?php echo e($ba->city); ?>" name="city">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row">
                                                        <label for="input-billing-city" class="col-sm-2 control-label">State</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" placeholder="State" value="<?php echo e($ba->state); ?>" name="state">
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="form-group row">
                                                        <label for="input-billing-postcode" class="col-sm-2 control-label">Post Code</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" placeholder="Post Code" value="<?php echo e($ba->zip); ?>" name="zip">
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <div class="container">
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Level 1 User</th>
                                    <th>Level 2 User</th>
                                    <th>Level 3 User</th>
                                    <th>Level 4 User</th>
                                    <th>Level 5 User</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><?php echo e($level1_user_count); ?></td>
                                    <td><?php echo e($level2_user_count); ?></td>
                                    <td><?php echo e($level3_user_count); ?></td>
                                    <td><?php echo e($level4_user_count); ?></td>
                                    <td><?php echo e($level5_user_count); ?></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb" id="connectionBreadcrumb">
                            <!--<li><a onclick="getConnection('<?php echo e($referral_code); ?>')" style="cursor:pointer"><i class="fa fa-user"></i> <?php echo e($referral_code); ?> ->&nbsp;&nbsp;</a></li>-->
                        </ul>
                        
                        <div class="row" id="connection">
                            
                            <!--<div class="col-md-3 mb-3">-->
                            <!--    <div class="card" style="background:linear-gradient(178deg, #64aa2d9e, #ff7c00);box-shadow:3px 5px 10px 2px #000;">-->
                            <!--        <center>-->
                            <!--            <img class="card-img-top mt-3" src="https://www.bugerro.com/yourearningshop.com/public/product_image/1626776568.png" alt="Card image cap" style="width:100px;border-radius:50px">-->
                            <!--        </center>-->
                            <!--        <div class="card-body">-->
                            <!--            <h5 class="card-title">Name : Jay Kumar</h5>-->
                            <!--            <h5 class="card-title">Total Connection : 70 People</h5>-->
                            <!--            <h5 class="card-title">Total Earning : ₹ 15000</h5>-->
                            <!--            <a href="#" class="btn btn-primary">View Connection</a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                        </div>
                    </div>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="padding:13px!important;">
                                  <div class="card-body">
                                      <div class="row text-center">
                                          <div class="col-md-12"><b><h4>Total Income</h4></b></div>
                                          <div class="col-md-12"><b>₹<?php echo e($income_data['wallet_amount']); ?></b></div>
                                            <div class="col-md-12" style="margin-top:15px;"><span class="label label-success" onclick="show_payment_modal(<?php echo e($income_data['transferable_money1']); ?>);" style="background: #28a745;color: #fff;padding: 6px;cursor:pointer;">Transfer To Bank >></span></div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-md-6">TDS 10%</div>
                                          <div class="col-md-6">₹<?php echo e($income_data['tds_amount']); ?></div>
                                          <div class="col-md-6">Processing Fee 5%</div>
                                          <div class="col-md-6">₹<?php echo e($income_data['wallet_amount']); ?></div>
                                          <div class="col-md-6">Purchasing Coupon 10%</div>
                                          <div class="col-md-6">₹<?php echo e($income_data['process_fee']); ?></div>
                                          <div class="col-md-6"><b>Transferable Money</b></div>
                                          <div class="col-md-6">₹<?php echo e($income_data['transferable_money']); ?></div>
                                          <div class="col-md-6"><b>Yes Money</b></div>
                                          <div class="col-md-6">₹<?php echo e($income_data['yes_amount']); ?></div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>BP Earn History</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Referral Code</th>
                                    <th>Settlement Date</th>
                                    <th>Settlement Time</th>
                                    <th>Amount</th>
                                    <th>Level</th>
                                    <th>Type</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>
                                    <?php $__currentLoopData = $user_bp_settlement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><?php echo e($bps->fname); ?></td>
                                    <td><?php echo e($bps->referral_code); ?></td>
                                    <td><?php echo e($bps->settlement_date); ?></td>
                                    <td><?php echo e($bps->settlement_time); ?></td>
                                    <td><?php echo e($bps->amount); ?></td>
                                    <td><?php echo e($bps->level); ?></td>
                                    <td><?php echo e($bps->type); ?></td>
                                  </tr>
                                <?php
                                $i++;
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>DP Earn History</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Referral Code</th>
                                    <th>Settlement Date</th>
                                    <th>Settlement Time</th>
                                    <th>Level</th>
                                    <th>Type</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>
                                    <?php $__currentLoopData = $user_dp_settlement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><?php echo e($dps->vendor_name); ?></td>
                                    <td><?php echo e($dps->settlement_date); ?></td>
                                    <td><?php echo e($dps->settlement_time); ?></td>
                                    <td><?php echo e($dps->amount); ?></td>
                                    <td><?php echo e($dps->type); ?></td>
                                  </tr>
                                <?php
                                $i++;
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    
<input type="hidden" id="hidden_referral_code" value="<?php echo e($referral_code); ?>">
<input type="hidden" id="hidden_referral_code" value="URL::to('/');">
    
<div id="shipModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content p-3">
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
                      <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="" name="fname" required>
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
                      <input type="email" class="form-control" id="input-shipping-email" placeholder="Email" value="" name="email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-shipping-company" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="input-shipping-phone" placeholder="Phone" value="" name="phone" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-shipping-address-1" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-shipping-address" placeholder="Address" value="" name="address" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-shipping-address-2" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="" name="city" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-shipping-city" class="col-sm-2 control-label">State</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-shipping-state" placeholder="State" value="" name="state" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="input-shipping-country" class="col-sm-2 control-label">Address Type</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="input-shipping-address-type" name="address_type">
                            <option value="1">Home</option>
                            <option value="2">Office</option>
                            </select>
                        </div>
                    </div>
                  
                  <div class="form-group row">
                    <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="input-shipping-postcode" placeholder="Post Code" value="" name="zip" required>
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
    <div class="modal-content p-3">
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
                      <input type="text" class="form-control" id="input-billing-firstname" placeholder="Full Name" value="" name="user_name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-email" placeholder="Email" value="" name="email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-phone" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-phone" placeholder="Phone" value="" name="phone" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-address" placeholder="Address" value="" name="address" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-city" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-city" placeholder="City" value="" name="city" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-billing-city" class="col-sm-2 control-label">State</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-city" placeholder="State" value="" name="state" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="input-billing-postcode" class="col-sm-2 control-label">Post Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input-billing-postcode" placeholder="Post Code" value="" name="zip" required>
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
<div id="verifyotpmodal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 50%;">

    <!-- Modal content-->
    <div class="modal-content p-3">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <h4 class="modal-title text-center mb-3">Verify Otp</h4>
            <form action="<?php echo e(route('save-shipping-address')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div id="shipping-new">
                  <div class="form-group row">
                    <label for="input_otp" class="col-sm-2 control-label">OTP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_otp" placeholder="OTP" value="" name="otp" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="pull-left btn btn-default" onclick="verifyMobileOtp();">Verify</button>
              </div>
            </form>
      </div>
    </div>

  </div>
</div>

<div id="payment_modal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" style="width: 50%;">
    <div class="modal-content p-3">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <h4 class="modal-title text-center mb-3">Payment Request</h4>
          
          <fieldset id="verifymobile">
                <!--<legend>Verify mobile</legend>-->
                    <div class="row mb-10">
                        <div class="col-md-12">
                            <div class="row">
                                <label for="input_mobile" class="col-sm-3 control-label">Mobile No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input_mobile" placeholder="Enter registered mobile no" value="" maxlength="10" minlength="10" onkeypress='validate(event)'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10 mt-2" id="continuebtn">
                        <div class="col-md-12">
                            <div class="row">
                                <label for="input_continue" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <button type="button" class="btn btn-info" onclick="sendTransferOtp();">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10 d-none mt-2" id="otptextbox">
                        <div class="col-md-12">
                            <div class="row">
                                <label for="transfer_otp" class="col-sm-3 control-label">OTP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="transfer_otp" placeholder="Enter otp here">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10 mt-2 d-none" id="verifybtndiv">
                        <div class="col-md-12">
                            <div class="row">
                                <label for="input-lastname" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <button type="button" class="btn btn-info" onclick="verifyTransferOtp();">Verify</button>
                                    <button type="button" class="btn btn-info" onclick="sendTransferOtp();" id="resendbtn">Resend</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <hr>
          
            <form action="#" method="post">
                <?php echo csrf_field(); ?>
                <div id="transfer_form" class="d-none">
                  <div class="form-group row">
                    <label for="account_holder" class="col-sm-4 control-label">Account Holder Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="account_holder" placeholder="Account Holder Name" value="" name="account_holder" required>
                    </div>
                  </div>
                  <input type="hidden" value="0" id="amount">
                                    <div class="form-group row">
                    <label for="account_no" class="col-sm-4 control-label">Account No.</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="account_no" placeholder="Account No" value="" name="account_no" required>
                    </div>
                  </div>
                  
                                    <div class="form-group row">
                    <label for="ifsc_code" class="col-sm-4 control-label">IFSC Code</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="ifsc_code" placeholder="IFSC Code" value="" name="ifsc_code" required>
                    </div>
                  </div>
                    <div class="modal-footer">
                    <button type="button" class="pull-left btn btn-success" id="payment_btn" onclick="payment_request();">Request</button>
                  </div>
                </div>

            </form>
      </div>
    </div>

  </div>
</div>

<div class="modal" id="cancelModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Cancel Reason</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo e(route('user-cancel-order')); ?>" method="post">
            <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="email">Reason:</label>
            <textarea class="form-control" name="reason" required></textarea>
          </div>
          <input type="hidden" name="order_id" id="order_id" value="">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="returnModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Return Reason</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo e(route('user-return-product')); ?>" method="post">
            <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="email">Reason:</label>
            <textarea class="form-control" name="reason" required></textarea>
          </div>
          <input type="hidden" name="order_id" id="r_order_id" value="">
          <input type="hidden" name="product_id" id="r_product_id" value="">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(URL::asset('admin/assets/extra-libs/DataTables/datatables.min.js')); ?>"></script>
<script>
function validate(evt) 
{
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
function sendTransferOtp()
{
    var mobile = $("#input_mobile").val();
    if(mobile.length < 10)
    {
        alert("Invalid mobile no. Minimum 10 digit required");
        return false;
    }
        $.ajax({
             url: "<?php echo e(route('send-transfer-otp')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'mobile':mobile
                },
             error: function() {
             },
             success: function(res) {
                //  alert(res.otp);
                if(res.status==200)
                {
                    
                    $("#continuebtn").remove();
                    $("#otptextbox").removeClass("d-none");
                    $("#verifybtndiv").removeClass("d-none");
                    alert(res.msg);
                    // $.toast({heading: 'Success!',text: 'Otp send',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                }
                else
                {
                    alert(res.msg);
                    // $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
}
function verifyTransferOtp()
{
    var mobile = $("#input_mobile").val();
    var otp = $("#transfer_otp").val();
        $.ajax({
             url: "<?php echo e(route('verify-transfer-otp')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'mobile':mobile,
                'otp':otp,
                },
             error: function() {
             },
             success: function(res) {
                //  alert(res);
                if(res.status==200)
                {
                    
                    $("#verifymobile").remove();
                    $("#transfer_form").removeClass("d-none");
                    $("#input_phone").val(mobile);
                    $("#input_phone").attr('disabled','true');
                    alert(res.msg);
                    // $.toast({heading: 'Success!',text: 'Otp send',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                }
                else
                {
                    alert(res.msg);
                    // $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
}

function payment_request()
{
    var form_status = true;
    var ifsc_code = $("#ifsc_code").val();
    var account_holder = $("#account_holder").val();
    var account_no = $("#account_no").val();
    var amount = $("#amount").val();
        if(ifsc_code == '')
    {
        $.toast({heading: 'Required!',text: 'IFSC code is required .',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
        form_status = false;
    }
        if(account_holder == '')
    {
        $.toast({heading: 'Required!',text: 'Account holder is required .',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
        form_status = false;
    }
        if(account_no == '')
    {
        $.toast({heading: 'Required!',text: 'Account no is required .',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
        form_status = false;
    }
        if(amount == 0 || amount == '')
    {
        $.toast({heading: 'Required!',text: 'Amount can not be 0 .',position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
        form_status = false;
    }
    if(form_status == false)
    {
        return false;
    }
    $("#payment_btn").text('Processing ...').attr('disabled','disabled');
        $.ajax({
             url: "<?php echo e(route('payment-request')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'ifsc_code':ifsc_code,
                'account_holder':account_holder,
                'account_no':account_no,
                'amount':amount
                },
             error: function() {
             },
             success: function(res) {
                 console.log(res.status);
                if(res.status==true)
                {
                    $.toast({heading: 'Success',text: 'Your request successfully sent !',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    location.reload();
                }
                else
                {
                    $.toast({heading: 'Error!',text: res.msg,position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});
                    $("#payment_btn").text('Request').removeAttr('disabled');

                }
             }
          });
}
function show_cancel_modal(order_id)
{
    $("#cancelModal").modal('show');
    $("#order_id").val(order_id);
}
function show_return_modal(order_id,product_id)
{
    $("#returnModal").modal('show');
    $("#r_order_id").val(order_id);
    $("#r_product_id").val(product_id);
}
function show_payment_modal(amount)
{
    $("#payment_modal").modal('show');
    $("#amount").val(amount);
}
function change_mobile_otp(mobile)
{
    var mobile = $("#input-phone").val();
    if(mobile.length < 10)
    {
        alert("Invalid mobile no. Minimum 10 digit required");
        return false;
    }
        $.ajax({
             url: "<?php echo e(route('send-otp')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'mobile':mobile
                },
             error: function() {
             },
             success: function(res) {
                //  alert(res.otp);
                if(res.status==200)
                {
                    $("#verifyotpmodal").modal('show');
                    $.toast({heading: 'Success!',text: 'Otp send',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                }
                else
                {
                    $.toast({heading: 'Error!',text: res.msg,position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});

                }
             }
          });
}
function verifyMobileOtp()
{
    var mobile = $("#input-phone").val();
    var otp = $("#input_otp").val();
        $.ajax({
             url: "<?php echo e(route('change-mobile-no')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'mobile':mobile,
                'otp':otp,
                },
             error: function() {
             },
             success: function(res) {
                if(res.status==200)
                {
                    $.toast({heading: 'Success!',text: res.msg,position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                    location.href="<?= URL::to('/'); ?>/logout";
                }
                else
                {
                    $.toast({heading: 'Error!',text: res.msg,position: 'top-center',stack: false,icon: 'error',showHideTransition: 'slide',});

                }
             }
          });
}

$('#zero_config').DataTable();
    
$(document).ready(function() {
    var referral_code = $('#hidden_referral_code').val();
    getConnection(referral_code);
});
    
var referralArr = [];
function getConnection(referral_code = '')
{
    if(referralArr.indexOf(referral_code) !== -1)  
    {  
      var index = referralArr.indexOf(referral_code);
        if (index !== -1) {
          referralArr.splice(index+1, 1);
        }  
    }   
    else  
    {  
        referralArr.push(referral_code);
    }
    // console.log("referralArr");
    // console.log(referralArr);
    // $.each(referralArr, function(key2, val2) {
        
    // });
        
    // var connBreadcrumb = $('#connectionBreadcrumb').html();
    // console.log(connBreadcrumb);
    $.ajax({
        type: "POST",
        url: "<?= URL::to('/'); ?>/getConnection",
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            referral_code:referral_code
        },
        dataType: 'JSON',
        success: function(data){
            // console.log(data);
            html = '';
            $.each(data, function(key, val) {
                html += `<div class="col-md-3 mb-3">
                            <div class="card" style="background:linear-gradient(178deg, #64aa2d9e, #ff7c00);box-shadow:3px 5px 10px 2px #000;">
                                <center>
                                    <img class="card-img-top mt-3" src="<?php echo e(URL::asset('/user_image' )); ?>/`+val.image+`" alt="Card image cap" style="width:100px;border-radius:50px">
                                </center>
                                <div class="card-body">
                                    <h5 class="card-title">Name : `+val.fname+`</h5>
                                    <h5 class="card-title">Total Connection : `+val.total_connection+` People</h5>
                                    <h5 class="card-title">Total Earning : ₹ `;
                    if(val.total_earning != '' && val.total_earning != null)
                    {
                        html +=    ``+val.total_earning+``;
                    }
                    else
                    {
                        html +=  `0`;
                    }
                        html += `</h5>
                                    <button class="btn btn-primary" onclick="getConnection('`+val.referral_code+`')">View Connection</button>
                                </div>
                            </div>
                        </div>`;
            });
            var connBreadcrumb = ``;
            // connBreadcrumb += `<li><a  onclick="getConnection('`+referral_code+`')" style="cursor:pointer"><i class="fa fa-user"></i> `+referral_code+` -></a></li>`;
            var len=0;
            $.each(referralArr, function(key2, val2) {
                if(referralArr.length == 1 || len==0)
                {
                    connBreadcrumb += `<li><a  onclick="getConnection('`+val2+`')" style="cursor:pointer"><i class="fa fa-user"></i> `+val2+`</a></li>`;
                }
                else
                {
                    connBreadcrumb += ` -> <li><a  onclick="getConnection('`+val2+`')" style="cursor:pointer"><i class="fa fa-user"></i> `+val2+`</a></li>`;
                }
                len++;
            });
            $('#connectionBreadcrumb').html(connBreadcrumb);
            $('#connection').html(html);
        }
    });
}
</script><?php /**PATH C:\xampp\htdocs\yourearningshop\resources\views/my_account.blade.php ENDPATH**/ ?>