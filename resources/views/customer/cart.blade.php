@include('nav2');
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="cart.html">Shopping Cart</a></li>
    </ul>
    <div class="row">

        <div class="col-sm-12" id="content">
            <h1>Shopping Cart</h1>
            <form enctype="multipart/form-data" method="post" action="{{url('customer/cart')}}" name="frm">
                @csrf
                <input type="hidden" id="countC" value="{{ count(session('cart')) }}">
                <input type="hidden" id="sub_tol" value="" name="sub_tol">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Category</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-left">Remove</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if( request()->session()->get('cart') )
                            <?php $k =-1; ?>
                            @foreach(request()->session()->get('cart') as $i=>$id)
                                <?php $k++; ?>
                                <input type="hidden" id="co{{ $id }}" name="count{{$i}}" value="1">
                        <tr>
                            <td class="text-center">
                                <a href="{{ url('product/detail/'.$id) }}">
                                    @if(\App\Product::find($id)->image)
                                        <img class="img-thumbnail" width="70px" height="79px" title="women's clothing" alt="women's clothing" src="{{ asset('storage/' . \App\Product::find($id)->image) }}">
                                    @else
                                        <img class="img-thumbnail" title="women's clothing" alt="women's clothing" src="{{ asset('image/product/2product50x59.jpg') }}">
                                    @endif
                                </a>
                            </td>
                            <td class="text-left"><a href="{{ url('product/detail/'.$id) }}">{{ \App\Product::find($id)->name }}</a></td>
                            <td class="text-left">{{ \App\Product::find($id)->category->name }}</td>
                            <td class="text-left">
                                <div class="cart-plus-minus">
                                    <input type="text" value="1" id="{{ session('cart')[$i] }}" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                </td>
                            <td>
                                <div style="max-width: 200px;" class="input-group btn-block">

                                    <a href="{{ url('/customer/removeP/'.$i) }}" class="btn btn-danger" role="button" title="" data-toggle="tooltip" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
                                </div>
                            </td>
                            <td class="text-right" id="pr{{session('cart')[$i]}}">{{ \App\Product::find($id)->price }}</td>
                            <td class="ch{{$k}} text-right" id="total{{session('cart')[$i]}}" >{{ \App\Product::find($id)->price }}</td>
                        </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="7" class="text-center"><h2>Cart view is empty</h2></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#collapse-shipping">Estimate Shipping &amp; Taxes <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-shipping">
                        <div class="panel-body">
                            <p>Enter your destination to get a shipping estimate.</p>
                            <form class="form-horizontal">
                                <div class="form-group required">
                                    <label for="input-zone" class="col-sm-2 control-label">Region / State</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="input-zone" name="zone_id">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="3000">Yangon</option>
                                            <option value="1000">Bago</option>
                                            <option value="5000">Shan</option>
                                            <option value="2000">Mandalay</option>
                                            <option value="3000">Ayeyawaddy</option>
                                            <option value="3500">Rakhine</option>
                                            <option value="5000">Chin</option>
                                            <option value="4000">Kachin</option>
                                            <option value="4500">Kayin</option>
                                            <option value="4000">Mon</option>
                                            <option value="6000">Thanintharyi</option>
                                            <option value="2000">Magwe</option>
                                            <option value="3500">Sagaing</option>
                                            <option value="4000">Kayah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-postcode" class="col-sm-2 control-label">Shipping Fee</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-postcode" placeholder="3000" value="" name="postcode" readonly>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right" id="carttol">0</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>VAT (20%):</strong></td>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right" id="billtol">0</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="buttons">
                <div class="pull-left"><a class="btn btn-default" href="{{ url('/products') }}">Continue Shopping</a></div>
                <div class="pull-right"><button class="btn btn-primary" type="buttom" onclick="checkout();">Checkout</button></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        }
        else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            }
            else {
                newVal = 0;
            }
        }
        aa($(this).parent().find("input").attr('id'),newVal);
        $button.parent().find("input").val(newVal);
    });

    $('#input-zone').change(function () {
        $('#input-postcode').val($('#input-zone').val());
    });

    tolsum();

    function aa(id,val) {
        let price = $('#pr'+id+'').html()
        let tol = Number(price)*val;
        // $('#val'+id+'').html(tol);
        $('#total'+id+'').html(tol);
        tolsum()
        console.log(id,val);
        $('#co'+id+'').val(val);
    }
    function tolsum() {

        let alltol = 0;

        for (let i =0 ; i< Number($('#countC').val());i++){
            alltol += Number($('.ch'+i+'').html());
        }
        // alert(alltol)
        $('#carttol').html(alltol);
        $('#sub_tol').val(alltol);
        $('#billtol').html(alltol);
    }
    function checkout() {
        frm.submit();
    }
</script>
@include('footer')