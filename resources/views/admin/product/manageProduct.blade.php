@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Manage Product</h6>
                </div>

                <h3 class="text-success text-center">{{Session::get('message')}}</h3>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Manufacture Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->productName }}</td>
                                <td>{{ $product->categoryName }}</td>
                                <td>{{ $product->manufacturerName }}</td>
                                <td>TK {{ $product->productPrice }}</td>
                                <td>{{ $product->productQuantity }}</td>
                                <td>{{ $product->publicStatus == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ url('/product/view/'.$product->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-success btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/product/delete/'.$product->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
