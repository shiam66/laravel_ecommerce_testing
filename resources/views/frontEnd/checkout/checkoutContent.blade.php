@extends('frontEnd.master')

@section('title')
    This Is Checkout Page
@endsection

@section('mainContent')
    <!-- banner -->
    <div class="page-head">
        <div class="container">
            <h3>Checkout</h3>
        </div>
    </div>
    <!-- //banner -->

    <!-- check out -->
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well lead text-center text-success">
                        You have to login to complete your valuable order. If you are not registered then please Sign Up first.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-center"><b>Customer Registration</b></h4>
                    <div class="well box box-primary">
                        {!! Form::open(['url' => '/checkout/sign-up', 'method'=>'POST',]) !!}
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstName" class="form-control" id="" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastName" class="form-control" id="" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="emailAddress" class="form-control" id="" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control" id="" placeholder="Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phoneNumber" class="form-control" id="" placeholder="Number">
                            </div>
                            <div class="form-group">
                                <label>Dist. Name</label>
                                <select class="form-control" name="districtName">
                                    <option>----- Select District -----</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Jessore">Jessore</option>
                                    <option value="Satkhira">Satkhira</option>
                                    <option value="Jhenaidah">Jhenaidah</option>
                                    <option value="Meherpur">Meherpur</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><b>Login Form Here</b></h4>
                    <div class="well box box-primary">
                        <form>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="emailAddress" class="form-control" id="" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //check out -->
@endsection
