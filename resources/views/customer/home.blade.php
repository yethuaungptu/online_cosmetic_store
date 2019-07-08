@include('nav2')
<div class="mainbanner">
    <div id="main-banner" class="owl-carousel home-slider">
        <div class="item"> <a href="#"><img src="{{ asset('image/main1.png') }}" alt="main-banner1" class="img-responsive" /></a> </div>
        <div class="item"> <a href="#"><img src="{{ asset('image/main2.png') }}" alt="main-banner2" class="img-responsive" /></a> </div>
        <div class="item"> <a href="#"><img src="{{ asset('image/main3.png') }}" alt="main-banner3" class="img-responsive" /></a> </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="customtab">
                <div id="tabs" class="customtab-wrapper">
                    <ul class='customtab-inner'>
                        <li class='tab'><a href="#tab-latest">Latest</a></li>
{{--                        <li class='tab'><a href="#tab-special">Special</a></li>--}}
                        <li class='tab'><a href="#tab-bestseller">Bestseller</a></li>
                    </ul>
                </div>
                <div id="tab-latest" class="tab-content">
                    <div class="box">
                        <div id="latest-slidertab" class="row owl-carousel product-slider">
                            @foreach($products as $product)
                                 <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="{{ url('product/detail/'.$product->id) }}">
                                            @if($product -> image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-responsive">
                                            @else
                                                <img src="{{ asset('image/product/product1.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            @endif
                                        <div class="button-group">
{{--                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
                                            @if(in_array($product->id,request()->session()->get('cart')??[]))
                                                <button type="button" class="addtocart-btn" >Go To Cart</button>
                                            @else
                                                <a role="button" href="{{ url('/customer/cart/'.$product->id) }}" class="addtocart-btn" >Add To Cart</a>
                                            @endif
{{--                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="{{ url('product/detail/'.$product->id) }}" title="lorem ippsum dolor dummy">{{ $product->name }}</a></h4>
                                        <p class="price product-price">{{ $product->price }} Kyats<span class="price-tax">Ex Tax: $100.00</span></p>
                                        <div class="rating"> {{ $product->brand->name }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- tab-latest-->
{{--                <div id="tab-special" class="tab-content">--}}
{{--                    <div class="box">--}}
{{--                        <div id="special-slidertab" class="row owl-carousel product-slider">--}}
{{--                            <div class="item">--}}
{{--                                <div class="product-thumb transition">--}}
{{--                                    <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product4.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                        <div class="button-group">--}}
{{--                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                            <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="caption product-detail">--}}
{{--                                        <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="product-thumb transition">--}}
{{--                                    <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product5.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                        <div class="button-group">--}}
{{--                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                            <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="caption product-detail">--}}
{{--                                        <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="product-thumb transition">--}}
{{--                                    <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product5.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                        <div class="button-group">--}}
{{--                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                            <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="caption product-detail">--}}
{{--                                        <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="product-thumb transition">--}}
{{--                                    <div class="product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product6.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                        <div class="button-group">--}}
{{--                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                            <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="caption product-detail">--}}
{{--                                        <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="product-thumb transition">--}}
{{--                                    <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product7.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                        <div class="button-group">--}}
{{--                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                            <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="caption product-detail">--}}
{{--                                        <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="product-thumb transition">--}}
{{--                                    <div class="image product-imageblock"> <a href="#"> <img src="{{ asset('image/product/product6.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                        <div class="button-group">--}}
{{--                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                            <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="caption product-detail">--}}
{{--                                        <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- tab-special-->
                <div id="tab-bestseller" class="tab-content">
                    <div class="box">
                        <div id="bestseller-slidertab" class="row owl-carousel product-slider">
                            @foreach($products as $product)
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock"> <a href="{{ url('product/detail/'.$product->id) }}">
                                                @if($product -> image)
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-responsive">
                                                @else
                                                    <img src="{{ asset('image/product/product1.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                                            @endif
                                            <div class="button-group">
{{--                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
                                                @if(in_array($product->id,request()->session()->get('cart')??[]))
                                                    <button type="button" class="addtocart-btn" >Go To Cart</button>
                                                @else
                                                    <a role="button" href="{{ url('/customer/cart/'.$product->id) }}" class="addtocart-btn" >Add To Cart</a>
                                                @endif
{{--                                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="{{ url('product/detail/'.$product->id) }}" title="lorem ippsum dolor dummy">{{ $product->name }}</a></h4>
                                            <p class="price product-price">{{ $product->price }} Kyats<span class="price-tax">Ex Tax: $100.00</span></p>
                                            <div class="rating"> {{ $product->brand->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="subbanner4" class="banner" >
                    <div class="item"> <a href="#"><img src="{{ asset('image/banner.png') }}" alt="Sub Banner4" class="img-responsive" /></a> </div>
                </div>
                <h3 class="productblock-title">Brand</h3>
{{--                <div class="box">--}}
{{--                    <div id="feature-slider" class="row owl-carousel product-slider">--}}
{{--                        <div class="item product-slider-item">--}}
{{--                            <div class="product-thumb transition">--}}
{{--                                <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product4.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="caption product-detail">--}}
{{--                                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                </div>--}}
{{--                                <div class="button-group">--}}
{{--                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                    <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item product-slider-item">--}}
{{--                            <div class="product-thumb transition">--}}
{{--                                <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product5.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="caption product-detail">--}}
{{--                                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                </div>--}}
{{--                                <div class="button-group">--}}
{{--                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                    <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item product-slider-item">--}}
{{--                            <div class="product-thumb transition">--}}
{{--                                <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('image/product/product6.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="caption product-detail">--}}
{{--                                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                </div>--}}
{{--                                <div class="button-group">--}}
{{--                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                    <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item product-slider-item">--}}
{{--                            <div class="product-thumb transition">--}}
{{--                                <div class="image product-imageblock"> <a href="#"> <img src="{{ asset('image/product/product7.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="caption product-detail">--}}
{{--                                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                </div>--}}
{{--                                <div class="button-group">--}}
{{--                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                    <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item product-slider-item">--}}
{{--                            <div class="product-thumb transition">--}}
{{--                                <div class="image product-imageblock"> <a href="#"> <img src="{{ asset('image/product/product8.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="caption product-detail">--}}
{{--                                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                </div>--}}
{{--                                <div class="button-group">--}}
{{--                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                    <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item product-slider-item">--}}
{{--                            <div class="product-thumb transition">--}}
{{--                                <div class="image product-imageblock"> <a href="#"> <img src="{{ asset('image/product/product1.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                        <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="caption product-detail">--}}
{{--                                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>--}}
{{--                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>--}}
{{--                                </div>--}}
{{--                                <div class="button-group">--}}
{{--                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>--}}
{{--                                    <button type="button" class="addtocart-btn" >Add To Cart</button>--}}
{{--                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
            <div id="brand_carouse" class="owl-carousel brand-logo">
                @foreach($brands as $brand)
                    <div class="item text-center "> <a href="#"><img src="{{ asset('storage/' . $brand->image) }}" alt="Disney" class="img-responsive" width="70%" /></a> </div>
               @endforeach
            </div>
        </div>
    </div>
</div>
@include('footer')
