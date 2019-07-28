    @include('nav2')

<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">All Product</a></li>
        <li><a href="#">{{ $product->name }}</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnails">
                        <div>
                            @if($product -> image)
                                <a class="thumbnail" href="{{ asset('storage/' . $product->image) }}" title="lorem ippsum dolor dummy"><img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-responsive"></a>
                            @else
                                <a class="thumbnail" href="{{ asset('image/product/product8.jpg') }}" title="lorem ippsum dolor dummy"><img src="{{ asset('image/product/product1.jpg') }}" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" /></a>
                            @endif

                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <h1 class="productpage-title">{{ $product->name }}</h1>
                    <hr>
                    <ul class="list-unstyled productinfo-details-top">
                        <li>
                            <h2 class="productpage-price">{{ $product->price }} Ks</h2>
                        </li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled product_info">
                        <li>
                            <label>Brand:</label>
                            <span> <a href="#">{{ $product->brand->name }}</a></span></li>
                        <li>
                            <label>Product ID:</label>
                            <span> {{ $product->id }}</span></li>
                        <li>
                            <label>Availability:</label>
                            <span> {{ ($product->quantity > 0)? 'In Stock' : 'Out Stock' }}</span></li>
                    </ul>
                    <hr>
                    <p class="product-desc"> {{ $product->desc }}</p>
                    <div id="product">
                        <div class="form-group">

                            <input type="hidden" name="product_id" value="48" />
                            <div class="btn-group">
{{--                                <button type="button" data-toggle="tooltip" class="btn btn-default wishlist" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
                                @if(in_array($product->id,request()->session()->get('cart')??[]))
                                    <a role="button" href="{{ url('customer/cartview') }}" class="btn btn-primary btn-lg btn-block addtocart" >Go To Cart</a>
                                @else
                                    <a role="button" id="button-cart" href="{{ url('/customer/cart/'.$product->id) }}" class="btn btn-primary btn-lg btn-block addtocart" >Add To Cart</a>
                                @endif
{{--                                <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block addtocart">Add to Cart</button>--}}
{{--                                <button type="button" data-toggle="tooltip" class="btn btn-default compare" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productinfo-tab">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
{{--                    <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>--}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-description">
                        <div class="cpt_product_description ">
                            <div>
                                <p> <strong>{{ $product->desc }}</strong></p>

                            </div>
                        </div>
                        <!-- cpt_container_end --></div>
{{--                    <div class="tab-pane" id="tab-review">--}}
{{--                        <form class="form-horizontal">--}}
{{--                            <div id="review"></div>--}}
{{--                            <h2>Write a review</h2>--}}
{{--                            <div class="form-group required">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <label class="control-label" for="input-name">Your Name</label>--}}
{{--                                    <input type="text" name="name" value="" id="input-name" class="form-control" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group required">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <label class="control-label" for="input-review">Your Review</label>--}}
{{--                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>--}}
{{--                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group required">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <label class="control-label">Rating</label>--}}
{{--                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;--}}
{{--                                    <input type="radio" name="rating" value="1" />--}}
{{--                                    &nbsp;--}}
{{--                                    <input type="radio" name="rating" value="2" />--}}
{{--                                    &nbsp;--}}
{{--                                    <input type="radio" name="rating" value="3" />--}}
{{--                                    &nbsp;--}}
{{--                                    <input type="radio" name="rating" value="4" />--}}
{{--                                    &nbsp;--}}
{{--                                    <input type="radio" name="rating" value="5" />--}}
{{--                                    &nbsp;Good</div>--}}
{{--                            </div>--}}
{{--                            <div class="buttons clearfix">--}}
{{--                                <div class="pull-right">--}}
{{--                                    <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
            </div>
            <h3 class="productblock-title">Related Products</h3>
            <div class="box">
                <div id="related-slidertab" class="row owl-carousel product-slider">
                    @foreach($products as $product)
                        <div class="item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">
                                    @if($product->image)
                                        <a href="{{ url('product/detail/'.$product->id) }}"> <img src="{{ asset('storage/' . $product->image) }}" alt="women's clothing" title="women's clothing" class="img-responsive" /> </a>
                                    @else
                                        <a href="{{ url('product/detail/'.$product->id) }}"> <img src="{{ asset('image/product/pro-1-220x294.jpg') }}" alt="women's clothing" title="women's clothing" class="img-responsive" /> </a>
                                    @endif
                                    <div class="button-group">
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>--}}
                                        @if(in_array($product->id,request()->session()->get('cart')??[]))
                                            <a type="button" id="button-cart" class="btn btn-primary btn-lg btn-block addtocart" >Go To Cart</a>
                                        @else
                                            <a role="button" id="button-cart" href="{{ url('/customer/cart/'.$product->id) }}" class="btn btn-primary btn-lg btn-block addtocart" >Add To Cart</a>
                                        @endif
    {{--                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>--}}
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="{{ url('product/detail/'.$product->id) }}" title="women's clothing">{{ $product->name }}</a></h4>
                                    <p class="price product-price"> <span class="price-new">{{ $product->price }} Ks</span>  </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')

