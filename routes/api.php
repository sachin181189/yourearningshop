<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Usercontroller as Usercontrollers;
use App\Http\Controllers\api\Homecontroller;
use App\Http\Controllers\api\Productcontroller as ProductControllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// ******************************APIS ROUTE************************************
Route::get("mobileapis/send-otp", [Usercontrollers::class,'sendOtp']);
Route::get("mobileapis/csrf-check", [Homecontroller::class,'index']);
Route::get("mobileapis/homepage-product-list", [Homecontroller::class,'getHomepageProduct']);
Route::post("mobileapis/menu-list", [Homecontroller::class,'getMenus']);
Route::get("mobileapis/category-list", [Homecontroller::class,'getCategory']);
Route::get("mobileapis/featured-category-list", [Homecontroller::class,'getFeaturedCategory']);
Route::post("mobileapis/subcategory-list", [Homecontroller::class,'getSubCategory']);
Route::post("mobileapis/register", [Usercontrollers::class,'register']);
Route::post("mobileapis/reset-password", [Usercontrollers::class,'reset_password']);
Route::post("mobileapis/send-otp", [Usercontrollers::class,'sendOtp']);
Route::post("mobileapis/send-transaction-otp", [Usercontrollers::class,'sendTransactionOtp']);
Route::post("mobileapis/send-forget-otp", [Usercontrollers::class,'sendForgetOtp']);
Route::post("user-login", [Usercontrollers::class,'login']);
Route::post("mobileapis/get-user-profile", [Usercontrollers::class,'getUserProfile']);
Route::post("mobileapis/add-to-cart", [Usercontrollers::class,'addToCart']);
Route::post("mobileapis/by-now-add-to-cart", [Usercontrollers::class,'byNowAddToCart']);
Route::post("mobileapis/get-cart-list", [Usercontrollers::class,'getCartDetail']);
Route::post("mobileapis/get-buy-now-cart-list", [Usercontrollers::class,'getByNowCartDetail']);
Route::post("mobileapis/remove-from-cart", [Usercontrollers::class,'removeFromCart']);
Route::get("mobileapis/address-type", [Usercontrollers::class,'getAddressType']);
Route::post("mobileapis/add-new-address", [Usercontrollers::class,'addNewAddress']);
Route::post("mobileapis/update-permanent-address", [Usercontrollers::class,'updatePermanentAddress']);
Route::post("mobileapis/get-user-address", [Usercontrollers::class,'getUserAddress']);
Route::post("mobileapis/remove-address", [Usercontrollers::class,'removeAddress']);
Route::post("mobileapis/product-list", [ProductControllers::class,'getProductList']);
Route::get("mobileapis/best-seller-product", [ProductControllers::class,'getBestSellerProduct']);
Route::get("mobileapis/today-deal-product", [ProductControllers::class,'getTodayDealProduct']);
Route::post("mobileapis/get-fashion-product", [ProductControllers::class,'getFashionProduct']);
Route::post("mobileapis/product-by-subcategory", [ProductControllers::class,'getProductBySubcategory']);
Route::post("mobileapis/product-by-category", [ProductControllers::class,'getProductByCategory']);
Route::post("mobileapis/product-by-search", [ProductControllers::class,'getProductBySearch']);
Route::post("mobileapis/product-detail", [ProductControllers::class,'productDetail']);
Route::get("mobileapis/get-slider", [Homecontroller::class,'getSlider']);
Route::get("mobileapis/get-banner", [Homecontroller::class,'getBanner']);
Route::post("mobileapis/add-to-wishlist", [Usercontrollers::class,'addToWishlist']);
Route::post("mobileapis/get-wishlist", [Usercontrollers::class,'getWishlist']);
Route::post("mobileapis/contact-us", [Homecontroller::class,'contactUs']);
Route::get("mobileapis/blog-list", [Homecontroller::class,'getBlog']);
Route::post("mobileapis/blog-detail", [Homecontroller::class,'getBlogDetail']);
Route::post("mobileapis/subscribe", [Homecontroller::class,'subscribe']);
Route::post("mobileapis/apply-coupon", [Usercontrollers::class,'applyCoupon']);
Route::post("mobileapis/save-order", [Usercontrollers::class,'saveOrder1']);
Route::post("mobileapis/by-now-save-order", [Usercontrollers::class,'ByNowSaveOrder']);
Route::post("mobileapis/user-order", [Usercontrollers::class,'getUserOrderList']);
Route::post("mobileapis/update-user-profile", [Usercontrollers::class,'updateProfile']);
Route::post("mobileapis/update-aadhar-front", [Usercontrollers::class,'updateAadharFront']);
Route::post("mobileapis/update-aadhar-back", [Usercontrollers::class,'updateAadharBack']);
Route::post("mobileapis/order-detail", [Usercontrollers::class,'orderDetail']);
Route::post("mobileapis/move-to-cart", [Usercontrollers::class,'moveToCart']);
Route::post("mobileapis/remove-from-wishlist", [Usercontrollers::class,'removeFromWishlist']);
Route::post("mobileapis/vendor-register", [Usercontrollers::class,'vendorRegister']);
Route::post("mobileapis/social-register", [Usercontrollers::class,'socialRegister']);
Route::post("mobileapis/cart-to-wishlist", [Usercontrollers::class,'cart_to_wishlist']);
Route::post("mobileapis/check-user", [Usercontrollers::class,'check_user']);

