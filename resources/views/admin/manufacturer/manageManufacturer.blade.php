@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Manage Manufacturer</h6>
                </div>

                <h3 class="text-success text-center">{{Session::get('message')}}</h3>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
<!--                            --><?php //$sl = 1; ?>
                            @foreach($manufacturers as $manufacturer)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $manufacturer->manufacturerName }}</td>
                                <td>{{ $manufacturer->manufacturerDescription }}</td>
                                <td>{{ $manufacturer->publicStatus == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ url('/manufacturer/edit/'.$manufacturer->id) }}" class="btn btn-success btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/manufacturer/delete/'.$manufacturer->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
<!--                            --><?php //$sl++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
