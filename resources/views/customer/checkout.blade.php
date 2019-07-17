@include('nav2');
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ url('/customer/cartview') }}">Shopping Cart</a></li>
        <li><a href="{{ url('/customer/checkout') }}">Checkout</a></li>
    </ul>
    <div class="row">

        <div class="col-sm-12" id="content">
            <h1>Checkout</h1>
            <div id="accordion" class="panel-group">
                @if(!session('customer_key'))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-option" aria-expanded="false">Step 1: Checkout Options <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="collapse-checkout-option"  role="heading" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <div class="row" >
                                <div class="col-sm-6">
                                    <h2>New Customer</h2>
                                    <p>Checkout Options:</p>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="checked" value="register" name="account">
                                            Register Account</label>
                                    </div>
                                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                    <a href="{{ url('customer/register') }}"><input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-account" value="Continue"></a>
                                </div>
                            <form action="{{ url('customer/login') }}" method="post">
                                @csrf
                                <div class="col-sm-6">
                                    <h2>Returning Customer</h2>
                                    <p>I am a returning customer</p>
                                    <input type="hidden" name="para" value="1">
                                    <div class="form-group">
                                        <label for="input-email" class="control-label">E-Mail</label>
                                        <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                                    <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-login" value="Login">
                                </div>

                                </div>
                            </form>
                            </div>
                    </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="false" >Step 1: Delivery Details <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="collapse-shipping-address" role="heading" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <form class="form-horizontal" name="frm" action="{{ url('customer/confirm') }}" method="post">
                                @csrf
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="checked" value="existing" name="shipping_address">
                                        I want to use an existing address</label>
                                </div>
                                <div id="shipping-existing" >
                                    <select class="form-control" name="address_id">
                                        <option selected="selected" value="{{ session('customer_key')[0][1] }}">{{ \App\Customer::find(session('customer_key')[0][1])->address }}</option>
                                    </select>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="new" name="shipping_address">
                                        I want to use a new address</label>
                                </div>
                                <br>
                                <div id="shipping-new" style="display: none;">
                                    <div class="form-group required">
                                        <label for="input-shipping-firstname" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-address-1" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Address 1" value="" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shipping-city" class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-shipping-phone" placeholder="Phone Number" value="" name="phone">
                                        </div>
                                    </div>

                                </div>

                            </form>
                            <script type="text/javascript">
                                $('input[name=\'shipping_address\']').on('change', function() {
                                    if (this.value == 'new') {
                                        $('#shipping-existing').hide();
                                        $('#shipping-new').show();
                                    } else {
                                        $('#shipping-existing').show();
                                        $('#shipping-new').hide();
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Step 6: Confirm Order <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="collapse-checkout-confirm" role="heading" class="panel-collapse collapse in" aria-expanded="true" style="">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Category</td>
                                        <td class="text-right">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(request()->session()->get('cart') as $i=>$id)
                                        <tr>
                                            <td class="text-left"><a href="#">{{ \App\Product::find($id)->name }}</a></td>
                                            <td class="text-left">{{ \App\Product::find($id)->category->name }}</td>
                                            <td class="text-right">{{ request()->session()->get('count')['count'.$i] }}</td>
                                            <td class="text-right">{{ \App\Product::find($id)->price }}Ks</td>
                                            <td class="text-right">{{ \App\Product::find($id)->price * (int)request()->session()->get('count')['count'.$i] }}Ks</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                        <td class="text-right">{{ request()->session()->get('count')['sub_tol'] }}Ks</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong>(not available now)</td>
                                        <td class="text-right">0Ks</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                        <td class="text-right">{{ request()->session()->get('count')['sub_tol'] }}Ks</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="buttons">
                                <div class="pull-right">
                                    <input type="button" data-loading-text="Loading..." onclick="confirmO();" class="btn btn-primary" id="button-confirm" value="Confirm Order">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
        </div>
    </div>
</div>
<script>
    function confirmO() {
        frm.submit();
    }
</script>
@include('footer')