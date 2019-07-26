@include('nav2');
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ url('/products') }}">All Product</a></li>
    </ul>
    <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs column-left">
            <div class="column-block">
                <div class="columnblock-title">Categories</div>
                <div class="category_block">
                    <ul class="box-category treeview-list treeview">
                        @foreach($categories as $category)
                            <li><a href="{{ url('/productsCat/'.$category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="column-block">
                <div class="columnblock-title">Brand</div>
                <div class="category_block">
                    <ul class="box-category treeview-list treeview">
                        @foreach($brands as $brand)
                            <li><a href="{{ url('/productsBnd/'. $brand->id) }}">{{ $brand->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="panel panel-default filter">
                <div class="panel-heading columnblock-title">Refine Search</div>
                <form action="/refineS">
                <div class="filter-block">
                    <div class="list-group"> <a class="list-group-item">Brand</a>
                        <div class="list-group-item">
                            <div id="filter-group1">
                                @foreach($brands as $brand)
                                    <label class="checkbox">
                                        <input name="brand" {{ ($brand->id == request()->query('brand'))? 'checked' : '' }} type="radio" value="{{ $brand->id }}" required/>
                                        {{ $brand->name }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <a class="list-group-item">Category</a>
                        <div class="list-group-item">
                            <div id="filter-group3">
                                @foreach($categories as $category)
                                    <label class="checkbox">
                                        <input name="category" type="radio" value="{{ $category->id }}" {{ ($category->id == request()->query('category'))? 'checked' : '' }} required/>
                                        {{ $category->name }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="submit" id="button-filter" class="btn btn-primary">Refine Search</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div id="content" class="col-sm-9">
            <h2 class="category-title"> {{ request()->query('category')? 'Refine Search' : 'All Product' }}</h2>
            <div class="row category-banner">
                <div class="col-sm-12 category-image"><img src="{{ asset('image/allproduct.png') }}" alt="Desktops" title="Desktops" class="img-thumbnail" /></div>
                <div class="col-sm-12 category-desc">{{ request()->query('category')? 'In this page, you can see the product which you search with refine search. Result from, Category : ('.\App\Category::find(request()->query('category'))->name.') category And Brand : ('.\App\Brand::find(request()->query('brand'))->name.') brand' : 'In this page will show the all product. You can search with name, category and brands.Also you can search with Refine search.For view options, you can switch list view and grid view' }}</div>
            </div>
            <div class="category-page-wrapper">
                <div class="col-md-6 list-grid-wrapper">
                    <div class="btn-group btn-list-grid">
                        <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                        <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                    </div>
                </div>

            </div>
            <br />
            <div class="grid-list-wrapper">
                @foreach($products as $product)
                     <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="{{ url('product/detail/'.$product->id) }}">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" width="220px" height="294px" alt="women's clothing stores" title="lorem ippsum dolor dummy" class="img-responsive" />
                                @else
                                    <img src="image/product/pro-2-220x294.jpg" alt="women's clothing stores" title="lorem ippsum dolor dummy" class="img-responsive" />
                                @endif
                            </a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                @if(in_array($product->id,request()->session()->get('cart')??[]))
                                    <a role="button" id="button-cart" href="{{ url('customer/cartview') }}" class="btn btn-primary btn-lg btn-block addtocart" >Go To Cart</a>
                                @else
                                    <a role="button" id="button-cart" href="{{ url('/customer/cart/'.$product->id) }}" class="btn btn-primary btn-lg btn-block addtocart" >Add To Cart</a>
                                @endif
                            </div>
                        </div>
                        <div class="caption product-detail">
                            <h4 class="product-name"> <a href="{{ url('product/detail/'.$product->id) }}" title="lorem ippsum dolor dummy"> {{ $product->name }} </a> </h4>
                            <p class="product-desc"> {{ $product->desc }}</p>
                            <p class="price product-price">{{ $product->price }}Ks </p>

                        </div>
                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                            @if(in_array($product->id,request()->session()->get('cart')??[]))
                                <a role="button" id="button-cart" href="{{ url('customer/cartview') }}" class="btn btn-primary btn-lg btn-block addtocart-btn" >Go To Cart</a>
                            @else
                                <a role="button" id="button-cart" href="{{ url('/customer/cart/'.$product->id) }}" class="btn btn-primary btn-lg btn-block addtocart-btn" >Add To Cart</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="category-page-wrapper">
                <div class="result-inner">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} ({{ ceil($products->total()/12) }} Pages)</div>
                <div class="pagination-inner">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')