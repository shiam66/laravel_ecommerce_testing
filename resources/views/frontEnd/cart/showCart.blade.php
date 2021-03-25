@extends('frontEnd.master')

@section('title')
    This Is Cart Page
@endsection

@section('mainContent')
    <!-- banner -->
    <div class="page-head">
        <div class="container">
            <h3>Cart</h3>
        </div>
    </div>
    <!-- //banner -->

    <div class="checkout">
        <div class="container">
            <h3>My Shopping Bag</h3>
            <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                <table class="timetable_sub table-bordered">
                    <thead>
                        <tr>
                            <th>Remove</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Item Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $total =0 ?>
                    @foreach($cartProducts as $cartProduct)
                    <tr class="rem1">
                        <td class="invert-closeb">
                            <a href="{{ url('/cart/delete/'.$cartProduct->rowId) }}" class="btn btn-danger">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>

                        <td class="invert">{{ $cartProduct->name }}</td>

                        <td class="invert">
                            <div class="quantity">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="qty" value="{{ $cartProduct->qty }}">
                                            <div class="input-group-addon btn btn-primary">
                                                <i class="glyphicon glyphicon-upload"></i>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </td>

                        <td class="invert">TK. {{ $cartProduct->price }}</td>
                        <td class="invert">TK. {{ $itemTotal = $cartProduct->price*$cartProduct->qty }}</td>
                    </tr>
                    <?php $total = $total+$itemTotal ?>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="checkout-left">
                <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                    <a href="{{ url('/') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
                </div>
                <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                    <h4>Shopping basket</h4>
                    <ul>
                        <li><b>Total: <span>TK {{ $total }}</span></b></li>
                        <?php
                            Session::put('orderTotal', $total);
                        ?>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <a href="{{ url('/checkout') }}" class="btn btn-primary pull-right">Checkout</a>
        </div>
    </div>
@endsection
