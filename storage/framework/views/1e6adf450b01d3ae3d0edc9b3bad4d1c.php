<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__currentLoopData = $product_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
            $id = $value['id'];
            $product_name = $value['product_name'];
            $vendor_id = $value['vendor_id'];
            $category = $value['category'];
            $category_id = $value['category_id'];
            $brand_id = $value['brand_id'];
            $brand_name = $value['brand_name'];
            $subcategory = $value['subcategory'];
            $subcategory_id = $value['subcategory_id'];
            $sub_subcategory_id = $value['sub_subcategory_id'];
            $product_description = $value['product_description'];
            $product_type = $value['product_type'];
            $image = $value['product_image'];
            $stock = $value['stock'];
            $price = $value['price'];
            $offer_price = $value['offer_price'];
            $color = $value['color'];
            $size = $value['size'];
            $unit_text = $value['unit_text'];
            $unit = $value['unit'];
            $variant_name1 = $value['variant_name1'];
            $variant_value1 = $value['variant_value1'];
            $variant_name2 = $value['variant_name2'];
            $variant_value2 = $value['variant_value2'];
            $status = $value['status'];
            $slug = $value['slug'];
            $cat_slug = $value['cat_slug'];
            $sub_cat_slug = $value['sub_cat_slug'];
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<style>
    .variant.active
    { 
        background-color: #b0eba4;
        border-color: #98f397;
    }
    .variant:focus 
    {
        box-shadow: none;
    }
    .star {
    visibility:hidden;
    font-size:30px;
    cursor:pointer;
}
.star:before {
   content: "\2606";
   position: absolute;
   visibility:visible;
}
.star:checked:before {
   content: "\2605";
   position: absolute;
}
</style>
        <!--breadcrumb-area start-->
        <div class="breadcrumb-area mt-25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?php echo e(URL::to('/shop')); ?>">Home <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="<?php echo e(URL::to('product-list')); ?>/<?php echo e($cat_slug); ?>"><?php echo e($category); ?><i class="fa fa-angle-right"></i></a></li>
                                <li><?php echo e($subcategory); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb-area end-->
    </header>
    <!--header-area end-->
    <!--product-details-area start-->
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
    <div class="product-details-area mt-20">
        <div class="container-fluid">
            <div class="product-details">
                <div class="row">
                    <div class="col-lg-1 col-md-2">
                        <ul class="nav nav-tabs products-nav-tabs">
                            <?php $__currentLoopData = $product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="active" data-toggle="tab" href="#product-1"><img src="<?php echo e(URL::asset('product_image' )); ?>/<?php echo e($pi['image']); ?>" alt="" onclick="setImage(this);"/></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                            <li><a class="active" data-toggle="tab" href="#product-1"><img src="<?php echo e(URL::asset('product_image' )); ?>/<?php echo e($image); ?>" alt="" onclick="setImage(this);"/></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tab-content">
                            <div id="product-1" class="tab-pane fade in show active">
                                <div class="product-details-thumb">
                                    <a id="mainimageLink" class="venobox" data-gall="myGallery" href="<?php echo e(URL::asset('product_image' )); ?>/<?php echo e($image); ?>"><i class="fa fa-search-plus"></i></a>
                                    <img  id="mainimage" src="<?php echo e(URL::asset('product_image' )); ?>/<?php echo e($image); ?>" alt="" onclick="setImage(this);"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-sm-50">
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="product-details-desc">
                                    <div class="product-price-rating">
                                        <h2 class="mb-0"><?php echo e($product_name); ?></h2>
                                        <!--<div class="pull-left">-->
                                        <!--    <i class="fa fa-star"></i>-->
                                        <!--    <i class="fa fa-star"></i>-->
                                        <!--    <i class="fa fa-star"></i>-->
                                        <!--    <i class="fa fa-star"></i>-->
                                        <!--    <i class="fa fa-star-o"></i>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="product-action stuck text-left">
                                        <div class="product-price-rating">
                                            <?php if($offer_price != $price): ?>
                                            <div>
                                                <del id="main_price">₹ <?php echo e(number_format($price,2)); ?></del>
                                            </div>
                                            <?php endif; ?>
                                            <span id="offer_price">₹ <?php echo e(number_format($offer_price,2)); ?></span>
                                        </div>
                                        
                        
                                        
                                    </div>
                                    <div class="mt-3 mb-2">
                                        <?php if($variant_value1 != ''): ?>
                                            <button class="btn variant active mr-1" onclick="getSecondVariant('<?php echo e($variant_value1); ?>',<?php echo e($id); ?>,0);" ><?php echo e($variant_value1); ?></button>
                                            <?php if($variaty): ?>
                                                <?php $__currentLoopData = $variaty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <button class="btn variant mr-1" onclick="getSecondVariant('<?php echo e($vc->variant_value1); ?>',<?php echo e($id); ?>,1);"><?php echo e($vc->variant_value1); ?></button>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-2">
                                        <?php if($variant_value2 != ''): ?>
                                            <div id="var2_list">
                                                <button class="btn variant active" onclick="getPriceByBothvariant('<?php echo e($variant_value2); ?>',<?php echo e($id); ?>,0);"><?php echo e($variant_value2); ?></button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" value="<?php echo e($variant_value1); ?>" id="cart_variant1">
                                    <input type="hidden" value="<?php echo e($variant_value2); ?>" id="cart_variant2">
                                    <input type="hidden" value="0" id="tb_type">
                                    <div class="product-meta">
                                        <ul class="list-none">
                                            <li>Categories:
                                                <a href="<?php echo e(URL::to('product-list')); ?>/<?php echo e($cat_slug); ?>"><?php echo e($category); ?></a>,
                                                <a href="<?php echo e(URL::to('product-list')); ?>/<?php echo e($cat_slug); ?>/<?php echo e($sub_cat_slug); ?>"><?php echo e($subcategory); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="product-action stuck text-left">
                                    <!--<div class="free-delivery">-->
                                    <!--    <a href="#"><i class="ti-truck"></i> Free Delivery</a>-->
                                    <!--</div>-->
                                    <div class="product-quantity mt-15">
                                        <label>Quantity:</label>
                                        <!--<input type="number" value="1" id="input-quantity" />-->
                        <div style="max-width: 130px;position: relative;left: 22%;" class="input-group btn-block">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" title="" data-toggle="tooltip" type="button" data-original-title="Update" onclick="changeCartQty1(1);" style="border-radius:0;">-</button>
                            </span>
                            <input type="text" class="form-control quantity" size="1" value="1" name="quantity" id="input-quantity" readonly style="text-align:center;">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" title="" data-toggle="tooltip" type="button" data-original-title="Update" onclick="changeCartQty1(2);" style="border-radius:0;">+</button>
                            </span>
                        </div>
                                    </div>
                                    
                                    <div class="add-to-get mt-50">
                                        
                                        <span id="cartbtn">
                                            <a style="cursor:pointer;" 
                                            <?php if($stock == 0): ?> disabled <?php endif; ?> id="button-cart" data-loading-text="Loading..." class="add-to-cart addtocart" 
                                            <?php if($stock > 0): ?> onclick="addToCart(<?php echo e($id); ?>,'','',1);" <?php endif; ?> ><?php if($stock == 0): ?> Out of stock <?php else: ?> Add to Cart <?php endif; ?></a>
                                            
                                            <a style="cursor:pointer;margin-top:10px;" 
                                             id="button-cart" data-loading-text="Loading..." class="add-to-cart addtocart" onclick="addToWishlist(<?php echo e($id); ?>);">
                                            Add to wishlist </a>
                                            
                                            <a style="cursor:pointer;margin-top:10px;" id="button-cart" data-loading-text="Loading..." class="add-to-cart addtocart" 
                                            onclick="addToShopingList(<?php echo e($id); ?>,'','',1);">Add to Shoping List</a>
                                        </span>
                                    </div>
                                    <div class="product-features mt-50">
                                        <ul class="list-none">
                                            <li>Satisfaction 100% Guaranteed</li>
                                            <li>Free shipping on orders over Rs.999/-</li>
                                            <li>Return Policy If goods have Problem</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product-details-area end-->
    <div class="sharethis-inline-share-buttons"></div>
    <!--product-specifications-area start-->
    <div class="product-review-area mt-45">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs product-review-nav">
                        <li><a class="active" data-toggle="tab" href="#description">Description</a></li>
                        <li><a data-toggle="tab" href="#specifications">Specifications</a></li>
                        <li><a data-toggle="tab" href="#reviews">Reviews (<?php echo e(count($review)); ?>)</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade in show active">
                            <div class="product-description">
                                <p><?php echo $product_description; ?></p>
                            </div>
                        </div>
                        <div id="specifications" class="tab-pane fade specifications">
                            <table class="table table-bordered">
                                <?php $__currentLoopData = $specification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><b><?php echo e($spec->specification); ?></b></td>
                                        <td><?php echo e($spec->speci_value); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                        <div id="reviews" class="tab-pane fade">
                            <div class="blog-comments product-comments mt-0">
                                <ul class="list-none">
                                    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="comment-avatar text-center">
                                            <img src="<?php echo e(URL::asset('user_image' )); ?>/<?php echo e($r->image); ?>" alt="" />
                                            <div class="product-rating mt-10">
                                                <?php for($i=0;$i<=$r->rating;$i++): ?>
                                                <i class="fa fa-star"></i>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <div class="comment-desc">
                                            <span><?php echo e($r->created_at); ?></span>
                                            <h4><?php echo e($r->fname); ?> <?php echo e($r->lname); ?></h4>
                                            <p><?php echo e($r->reviews); ?></p>
                                        </div>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="blog-comment-form product-comment-form mt-05">
                                <h4><span>Add Review</span></h4>
                                <form method="post" action = "<?php echo e(route('save-review')); ?>">
                                    <?php echo csrf_field(); ?>
                                <div class="row mt-30">
                                    <div class="col-sm-2">
                                        <span>Your Rating:</span>
                                        <div style="display:flex;">
                                                <input class="star" type="checkbox" title="Product rating" value="1" name="rating" id="star1" onclick="setRating(1);">
                                                <input class="star" type="checkbox" title="Product rating" value="2" name="rating" id="star2" onclick="setRating(2);">
                                                <input class="star" type="checkbox" title="Product rating" value="3" name="rating" id="star3" onclick="setRating(3);">
                                                <input class="star" type="checkbox" title="Product rating" value="4" name="rating" id="star4" onclick="setRating(4);">
                                                <input class="star" type="checkbox" title="Product rating" value="5" name="rating" id="star5" onclick="setRating(5);">
                                        </div>
                                    </div>
                                     <!--<input type="hidden" value="5" name="rating">-->
                                     <input type="hidden" value="<?php echo e($id); ?>" name="product_id">
                                     <input type="hidden" value="<?php echo e($slug); ?>" name="slug">
                                    <div class="col-sm-12">
                                        <textarea placeholder="Review" name="reviews" required></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn-common mt-25">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product-specifications-area end-->
    
    <!--products-area start-->
    <div class="best-sellers mt-45">
        <div class="container-fluid fix">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Compare With Other Products</h3>
                    </div>
                </div>
            </div>
            <div class="row four-items cv-visible">
                <?php $__currentLoopData = $compare_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($comp->slug); ?>"><?php echo e($comp->category); ?></a></small>
                                <h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($comp->slug); ?>" title="<?php echo e($comp->product_name); ?>"><?php echo e(mb_strimwidth($comp->product_name, 0, 22, "...")); ?></a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($comp->slug); ?>"><img src="<?php echo e(URL::asset('product_image' )); ?>/<?php echo e($comp->product_image); ?>" alt="" /></a>
                                <!--<div class="product-quick-view">-->
                                <!--    <a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($comp->slug); ?>">quick view</a>-->
                                <!--</div>-->
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>₹<?php echo e(number_format($comp->offer_price,2)); ?></span>
										<?php if($comp->offer_price != $comp->price): ?>
										<del>₹<?php echo e(number_format($comp->price,2)); ?></del>
										<?php endif; ?>
                                </div>
                                <!--<div class="pull-right">-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--</div>-->
                            </div>
                            <div class="product-action">
                            <!--    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
                                <a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(<?php echo e($comp->id); ?>,this);">Add to Cart</a>
                            <!--    <a href="javascript:void(0);" class="product-wishlist"  onclick="addToWishlist(<?php echo e($comp->id); ?>);"><i class="ti-heart"></i></a>-->
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!--products-area end-->
    
        <!--products-area start-->
    <div class="best-sellers mt-45">
        <div class="container-fluid fix">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Similer Products</h3>
                    </div>
                </div>
            </div>
            <div class="row four-items cv-visible">
                <?php $__currentLoopData = $similer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $simi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3">
                        <div class="product-single">
                            <div class="product-title">
                                <small><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($simi->slug); ?>"><?php echo e($simi->category); ?></a></small>
                                <h4><a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($simi->slug); ?>" title="<?php echo e($simi->product_name); ?>"><?php echo e(mb_strimwidth($simi->product_name, 0, 22, "...")); ?></a></h4>
                            </div>
                            <div class="product-thumb">
                                <a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($simi->slug); ?>"><img src="<?php echo e(URL::asset('product_image' )); ?>/<?php echo e($simi->product_image); ?>" alt="" /></a>
                                <!--<div class="product-quick-view">-->
                                <!--    <a href="<?php echo e(URL::to('product-detail')); ?>/<?php echo e($simi->slug); ?>">quick view</a>-->
                                <!--</div>-->
                            </div>
                            <div class="product-price-rating">
                                <div class="pull-left">
                                    <span>₹<?php echo e(number_format($simi->offer_price,2)); ?></span>
										<?php if($simi->offer_price != $simi->price): ?>
										<del>₹<?php echo e(number_format($simi->price,2)); ?></del>
										<?php endif; ?>
                                </div>
                                <!--<div class="pull-right">-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--    <i class="fa fa-star"></i>-->
                                <!--</div>-->
                            </div>
                            <div class="product-action">
                            <!--    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
                                <a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(<?php echo e($simi->id); ?>,this);">Add to Cart</a>
                            <!--    <a href="javascript:void(0);" class="product-wishlist"  onclick="addToWishlist(<?php echo e($simi->id); ?>);"><i class="ti-heart"></i></a>-->
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!--products-area end-->


