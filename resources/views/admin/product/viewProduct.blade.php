@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View Product</h6>
                </div>

                <h3 class="text-success text-center">{{Session::get('message')}}</h3>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="col">Product Id</th>
                                <td>{{ $product->id }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Product Name</th>
                                <td>{{ $product->productName }} </td>
                            </tr>

                            <tr>
                                <th scope="col">Category Name</th>
                                <td>{{ $product->categoryName }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Manufacturer Name</th>
                                <td>{{ $product->manufacturerName }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Product Price</th>
                                <td>TK {{ $product->productPrice }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Product Quantity</th>
                                <td>{{ $product->productQuantity }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Product Short Desc.</th>
                                <td>{!! $product->productShortDescription !!}</td>
                            </tr>

                            <tr>
                                <th scope="col">Product Long Desc.</th>
                                <td>{!! $product->productLongDescription !!}</td>
                            </tr>

                            <tr>
                                <th scope="col">Images</th>
                                <td><img src="{{ asset( $product->productImages) }}" height="80px;"></td>
                            </tr>

                            <tr>
                                <th scope="col">Status</th>
                                <td>{{ $product->publicStatus == 1 ? 'Published' : 'Unpublished' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
