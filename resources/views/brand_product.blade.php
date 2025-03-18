@include('header')
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
                @foreach($category as $usc)
                <li>
                  <input type="checkbox" id="{{$usc->category}}" onclick="filterbycategory({{$usc->id}});" />
                  <label for="acer">{{$usc->category}}</label>
                </li>
                @endforeach
              </ul>
            </div>
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
                
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!--products-area end-->
@include('footer')
<script>
    var sortby = 0;
    var catArr = [];
    $( document ).ready(function() {
      getProductList();
    });

function productsorting(sorttype)
{
    sortby = sorttype;
    getProductList();
}
function filterbycategory(cat_id)
{
    if(catArr.indexOf(cat_id) !== -1)  
    {  
      var index = catArr.indexOf(cat_id);
        if (index !== -1) {
          catArr.splice(index, 1);
        }  
    }   
    else  
    {  
        catArr.push(cat_id);
    } 
    getProductList();
}
   function getProductList()
   {
      $.ajax({
             url: "{{ route('get-brand-product') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "brand_slug":'{{ Request::segment(2) }}',
                 "sortby":sortby,
                 "category_id":JSON.stringify(catArr)
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

          producthtml1 += `<div class="col-xl-3 col-md-4 col-sm-6">
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
                                <div class="pull-right">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <span class="rating-quantity">(0)</span>
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
                                <div class="product-rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                                  <span>(5)</span>
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