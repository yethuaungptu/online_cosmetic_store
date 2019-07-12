@include('nav2')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="{{ url('/customer/login') }}">Login</a></li>
    </ul>
    <div class="row">

        <div class="col-sm-12" id="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="well">
                        <h2>New Customer</h2>
                        <p><strong>Register Account</strong></p>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                        <a class="btn btn-primary" href="{{ url('/customer/register') }}">Continue</a></div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <h2>Returning Customer</h2>
                        <p><strong>I am a returning customer</strong></p>
                        <form enctype="multipart/form-data" method="post" action="{{ url('/customer/login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="input-email" class="control-label">E-Mail Address</label>
                                <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email">
                            </div>
                            <div class="form-group">
                                <label for="input-password" class="control-label">Password</label>
                                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                            </div>
                            <input type="submit" class="btn btn-primary mt-2" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer');