<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\Usercontroller;
use App\Http\Controllers\admin\Homecontroller as Homecontrollers;
use App\Http\Controllers\admin\Categorycontroller;
use App\Http\Controllers\admin\Productcontroller;
use App\Http\Controllers\admin\Ordercontroller;

use App\Http\Controllers\vendor\Vendorcontroller;
use App\Http\Controllers\driver\Drivercontroller;

// WEBSITE
use App\Http\Controllers\Homecontroller as WebHomecontroller;
use App\Http\Controllers\Productcontroller as WebProductcontroller;
use App\Http\Controllers\Usercontroller as WebUsercontroller;
use App\Http\Controllers\RazorpayPaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Website Route start
Route::get("/", [WebHomecontroller::class,'index']);
Route::get("/shop", [WebHomecontroller::class,'shop']);
Route::get("/achivers-list", [WebHomecontroller::class,'achivers_list']);
Route::get("/achivers-detail/{id}", [WebHomecontroller::class,'achivers_detail']);
Route::get("/send-mail", [WebHomecontroller::class,'send_mail']);
Route::get("/royality-income-plan", [WebHomecontroller::class,'royality_income_plan']);
Route::get("/investment-plan", [WebHomecontroller::class,'investment_plan']);

Route::post("/set-pincode-session", [WebHomecontroller::class,'setPincodeSession'])->name('set-pincode-session');
Route::post("/save-newsletter", [WebHomecontroller::class,'save_newsletter'])->name('save-newsletter');

Route::get("/product-list/{slug}", [WebProductcontroller::class,'productList'])->name('productList');
Route::get("/product-list/search/{slug}", [WebProductcontroller::class,'productList']);
Route::get("/product-list/{catslug}/{subcatslug}", [WebProductcontroller::class,'productList']);
Route::post("/get-product", [WebProductcontroller::class,'getProduct'])->name('get-product');
Route::get("/product-by-brand/{slug}", [WebProductcontroller::class,'productByBrand']);
Route::post("/get-brand-product", [WebProductcontroller::class,'getBrandProduct'])->name('get-brand-product');
Route::post("/get-category-product", [WebProductcontroller::class,'getCategoryProduct'])->name('get-category-product');

