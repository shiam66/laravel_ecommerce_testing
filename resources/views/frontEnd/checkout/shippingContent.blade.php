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
                        Hellow <b>{{ $customerById->firstName.' '.$customerById->lastName }}</b> You have to give product shipping information to complete your valuable order. If your product information & shipping information are same just press on save shipping info button.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4 class="text-center"><b>Shipping form</b></h4>
                    <div class="well box box-primary">
                        {!! Form::open(['url' => '/checkout/save-shipping', 'method'=>'POST', 'name' => 'editShippingForm']) !!}
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullName" class="form-control" id="" placeholder="First Name" value="{{ $customerById->firstName.' '.$customerById->lastName }}">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="emailAddress" class="form-control" id="" placeholder="Email Address" value="{{ $customerById->emailAddress }}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" id="" placeholder="Address">{{ $customerById->address }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phoneNumber" class="form-control" id="" placeholder="Number" value="{{ $customerById->phoneNumber }}">
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
            </div>
        </div>
    </div>
    <!-- //check out -->
    <script>
        document.forms['editShippingForm'].elements['districtName'].value='{{ $customerById->districtName }}'
    </script>
@endsection
