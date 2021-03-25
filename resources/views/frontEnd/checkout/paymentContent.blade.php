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
                        You have to give us your product payment information to
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center"><b>Payment Form</b></h4>
                    <div class="well box box-primary">
                        {!! Form::open(['url' => '/checkout/save-order', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                            
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="paymentType" id="" value="cashOnDelivery">
                                    Cash On Delivery
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="radio" name="paymentType" id="" value="bkash">
                                    Bkash
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="radio" name="paymentType" id="" value="paypal">
                                    Paypal
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Save Order</button>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- //check out -->
@endsection