Route::get("/product-detail/{slug}", [WebProductcontroller::class,'getProductDetail'])->name('productDetail');
Route::post("/add-to-cart", [WebProductcontroller::class,'addToCart'])->name('add-to-cart');
Route::post("/thumbnail-add-to-cart", [WebProductcontroller::class,'thumbnailAddToCart'])->name('thumbnail-add-to-cart');
Route::post("/add-to-shoping-list", [WebProductcontroller::class,'addToShopingList'])->name('add-to-shoping-list');
Route::post("/update-cart", [WebProductcontroller::class,'updateCart'])->name('update-cart');
Route::get("/login", [WebUsercontroller::class,'index']);
Route::get("/logout", [WebUsercontroller::class,'logout']);
Route::post("/user-login", [WebUsercontroller::class,'userLogin'])->name('user-login');
Route::get("/register", [WebUsercontroller::class,'register']);
Route::post("/send-otp", [WebUsercontroller::class,'sendOtp'])->name('send-otp');
Route::post("/send-transfer-otp", [WebUsercontroller::class,'sendTransferOtp'])->name('send-transfer-otp');
Route::post("/verify-transfer-otp", [WebUsercontroller::class,'verifyTransferOtp'])->name('verify-transfer-otp');
Route::post("/change-mobile-no", [WebUsercontroller::class,'change_mobile_no'])->name('change-mobile-no');
Route::post("/verify-otp", [WebUsercontroller::class,'verifyOtp'])->name('verify-otp');
Route::post("/save-user", [WebUsercontroller::class,'saveUser'])->name('save-users');
Route::get("/view-cart", [WebUsercontroller::class,'cart']);
Route::get("/shoping-list", [WebUsercontroller::class,'shoping_list']);
Route::get("/wishlist", [WebUsercontroller::class,'wishlist']);
Route::get("/checkout", [WebUsercontroller::class,'checkout']);
Route::POST("/get-cart", [WebUsercontroller::class,'getcartData'])->name('get-cart');
Route::POST("/get-shoping-list-data", [WebUsercontroller::class,'getshopinglistData'])->name('get-shoping-list-data');
Route::POST("/get-wishlist", [WebUsercontroller::class,'getWishlistData'])->name('get-wishlist');
Route::POST("/remove-cart", [WebUsercontroller::class,'removeCart'])->name('remove-cart');
Route::POST("/remove-from-shoping-list", [WebUsercontroller::class,'removeFromShopingList'])->name('remove-from-shoping-list');
Route::POST("/remove-wishlist", [WebUsercontroller::class,'removeWishlist'])->name('remove-wishlist');
Route::POST("/apply-coupon", [WebUsercontroller::class,'applyCoupon'])->name('apply-coupon');
Route::get("/about-us", [WebUsercontroller::class,'aboutus']);
Route::get("/company-detail", [WebUsercontroller::class,'company_detail']);
Route::get("/videos", [WebUsercontroller::class,'videos']);
Route::get("/privacy-policy", [WebUsercontroller::class,'privacy_policy']);
Route::get("/term-condition", [WebUsercontroller::class,'term_condition']);
Route::get("/shipping-policy", [WebUsercontroller::class,'shipping_policy']);
Route::post("/save-billing-address", [WebUsercontroller::class,'saveBillingAddress'])->name('save-billing-address');
Route::post("/save-shipping-address", [WebUsercontroller::class,'saveShippingAddress'])->name('save-shipping-address');
Route::post("/confirm-order", [WebUsercontroller::class,'confirm_order'])->name('confirm-order');
Route::get("/payment", [WebUsercontroller::class,'payment']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
Route::get("/order-failed", [RazorpayPaymentController::class,'paymentFailed'])->name('order-failed');
Route::get("/order-success", [RazorpayPaymentController::class,'paymentSuccess'])->name('order-success');
Route::post("/add-to-wishlist", [WebProductcontroller::class,'addToWishlist'])->name('add-to-wishlist');
Route::get("/all-brand", [WebProductcontroller::class,'allBrand']);
Route::get("/my-account", [WebUsercontroller::class,'myAccount']);
Route::post("/getConnection", [WebUsercontroller::class,'getConnection']);
Route::post("/update-profile", [WebUsercontroller::class,'updateProfile'])->name('update-profile');
Route::post("/update-shipping-address", [WebUsercontroller::class,'updateShippingAddress'])->name('update-shipping-address');
Route::post("/update-billing-address", [WebUsercontroller::class,'updateBillingAddress'])->name('update-billing-address');
Route::post("get-second-variant", [WebProductcontroller::class,'getSecondVariant'])->name('get-second-variant');
Route::post("price-by-both-variant", [WebProductcontroller::class,'getPriceByBothVariant'])->name('price-by-both-variant');
Route::post("check-referral", [WebUsercontroller::class,'checkRefferalCode'])->name('check-referral');
Route::post("check-grocery-available", [WebUsercontroller::class,'checkStoreAvailableForGrocery'])->name('check-grocery-available');
Route::post("/save-review", [WebProductcontroller::class,'saveProductReview'])->name('save-review');
Route::get("/contact-us", [WebUsercontroller::class,'contactUs'])->name('contact-us');
Route::post("/save-contact-us", [WebUsercontroller::class,'saveContactUs'])->name('save-contact-us');
Route::get("/bulk-add-to-cart", [WebUsercontroller::class,'bulk_add_to_cart'])->name('bulk-add-to-cart');
Route::get("/sendsms", [WebUsercontroller::class,'sendsms'])->name('sendsms');
Route::get("/forget-password", [WebUsercontroller::class,'forget_password'])->name('forget-password');
Route::get("/become-a-vendor", [WebUsercontroller::class,'become_vendor'])->name('become-a-vendor');
Route::post("/save-vendor", [WebUsercontroller::class,'saveVendor'])->name('save-vendor');
Route::get("/our-store", [WebUsercontroller::class,'store_list'])->name('our-store');
Route::get("/our-product", [WebProductcontroller::class,'ourProductList']);

Route::post("/send-forget-otp", [WebUsercontroller::class,'sendForgetOtp'])->name('send-forget-otp');
Route::post("/verify-forget-otp", [WebUsercontroller::class,'verifyForgetOtp'])->name('verify-forget-otp');
Route::post("/reset-user-password", [WebUsercontroller::class,'reset_password'])->name('reset-user-password');

Route::post("/monthly-commission", [WebUsercontroller::class,'monthlyCommission'])->name('monthly-commission');
Route::post("/user-cancel-order", [WebUsercontroller::class,'cancel_order'])->name('user-cancel-order');
Route::post("/user-return-product", [WebUsercontroller::class,'return_order'])->name('user-return-product');

Route::post("/payment-request", [WebUsercontroller::class,'payment_request'])->name('payment-request');
Route::get("remove-shipping-address/{id}", [WebUsercontroller::class,'removeShippingAddress'])->name('remove-shipping-address');
Route::get("remove-billing-address/{id}", [WebUsercontroller::class,'removeBillingAddress'])->name('remove-billing-address');
// Website Route end

// Route::get('/admin', function () {
//     return view('admin.login');
// });
Route::get("yes-admin", [Usercontroller::class,'index']);

Route::post("admin/login", [Usercontroller::class,'login'])->name('admin.login');
Route::get("admin/dashboard", [Usercontroller::class,'dashboard']);
Route::get("admin/logout", [Usercontroller::class,'logout']);
Route::get("admin/profile", [Usercontroller::class,'adminProfile']);
Route::post("admin/update-admin-profile", [Usercontroller::class,'updateAdminProfile'])->name('update-admin-profile');
Route::get("admin/message", [Usercontroller::class,'contactusList']);
Route::post("admin/deletemessage", [Usercontroller::class,'deleteMessage'])->name('deletemessage');
Route::post("admin/readnotification", [Usercontroller::class,'readNotification'])->name('readnotification');
Route::post("admin/monthly-report", [Usercontroller::class,'monthlyReport'])->name('monthly-report');


// *******************************Category Route Start*************************************
Route::get("admin/category-list", [Categorycontroller::class,'getCategory']);
Route::get("admin/add-new-category", [Categorycontroller::class,'addNewCategory'])->name('add-new-category');
Route::get("admin/edit-category/{id}", [Categorycontroller::class,'addNewCategory'])->name('edit-category');
Route::get("admin/sub-category-list", [Categorycontroller::class,'getSubategory']);
Route::get("admin/add-new-subcategory", [Categorycontroller::class,'addNewSubategory'])->name('add-new-subcategory');
Route::get("admin/edit-subcategory/{id}", [Categorycontroller::class,'addNewSubategory'])->name('edit-subcategory');
Route::get("admin/sub-subcategory-list", [Categorycontroller::class,'getSubsubategory']);
Route::get("admin/add-new-subsubcategory", [Categorycontroller::class,'addNewSubsubcategory'])->name('add-new-subsubcategory');
Route::get("admin/edit-subsubcategory/{id}", [Categorycontroller::class,'addNewSubsubcategory'])->name('edit-subsubcategory');
Route::post("admin/getsubcategory", [Categorycontroller::class,'getSubcategoryByAjax'])->name('getsubcategory');
Route::post("admin/getsubsubcategory", [Categorycontroller::class,'getSubsubcategoryByAjax'])->name('getsubsubcategory');
Route::post("admin/save-category", [Categorycontroller::class,'saveCategory']);
Route::post("admin/update-category", [Categorycontroller::class,'updateCategory'])->name('update-category');
Route::post("admin/save-subcategory", [Categorycontroller::class,'saveSubategory']);
Route::post("admin/update-subcategory", [Categorycontroller::class,'updateSubategory'])->name('update-subcategory');
Route::post("admin/save-subsubcategory", [Categorycontroller::class,'saveSubsubcategory']);
Route::post("admin/update-subsubcategory", [Categorycontroller::class,'updateSubsubcategory'])->name('update-subsubcategory');
// *******************************Category Route End*************************************

// *******************************Vendor Route Start*************************************
Route::get("admin/vendor-list", [Usercontroller::class,'vendorList']);
Route::get("admin/add-new-vendor", [Usercontroller::class,'addNewVendor'])->name('add-new-vendor');
Route::post("admin/save-vendor", [Usercontroller::class,'saveVendor']);
Route::get("admin/edit-vendor/{id}", [Usercontroller::class,'addNewVendor'])->name('edit-vendor');
Route::post("admin/update-vendor", [Usercontroller::class,'updateVendor'])->name('update-vendor');
Route::get("admin/vendor-detail/{id}", [Usercontroller::class,'vendor_detail'])->name('vendor-detail');
Route::get('/vendor', function () {
    return view('vendor/login');
});
Route::post("vendor/login", [Vendorcontroller::class,'login'])->name('vendor.login');
Route::get("vendor/dashboard", [Vendorcontroller::class,'dashboard']);
Route::get("vendor/vendor-earning-detail", [Vendorcontroller::class,'vendor_earning_detail']);
Route::get("vendor/product-sell-report", [Vendorcontroller::class,'product_sell_report'])->name('product-sell-report');

//*****************Driver Module */

Route::get("driver", [Drivercontroller::class,'index']);
Route::post("driver/login", [Drivercontroller::class,'login'])->name('driver/login');
Route::get("driver/dashboard", [Drivercontroller::class,'dashboard']);
Route::get("driver/driver-order-list", [Drivercontroller::class,'driverOrderList']);
Route::get("driver/order-list", [Drivercontroller::class,'dOrderList']);
Route::get("driver/driver-view-order/{id}", [Drivercontroller::class,'driverOrderDetail']);
Route::get("driver/driver-profile", [Drivercontroller::class,'driverProfile']);
Route::post("update-driver-profile", [Drivercontroller::class,'updateDriverProfile'])->name('update-driver-profile');
Route::get("driver/logout", [Drivercontroller::class,'logout']);
Route::get("driver/forget-password", [Drivercontroller::class,'forgetPassword']);
Route::get("driver/verify-otp", [Drivercontroller::class,'verifyOtp']);
Route::post("driver/verify", [Drivercontroller::class,'verify'])->name('verifyotp');
Route::post("driver/send-reset-code", [Drivercontroller::class,'sendResetCode'])->name('driver.send-reset-code');
Route::post("driver/reset-password", [Drivercontroller::class,'resetPassword'])->name('driver-reset-password');
Route::get("driver/change-password", [Drivercontroller::class,'viewResetForm']);
Route::get("driver/page-expired", [Drivercontroller::class,'pageExpired']);
Route::post("driver/changeorderstatus", [Drivercontroller::class,'changeOrderStatus'])->name('driver.changeorderstatus');

//*****************Driver Module */

Route::post("vendor/changeorderstatus", [Vendorcontroller::class,'changeOrderStatus'])->name('vendor-changeorderstatus');
Route::get("vendor/product-list", [Vendorcontroller::class,'productList']);
Route::get("vendor/add-new-product", [Vendorcontroller::class,'addNewProduct']);
Route::post("vendor/vendor-save-product", [Vendorcontroller::class,'saveProduct'])->name('vendor-save-product');
Route::get("vendor/edit-product/{id}", [Vendorcontroller::class,'addNewProduct'])->name('vendor-edit-product');
Route::post("vendor/update-product", [Vendorcontroller::class,'updateProduct'])->name('vendor-update-product');
Route::post("vendor/changeproductstatus", [Vendorcontroller::class,'changeProductStatus'])->name('vendor-changeproductstatus');
Route::post("vendor/removeproductstatus", [Vendorcontroller::class,'removeProductStatus'])->name('vendor-removeproductstatus');
Route::get("vendor/logout", [Vendorcontroller::class,'logout']);

Route::get("vendor/forget-password", [Vendorcontroller::class,'forgetPassword']);
Route::get("vendor/change-password", [Vendorcontroller::class,'viewResetForm']);
Route::post("vendor/send-reset-code", [Vendorcontroller::class,'sendResetCode'])->name('vendor.send-reset-code');
Route::post("vendor/reset-password", [Vendorcontroller::class,'resetPassword'])->name('vendor.reset-password');
Route::get("vendor/vendor-order-list", [Vendorcontroller::class,'vendorOrderList']);
Route::get("vendor/vendor-view-order/{id}", [Vendorcontroller::class,'vendorOrderDetail']);
Route::get("vendor/vendor-profile", [Vendorcontroller::class,'vendorProfile']);
Route::post("update-vendor-profile", [Vendorcontroller::class,'updateVendorProfile'])->name('update-vendor-profile');
Route::post("vendor-monthly-report", [Vendorcontroller::class,'monthlyReport'])->name('vendor-monthly-report');

Route::get("vendor/add-product-gallery/{product_id}", [Vendorcontroller::class,'addNewProductGallery']);
Route::get("vendor/edit-product-gallery/{product_id}/{id}", [Vendorcontroller::class,'addNewProductGallery']);
Route::post("vendor/save-product-image", [Vendorcontroller::class,'saveProductImage'])->name('save-vendor-product-image');
Route::post("vendor/update-product-image", [Vendorcontroller::class,'updateProductImage'])->name('update-vendor-product-image');


Route::post("vendor/deletemessage", [Usercontroller::class,'deleteMessage'])->name('vendor_deletemessage');
Route::post("vendor/readnotification", [Usercontroller::class,'readNotification'])->name('vendor_readnotification');

Route::post("vendor/settlement", [Vendorcontroller::class,'monthlySettlement'])->name('monthly-settlement');


// *******************************Vendor Route END*************************************

// *********************************Product Route*****************************************

Route::get("admin/add-product", [Productcontroller::class,'addProduct']);
Route::post("admin/save-new-product", [Productcontroller::class,'saveNewProduct']);


Route::get("admin/product-list", [Productcontroller::class,'productList']);
Route::get("admin/add-new-product", [Productcontroller::class,'addNewProduct']);
Route::post("admin/save-product", [Productcontroller::class,'saveProduct']);
Route::get("admin/edit-product/{id}", [Productcontroller::class,'addNewProduct'])->name('edit-product');
Route::post("admin/update-product", [Productcontroller::class,'updateProduct'])->name('update-product');
Route::post("admin/changeproductstatus", [Productcontroller::class,'changeProductStatus'])->name('changeproductstatus');
Route::post("admin/removeproductstatus", [Productcontroller::class,'removeProductStatus'])->name('removeproductstatus');
Route::get("admin/product-report", [Productcontroller::class,'productReport']);
Route::get("admin/product-detail/{id}", [Productcontroller::class,'productDetail'])->name('product-detail');
Route::get("admin/add-product-gallery/{product_id}", [Productcontroller::class,'addNewProductGallery']);
Route::get("admin/edit-product-gallery/{product_id}/{id}", [Productcontroller::class,'addNewProductGallery']);
Route::post("admin/save-product-image", [Productcontroller::class,'saveProductImage'])->name('save-product-image');
Route::post("admin/update-product-image", [Productcontroller::class,'updateProductImage'])->name('update-product-image');
Route::post("admin/getspecification", [Productcontroller::class,'getSpecification'])->name('getspecification');
Route::post("admin/subcategory-variant", [Productcontroller::class,'getSubcategoryVariant'])->name('subcategory-variant');

Route::get("admin/brand-list", [Productcontroller::class,'brand_list']);
Route::get("admin/add-new-brand", [Productcontroller::class,'addNewBrand'])->name('add-new-brand');
Route::get("admin/edit-brand/{id}", [Productcontroller::class,'addNewBrand'])->name('edit-brand');
Route::post("admin/save-brand", [Productcontroller::class,'saveBrand']);
Route::post("admin/update-brand", [Productcontroller::class,'updateBrand'])->name('update-brand');

Route::get("admin/add-brand-gallery/{brand_id}", [Productcontroller::class,'addNewBrandGallery']);
Route::get("admin/edit-brand-gallery/{brand_id}/{id}", [Productcontroller::class,'addNewBrandGallery']);
Route::post("admin/save-brand-image", [Productcontroller::class,'saveBrandImage'])->name('save-brand-image');
Route::post("admin/update-brand-image", [Productcontroller::class,'updateBrandImage'])->name('update-brand-image');

Route::get("admin/remove-product-image/{product_id}/{id}", [Productcontroller::class,'removeProductImage']);



Route::get("admin/unit-list", [Productcontroller::class,'getUnitList']);
Route::get("admin/add-new-unit", [Productcontroller::class,'addNewUnit'])->name('add-new-unit');
Route::get("admin/edit-unit/{id}", [Productcontroller::class,'addNewUnit'])->name('edit-unit');
Route::post("admin/save-unit", [Productcontroller::class,'saveUnit'])->name('save-unit');
Route::post("admin/update-unit", [Productcontroller::class,'updateUnit'])->name('update-unit');
Route::post("admin/all-unit-list", [Productcontroller::class,'getAllUnitList'])->name('all-unit-list');
// *********************************Product Route*****************************************

// *********************************Product Route*****************************************
Route::get("admin/customer-list", [Usercontroller::class,'customerList']);
Route::post("admin/changestatus", [Usercontroller::class,'changeStatus'])->name('changestatus');
Route::get("admin/forget-password", [Usercontroller::class,'forgetPassword']);
Route::get("admin/change-password", [Usercontroller::class,'viewResetForm']);
Route::post("admin/send-reset-code", [Usercontroller::class,'sendResetCode'])->name('send-reset-code');
Route::post("admin/reset-password", [Usercontroller::class,'resetPassword'])->name('reset-password');
Route::get("admin/customer-detail/{id}", [Usercontroller::class,'customerDetail']);

Route::get("admin/user-list", [Usercontroller::class,'userList']);
Route::get("admin/add-new-user", [Usercontroller::class,'addNewUser'])->name('add-new-user');
Route::post("admin/changeuserstatus", [Usercontroller::class,'changeUserStatus'])->name('changeuserstatus');
Route::get("admin/edit-user/{id}", [Usercontroller::class,'addNewUser'])->name('edit-user');
Route::post("admin/save-user", [Usercontroller::class,'saveUser'])->name('save-user');
Route::post("admin/update-user", [Usercontroller::class,'updateUser'])->name('update-user');

Route::get("admin/achivers-list", [Usercontroller::class,'achiversList']);
Route::get("admin/add-new-achivers", [Usercontroller::class,'add_new_achivers']);
Route::get("admin/edit-achivers/{id}", [Usercontroller::class,'add_new_achivers']);
Route::post("admin/save-achivers", [Usercontroller::class,'save_achivers'])->name('save-achivers');
Route::post("admin/update-achivers", [Usercontroller::class,'update_achivers'])->name('update-achivers');
Route::post("admin/remove-achivers", [Usercontroller::class,'remove_achivers'])->name('remove-achivers');

Route::get("admin/testimonial-list", [Usercontroller::class,'testimonialList']);
Route::get("admin/add-new-testimonial", [Usercontroller::class,'add_new_testimonial']);
Route::get("admin/edit-testimonial/{id}", [Usercontroller::class,'add_new_testimonial']);
Route::post("admin/save-testimonial", [Usercontroller::class,'save_testimonial'])->name('save-testimonial');
Route::post("admin/update-testimonial", [Usercontroller::class,'update_testimonial'])->name('update-testimonial');
Route::post("admin/remove-testimonial", [Usercontroller::class,'remove_testimonial'])->name('remove-testimonial');

// *********************************Product Route end*****************************************

// *********************************Driver Module Start***************************************
Route::get("admin/driver-list", [Usercontroller::class,'driverList']);
Route::get("admin/add-new-driver", [Usercontroller::class,'addNewDriver']);
Route::get("admin/edit-driver/{id}", [Usercontroller::class,'addNewDriver']);
Route::get("admin/driver-detail/{id}", [Usercontroller::class,'driver_detail']);
Route::post("admin/save-driver", [Usercontroller::class,'saveDriver'])->name('save-driver');
Route::post("admin/update-driver", [Usercontroller::class,'updateDriver'])->name('update-driver');
Route::get("admin/edit-driver-aadhar/{id}", [Usercontroller::class,'editDriverAadhar'])->name('edit-driver-aadhar');
Route::post("admin/update-aadhar", [Usercontroller::class,'updateAadhar'])->name('update-aadhar');
Route::get("admin/edit-driver-rc/{id}", [Usercontroller::class,'editDriverRc'])->name('edit-driver-rc');
Route::post("admin/update-rc", [Usercontroller::class,'updateRc'])->name('update-rc');
Route::post("admin/show-connection", [Usercontroller::class,'show_connection'])->name('show-connection');

// *********************************Driver Module End*****************************************

Route::get("admin/add-new-store", [Homecontrollers::class,'add_new_store']);
Route::post("admin/save-store", [Homecontrollers::class,'save_store'])->name('save-store');
Route::post("admin/update-store", [Homecontrollers::class,'update_store'])->name('update-store');

Route::get("admin/video-list", [Homecontrollers::class,'videoList']);
Route::get("admin/add-new-video", [Homecontrollers::class,'addNewVideo']);
Route::get("admin/edit-video/{id}", [Homecontrollers::class,'addNewVideo'])->name('edit-video');
Route::post("admin/save-video", [Homecontrollers::class,'saveVideo'])->name('save-video');
Route::post("admin/update-video", [Homecontrollers::class,'updateVideo'])->name('update-video');
Route::post("admin/removevideo", [Homecontrollers::class,'removeVideo'])->name('removevideo');

// *********************************Slider Route*****************************************
Route::get("admin/slider-list", [Homecontrollers::class,'sliderList']);
Route::get("admin/add-new-slider", [Homecontrollers::class,'addNewSlider']);
Route::post("admin/save-slider", [Homecontrollers::class,'saveSlider']);
Route::get("admin/edit-slider/{id}", [Homecontrollers::class,'addNewSlider'])->name('edit-slider');
Route::post("admin/update-slider", [Homecontrollers::class,'updateSlider'])->name('update-slider');
Route::post("admin/removeslider", [Homecontrollers::class,'removeSlider'])->name('removeslider');
// *********************************Slider Route end*****************************************

Route::get("admin/edit-store/{id}", [Homecontrollers::class,'add_new_store'])->name('edit-store');

// *********************************Our Product Route*****************************************
Route::get("admin/our-product", [Productcontroller::class,'ourProductList']);
Route::get("admin/add-new-our-product", [Productcontroller::class,'addNewOurProduct']);
Route::post("admin/save-our-product", [Productcontroller::class,'saveOurProduct']);
Route::get("admin/edit-our-product/{id}", [Productcontroller::class,'addNewOurProduct'])->name('edit-our-product');
Route::post("admin/update-our-product", [Productcontroller::class,'updateOurProduct'])->name('update-our-product');
Route::post("admin/removeourproduct", [Productcontroller::class,'removeOurProduct'])->name('removeourproduct');
// *********************************Our Product end*****************************************

// *********************************Blog Route***********************************************
Route::get("admin/blog-list", [Homecontrollers::class,'blogList']);
Route::get("admin/add-new-blog", [Homecontrollers::class,'addNewBlog']);
Route::post("admin/save-blog", [Homecontrollers::class,'saveBlog']);
Route::get("admin/edit-blog/{id}", [Homecontrollers::class,'addNewBlog'])->name('edit-blog');
Route::post("admin/update-blog", [Homecontrollers::class,'updateBlog'])->name('update-blog');

// *********************************Blog End***********************************************


Route::get("admin/coupon-list", [Homecontrollers::class,'couponList']);
Route::get("admin/add-new-coupon", [Homecontrollers::class,'addNewCoupon']);
Route::post("admin/save-coupon", [Homecontrollers::class,'saveCoupon']);
Route::get("admin/edit-coupon/{id}", [Homecontrollers::class,'addNewCoupon'])->name('edit-coupon');
Route::post("admin/update-coupon", [Homecontrollers::class,'updateCoupon'])->name('update-coupon');
Route::post("admin/removecoupon", [Homecontrollers::class,'deleteCoupon'])->name('removecoupon');

// *********************************Banner Route*****************************************
Route::get("admin/banner-list", [Homecontrollers::class,'bannerList']);
Route::get("admin/edit-banner/{id}", [Homecontrollers::class,'editBanner'])->name('edit-banner');
Route::post("admin/update-banner", [Homecontrollers::class,'updateBanner'])->name('update-banner');
// *********************************Banner Route end*****************************************

// *********************************Document Route*****************************************
Route::get("admin/document-list", [Homecontrollers::class,'documentList']);
Route::get("admin/edit-document/{id}", [Homecontrollers::class,'editDocument'])->name('edit-document');
Route::post("admin/update-document", [Homecontrollers::class,'updateDocument'])->name('update-document');
// *********************************Banner Route end*****************************************

// *********************************Order Route*****************************************
Route::get("admin/order-list", [Ordercontroller::class,'orderList'])->name('order-list');
Route::get("admin/view-order/{id}", [Ordercontroller::class,'orderDetail'])->name('view-order');
Route::post("admin/changeorderstatus", [Ordercontroller::class,'changeOrderStatus'])->name('changeorderstatus');
Route::post("admin/generateinvoice", [Ordercontroller::class,'generateInvoice'])->name('generateinvoice');
Route::post("admin/assign-driver", [Ordercontroller::class,'assignDriver'])->name('assign-driver');

// *********************************Order Route end*****************************************

// Payment List start
Route::get("admin/payment-list", [Ordercontroller::class,'paymentList'])->name('payment-list');
Route::get("admin/payment-list/{payment_method}", [Ordercontroller::class,'paymentList']);
Route::post("admin/filter-by-method", [Ordercontroller::class,'filterByPaymentMethod'])->name('filter-by-method');

// Payment List end



// *********************************Company Route start*****************************************
Route::get("admin/company-profile", [Homecontrollers::class,'manageCompanyProfile']);
Route::post("admin/update-company-profile", [Homecontrollers::class,'updateCompanyProfile'])->name('update-company-profile');
Route::get("admin/edit-aboutus", [Homecontrollers::class,'editAboutUs']);
Route::post("admin/update-aboutus", [Homecontrollers::class,'updateAboutUs'])->name('update-aboutus');

Route::get("admin/income-plan", [Homecontrollers::class,'manageIncomePlan']);
Route::post("admin/update-income-plan", [Homecontrollers::class,'updateIncomePlan'])->name('update-income-plan');

Route::get("admin/investment-plan", [Homecontrollers::class,'manageInvestmentPlan']);
Route::post("admin/update-investment-plan", [Homecontrollers::class,'updateInvestmentPlan'])->name('update-investment-plan');

Route::get("admin/edit-privacy-policy", [Homecontrollers::class,'editPrivacyPolicy']);
Route::post("admin/update-privacy-policy", [Homecontrollers::class,'updatePrivacyPolicy'])->name('update-privacy-policy');

Route::get("admin/edit-term-condition", [Homecontrollers::class,'editTermCondition']);
Route::post("admin/update-term-condition", [Homecontrollers::class,'updatetermCondition'])->name('update-term-condition');

Route::get("admin/edit-shipping-policy", [Homecontrollers::class,'editShippingPolicy']);
Route::post("admin/update-shipping-policy", [Homecontrollers::class,'updateShippingPolicy'])->name('update-shipping-policy');

Route::get("admin/remove-plan-image/{type}/{column}/{id}", [Homecontrollers::class,'delete_plan_image']);

// Route::get("admin/story-list", [Homecontrollers::class,'storyList']);
// Route::get("admin/add-new-story", [Homecontrollers::class,'addNewStory']);
// Route::post("admin/save-story", [Homecontrollers::class,'saveStory']);
// Route::get("admin/edit-story/{id}", [Homecontrollers::class,'addNewStory'])->name('edit-story');
// Route::post("admin/update-story", [Homecontrollers::class,'updateStory'])->name('update-story');
// Route::post("admin/removestory", [Homecontrollers::class,'removeStory'])->name('removestory');

// *********************************Company Route end*****************************************

Route::get("register-store", [WebUsercontroller::class,'registerStore'])->name('register-store');
Route::post("send-request", [WebUsercontroller::class,'sendRequest'])->name('send-request');

Route::get("admin/store-request", [Homecontrollers::class,'storeRequest']);
Route::post("admin/provide-credential", [Homecontrollers::class,'provideCredential']);
Route::post("admin/delete-store-request", [Homecontrollers::class,'deleteRequest'])->name('deleteRequest');


// Curl function
Route::get("curl/store_settlement", [WebUsercontroller::class,'store_settlement']);
Route::get("curl/user_settlement", [WebUsercontroller::class,'customer_bp_settlement']);