Route::post("mobileapis/submit-review", [ProductControllers::class,'submitReview']);
Route::post("mobileapis/product-review-list", [ProductControllers::class,'getProductReview']);
Route::get("mobileapis/get-footer-data", [Homecontroller::class,'getFooterData']);
Route::post("mobileapis/get-cartcount", [ProductControllers::class,'getCartCount']);
Route::post("mobileapis/get-wishlistcount", [ProductControllers::class,'getWishlistCount']);
Route::get("mobileapis/get-brand", [Homecontroller::class,'getBrands']);
Route::post("mobileapis/get-blog-comment", [Homecontroller::class,'getBlogComment']);
Route::post("mobileapis/save-blog-comment", [Homecontroller::class,'saveBlogComment']);

Route::get("mobileapis/get-privacy-policy", [Homecontroller::class,'getPrivacyPolicy']);
Route::get("mobileapis/get-term-condition", [Homecontroller::class,'getTermCondition']);
Route::get("mobileapis/get-about-us", [Homecontroller::class,'getAboutUs']);
Route::get("mobileapis/get-shipping-policy", [Homecontroller::class,'getShippingPolicy']);
Route::get("mobileapis/brand-list", [Productcontrollers::class,'getBrand']);
Route::post("mobileapis/set-default-address", [Usercontrollers::class,'setDefaultAddress']);
Route::post("mobileapis/product-by-brand", [ProductControllers::class,'getProductByBrand']);
Route::post("mobileapis/customer-network", [Usercontrollers::class,'customerNetwork']);
Route::get("mobileapis/achievers-list", [Usercontrollers::class,'achieversList']);
Route::post("mobileapis/achievers-detail", [Usercontrollers::class,'achieverDetail']);
Route::post("mobileapis/driver-order-list", [Usercontrollers::class,'driverOrderList']);
Route::post("mobileapis/driver-login", [Usercontrollers::class,'driver_login']);
Route::post("mobileapis/driver-profile", [Usercontrollers::class,'driver_profile']);
Route::post("mobileapis/change-order-status", [Usercontrollers::class,'change_order_status']);
Route::post("mobileapis/user-wallet", [Usercontrollers::class,'userWallet']);
Route::post("mobileapis/remove-notification", [Homecontroller::class,'removeNotification']);
Route::get("mobileapis/document-list", [Homecontroller::class,'document_list']);
Route::post("mobileapis/recently_viewed_product", [Usercontrollers::class,'recently_viewed_product']);
Route::post("mobileapis/update-mobile-no", [Usercontrollers::class,'update_mobile_no']);
Route::post("mobileapis/get-user-wallet-amount", [Usercontrollers::class,'getuserwalletamount']);
Route::post("mobileapis/get-cart-count", [Usercontrollers::class,'getCartCount']);
Route::post("mobileapis/return-order", [Usercontrollers::class,'return_order']);
Route::post("mobileapis/cancel-order", [Usercontrollers::class,'cancel_order']);
Route::post("mobileapis/add-to-cart-list", [Usercontrollers::class,'addToCartList']);

Route::post("mobileapis/productdetail-with-variant", [ProductControllers::class,'getAllVariant']);


Route::post("mobileapis/add-to-shoping-list", [Usercontrollers::class,'addToShopingList']);
Route::post("mobileapis/remove-from-shoping-list", [Usercontrollers::class,'removeFromShopingList']);
Route::post("mobileapis/get-shoping-list", [Usercontrollers::class,'getShopingList']);
Route::get("mobileapis/get-coupon-list", [Homecontroller::class,'getCoupon']);
Route::post("mobileapis/bulk-add-to-cart", [Usercontrollers::class,'bulk_add_to_cart']);
Route::post("mobileapis/update-shipping-address", [Usercontrollers::class,'updateShippingAddress']);

Route::get("mobileapis/video-list", [Homecontroller::class,'getVideo']);
Route::get("mobileapis/check-app-active", [Homecontroller::class,'check_app_active']);

Route::post("mobileapis/user-order-for-contact-page", [Usercontrollers::class,'getOrderListForContactPage']);
Route::post("mobileapis/get-notification-list", [Homecontroller::class,'getNotification']);
Route::post("mobileapis/payment-transfer", [Usercontrollers::class,'payment_transfer']);
// store
