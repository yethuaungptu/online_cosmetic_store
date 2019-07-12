@include('nav2')
<div class="container">
    <ul class="breadcrumb">
        <li><a href=" {{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="{{ url('customer/register') }}">Register</a></li>
    </ul>
    <div class="row">

        <div class="col-sm-12" id="content">
            <h1>Register Account</h1>
            <p>If you already have an account with us, please login at the <a href="login">login page</a>.</p>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('customer/register') }}">
                @csrf
                <fieldset id="account">
                    <legend>Your Personal Details</legend>

                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-firstname" placeholder=" Name" value="{{ old('name') }}" name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="{{ old('email') }}" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group required">
                        <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="{{ old('phone') }}" name="phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
                </fieldset>
                <fieldset id="address">
                    <legend>Your Address</legend>

                    <div class="form-group required">
                        <label for="input-address-1" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-address-1" placeholder="Address" value="{{ old('address') }}" name="address">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="input-city" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-city" placeholder="City" value="{{ old('city') }}" name="city">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="input-password" placeholder="Password" value="{{ old('password') }}" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group required">
                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm">
                        </div>
                    </div>
                </fieldset>

                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>

                        <input type="checkbox" value="1" name="agree">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" class="btn btn-primary mr-3" value="Continue">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('footer')