@include('header');

  <!--products-area start-->
  <div class="shop-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-lg-3">
          <div class="sidebar">
            <div class="list-filter mt-43">
              <div class="section-title">
                <h3>Categories</h3>
              </div>
            <ul class="list-none mt-25">
                @foreach($undersubcategory as $usc)
                <li>
                  <input type="checkbox" id="{{$usc->undersubcategory}}" onclick="filterbyundersubcategory({{$usc->id}});" />
                  <label for="acer">{{$usc->undersubcategory}}</label>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="list-filter mt-43">
              <div class="section-title">
                <h3>Brands</h3>
              </div>
              <ul class="list-none mt-25">
                @foreach($brand as $b)
                <li>
                  <input type="checkbox" id="{{$b->brand_name}}" onclick="filterbybrand({{$b->id}});" />
                  <label for="acer">{{$b->brand_name}}</label>
                </li>
                @endforeach
              </ul>
            </div>
            <!--<div class="price_filter mt-40">-->
            <!--  <div class="section-title">-->
            <!--    <h3>Filter by price</h3>-->
            <!--  </div>-->
            <!--  <div class="price_slider_amount">-->
            <!--    <div class="row align-items-center">-->
            <!--      <div class="col-lg-6">-->
            <!--        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />-->
            <!--      </div>-->
            <!--      <div class="col-lg-6">-->
            <!--        <button>Filter</button>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div id="slider-range"></div>-->
            <!--</div>-->
            
            <!--latest-products-->
          </div>
        </div>
        <div class="col-xl-10 col-lg-9">
          <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
              <div class="section-title">
                <h3>Shop List</h3>
              </div>
            </div>
            <div class="col-lg-10 col-md-5 text-right">
              <div class="products-sort">
                <form>
                  <select onchange="productsorting(this.value);">
                    <option value="0">Default Sorting</option>
                    <option value="1">Sort by A - Z</option>
                    <option value="2">Sort Price Low - High</option>
                    <option value="3">Sort Price High - Low</option>
                  </select>
                </form>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div id="grid-products" class="tab-pane active">
              <div class="row" id="product_list1">
                <!--<div class="col-xl-3 col-md-4 col-sm-6">-->
                <!--  <div class="product-single">-->
                <!--    <div class="product-title">-->
                <!--      <small><a href="#">Aquaracer</a></small>-->
                <!--      <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring Robot</a></h4>-->
                <!--    </div>-->
                <!--    <div class="product-thumb">-->
                <!--      <a href="#"><img src="{{ URL::asset('assets/images/products/shop/1.jpg') }}" alt="" /></a>-->
                <!--      <div class="product-quick-view">-->
                <!--        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div class="product-price-rating">-->
                <!--      <div class="pull-left">-->
                <!--        <span>$395.00</span>-->
                <!--      </div>-->
                <!--      <div class="pull-right">-->
                <!--        <i class="fa fa-star-o"></i>-->
                <!--        <i class="fa fa-star-o"></i>-->
                <!--        <i class="fa fa-star-o"></i>-->
                <!--        <i class="fa fa-star-o"></i>-->
                <!--        <i class="fa fa-star-o"></i>-->
                <!--        <span class="rating-quantity">(0)</span>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div class="product-action">-->
                <!--      <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>-->
                <!--      <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>-->
                <!--      <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </div>
            <!--<div id="list-products" class="tab-pane">-->
              <!--<div class="product-single wide-style">-->
              <!--  <div class="row align-items-center">-->
              <!--    <div class="col-xl-3 col-lg-6 col-md-6">-->
              <!--      <div class="product-thumb">-->
              <!--        <a href="#"><img src="{{ URL::asset('assets/images/products/shop/16.jpg') }}" alt="" /></a>-->
              <!--        <div class="product-quick-view">-->
              <!--          <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">-->
              <!--      <a href="#" class="add-to-wishlist"><i class="icon_heart_alt"></i></a>-->
              <!--      <div class="product-title">-->
              <!--        <small><a href="#">Samsung</a></small>-->
              <!--        <h4><a href="#">Samsung Electronics UN55MU6500 Curved 55-Inch 4K Ultra HD Smart LED TV (2019 Model)</a></h4>-->
              <!--      </div>-->
              <!--      <div class="product-rating">-->
              <!--        <i class="fa fa-star"></i>-->
              <!--        <i class="fa fa-star"></i>-->
              <!--        <i class="fa fa-star"></i>-->
              <!--        <i class="fa fa-star"></i>-->
              <!--        <i class="fa fa-star-o"></i>-->
              <!--        <span>(5)</span>-->
              <!--      </div>-->
              <!--      <div class="product-text">-->
              <!--        <p>- 4X more pixels than Full HD means you’re getting 4X the resolution, so you’ll clearly see the difference.</p>-->
              <!--        <p>- See vibrant and pure color for a realistic experience.</p>-->
              <!--        <p>- OneRemote automatically detects and controls all your connected devices and content with no manual -->
              <!--        programming required*.</p>-->
              <!--        <p>- Smooth action on fast-moving content with Motion Rate 120</p>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="col-xl-3 col-lg-4 col-md-4">-->
              <!--      <div class="product-action stuck text-left">-->
              <!--        <div class="free-delivery">-->
              <!--          <a href="#"><i class="ti-truck"></i> Free Delivery</a>-->
              <!--        </div>-->
              <!--        <div class="product-price-rating">-->
              <!--          <div>-->
              <!--            <del>629.99</del>-->
              <!--          </div>-->
              <!--          <span>$495.00</span>-->
              <!--        </div>-->
              <!--        <div class="product-stock">-->
              <!--          <p>Avability: <span>In stock</span></p>-->
              <!--        </div>-->
              <!--        <a href="#" class="add-to-cart">Add to Cart</a>-->
              <!--        <a href="#" class="add-to-cart compare">+ ADD to Compare</a>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            <!--</div>-->
          </div>
          <!--<div class="row align-items-center mt-30">-->
          <!--  <div class="col-lg-6">-->
          <!--    <div class="site-pagination">-->
          <!--      <ul>-->
          <!--        <li><a href="#" class="active">1</a></li>-->
          <!--        <li>of</li>-->
          <!--        <li><a href="#">3</a></li>-->
          <!--        <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>-->
          <!--      </ul>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-lg-6">-->
          <!--    <div class="product-results pull-right">-->
          <!--      <span>Showing 1–3 of 60 results</span>-->
          <!--      <div class="products-sort ml-35 mr-0">-->
          <!--        <form>-->
          <!--          <label>Show :</label>-->
          <!--          <select>-->
          <!--            <option>12</option>-->
          <!--            <option>8</option>-->
          <!--            <option>4</option>-->
          <!--          </select>-->
          <!--        </form>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </div>
  </div>
  <!--products-area end-->

@include('footer');
<script>
    var sortby = 0;
    var brandArr = [];
    var undersubcatArr = [];
    $( document ).ready(function() {
      getProductList();
    });
function filterbybrand(brand_id)
{
    if(brandArr.indexOf(brand_id) !== -1)  
    {  
      var index = brandArr.indexOf(brand_id);
        if (index !== -1) {
          brandArr.splice(index, 1);
        }  
    }   
    else  
    {  
        brandArr.push(brand_id);
    } 
    getProductList();
}
function productsorting(sorttype)
{
    sortby = sorttype;
    getProductList();
}
function filterbyundersubcategory(under_subcat_id)
{
    if(undersubcatArr.indexOf(under_subcat_id) !== -1)  
    {  
      var index = undersubcatArr.indexOf(under_subcat_id);
        if (index !== -1) {
          undersubcatArr.splice(index, 1);
        }  
    }   
    else  
    {  
        undersubcatArr.push(under_subcat_id);
    } 
    getProductList();
}
   function getProductList()
   {
      $.ajax({
             url: "{{ route('get-product') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "cate_slug":'{{ Request::segment(2) }}',
                 "subcat_slug":'{{ Request::segment(3) }}',
                 "brand_id":JSON.stringify(brandArr),
                 "sortby":sortby,
                 "under_sub_cat_id":JSON.stringify(undersubcatArr)
                },
             error: function() {
                // swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(productdata) {
              createProductListHtml(productdata);
             }
          });
   }

    function createProductListHtml(productdata)
    {
      var producthtml1 = ``;
      var producthtml2 = ``;
      if(productdata.length > 0)
      {
        $.each(productdata, function(key,val) 
        { 
          if(val.product_name.length > 25)
          {
              var product_name = val.product_name.substring(0,25)+"...";
          }
          else
          {
             var product_name = val.product_name;
          }

          producthtml1 += `<div class="col-xl-3 col-md-4 col-sm-6" style="margin-bottom: 4em;">
                            <div class="product-single">
                              <div class="product-title">
                                <small><a href="{{URL::to('product-detail')}}/`+val.slug+`">`+val.cat_slug+`</a></small>
                                <h4><a href="{{URL::to('product-detail')}}/`+val.slug+`">`+product_name+`</a></h4>
                              </div>
                              <div class="product-thumb">
                                <a href="{{URL::to('product-detail')}}/`+val.slug+`"><img src="{{ URL::asset('product_image/`+val.product_image+`' )}}" alt="" /></a>
                              </div>
                              <div class="product-price-rating">
                                <div class="pull-left">`;
                                if(val.price != val.offer_price){
                                  producthtml1 += `<del>₹`+parseInt(val.price).toFixed(2)+`</del>`;
                                }
                                producthtml1 += `<span>₹`+parseInt(val.offer_price).toFixed(2)+`</span>
                                </div>
                                <div class="product-action">
									<a href="javascript:void(0);" class="add-to-cart" onclick="thumbnailAddToCart(`+val.id+`,this);">Add to Cart</a>
								</div>
                              </div>
                            </div>
                          </div>`;

          producthtml2 += `<div class="product-single wide-style">
                            <div class="row align-items-center">
                              <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="product-thumb">
                                  <a href="{{URL::to('product-detail')}}/`+val.slug+`"><img src="{{ URL::asset('product_image/`+val.product_image+`' )}}" alt="" /></a>
                                </div>
                              </div>
                              <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">
                                <a href="{{URL::to('product-detail')}}/`+val.slug+`" class="add-to-wishlist"><i class="icon_heart_alt"></i></a>
                                <div class="product-title">
                                  <small><a href="{{URL::to('product-detail')}}/`+val.slug+`">Samsung</a></small>
                                  <h4><a href="{{URL::to('product-detail')}}/`+val.slug+`">`+val.product_name+`</a></h4>
                                </div>
                                
                                <div class="product-text">
                                  <p>`+val.product_description+`</p>
                                </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-md-4">
                                <div class="product-action stuck text-left">
                                  <div class="free-delivery">
                                    <a href="{{URL::to('product-detail')}}/`+val.slug+`"><i class="ti-truck"></i> Free Delivery</a>
                                  </div>
                                  <div class="product-price-rating">`;
                                  if(val.price != val.offer_price){
                                    producthtml2 += `<div>
                                      <del>₹`+parseInt(val.price).toFixed(2)+`</del>
                                    </div>`;
                                  }
                                producthtml2 += `<span>₹`+parseInt(val.offer_price).toFixed(2)+`</span>
                                  </div>
                                  <div class="product-stock">
                                    <p>Avability: <span>In stock</span></p>
                                  </div>
                                  <a href="{{URL::to('product-detail')}}/`+val.slug+`" class="add-to-cart">Add to Cart</a>
                                </div>
                              </div>
                            </div>
                          </div>`;

        });
      }
      else
      {
          producthtml1 += `<h2 class="text-center">No product found.</h2>`;
          producthtml2 += `<h2 class="text-center">No product found.</h2>`;
      }
      $("#product_list1").html(producthtml1);
      $("#list-products").html(producthtml2);
    }
</script>