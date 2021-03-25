@extends('admin.master')

{{--@section('title')--}}
{{--    Edit Category--}}
{{--@endsection--}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Manufacturer</h6>
                </div>

                <h3 class="text-success text-center">{{Session::get('message')}}</h3>

                <div class="card-body">
                    {!! Form::open(['url' => 'manufacturer/update', 'method' => 'POST', 'name' => 'editManufacturerForm']) !!}
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Manufacturer Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $manufacturerById->manufacturerName }}" class="form-control" id="" name="manufacturerName">
                            <input type="hidden" value="{{ $manufacturerById->id }}" class="form-control" id="" name="id">
                            @if ($errors->has('manufacturerName'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('manufacturerName') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Manufacturer Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"  rows="8" name="manufacturerDescription">{{ $manufacturerById->manufacturerDescription }}</textarea>
                            @if ($errors->has('manufacturerDescription'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('manufacturerDescription') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Publication Status</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control" name="publicStatus">
                                <option selected>Select Public Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 offset-sm-5">
                            <button type="submit" name="btn" class="btn btn-primary btn-block">Update Manufacturer</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editManufacturerForm'].elements['publicStatus'].value={{ $manufacturerById->publicStatus }}
    </script>
@endsection
