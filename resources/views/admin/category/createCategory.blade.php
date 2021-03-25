@extends('admin.master')

{{--@section('title')--}}
{{--    Add Category--}}
{{--@endsection--}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
                </div>

{{--                <h3 class="text-success text-center">{{Session::get('message')}}</h3>--}}

                <div class="card-body">
                    {!! Form::open(['url' => 'category/save', 'method' => 'POST']) !!}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="categoryName">
{{--                                @if ($errors->has('categoryName'))--}}
{{--                                    <span class="text-danger" role="alert">--}}
{{--                                        <strong>{{ $errors->first('categoryName') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
                                <span class="text-danger" role="alert">{{  $errors->has('categoryName') ? $errors->first('categoryName'): '' }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="8" name="categoryDescription"></textarea>
                                @if ($errors->has('categoryDescription'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('categoryDescription') }}</strong>
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
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Category</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