<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
function setRating(valcount)
{
    $('.star').prop('checked', false);
    for(var i=1;i<=valcount;i++)
    {
        $('#star'+i).prop('checked', true);
    }
    
}
function changeCartQty1(type)
   {
       var cartQty = $("#input-quantity").val();
       if(type == 1)
       {
           if(cartQty != 1)
           {
               $("#input-quantity").val(parseInt(cartQty)-1);
           }
       }
       else if(type == 2)
       {
           $("#input-quantity").val(parseInt(cartQty)+1);
       }
       
   }
    function getPriceByBothvariant(varval2,product_id,type)
    {
        var varval1 = $("#cart_variant1").val();
        $.ajax({
             url: "<?php echo e(route('price-by-both-variant')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'varval1':varval1,
                'varval2':varval2,
                'product_id':product_id,
                'type':type,
                },
             error: function() {
             },
             success: function(res) {
                if(res.length > 0)
                {
                    var i=0;
                    $.each(res, function(key,val) {
                        $("#offer_price").text('₹ '+val.offer_price);
                        $("#main_price").text('₹ '+val.price);
                    });

                    $("#tb_type").val(type);
                    $("#cart_variant2").val(varval2);
                    
                }
                else
                {
                    $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
    }
    $(document).ready(function () {
    $('.variant').on('click', function () {  //  here $(this) is refering to document
        $(this).addClass('active');
    });
});
    function getSecondVariant(varval1,product_id,type)
    {
        $(this).addClass("active");
        $('.variant').removeClass("active");
        $.ajax({
             url: "<?php echo e(route('get-second-variant')); ?>",
             type: 'POST',
             data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                'varval1':varval1,
                'product_id':product_id,
                'type':type,
                },
             error: function() {
             },
             success: function(res) {
                 var var2html = ``;
                if(res.length > 0)
                {
                    var i=0;
                    $.each(res, function(key,val) {
                        if(i==0)
                        {
                            var active='active';
                            var default_price = val.price;
                            var default_offer_price = val.offer_price;
                            var default_variant2 = val.variant_value2;
                            $("#offer_price").text('₹ '+default_offer_price);
                            $("#main_price").text('₹ '+default_price);
                            $("#cart_variant2").val(default_variant2);
                        }
                        var2html += `<button class="btn variant mr-1 `+active+`" onclick="getPriceByBothvariant('`+val.variant_value2+`',`+product_id+`,1);">`+val.variant_value2+`</button>`;
                        i++;
                    });
                    $("#var2_list").html(var2html);
                    $("#tb_type").val(type);
                    $("#cart_variant1").val(varval1);
                    
                }
                else
                {
                    $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
    }
    function setImage(e)
    {
        var images = $(e).attr('src');
        $("#mainimage").attr('src',images);
        $('#mainimageLink').attr('href',images)
    }
</script>
<?php /**PATH C:\xampp\htdocs\yourearningshop\resources\views/product_detail.blade.php ENDPATH**/ ?>