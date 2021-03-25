@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
                </div>

                <div class="card-body">
                    {!! Form::open(['url' => 'product/update', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'name' => 'editProductForm']) !!}
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $productById->productName }}" class="form-control" id="" name="productName">
                            <input type="hidden" value="{{ $productById->id }}" class="form-control" id="" name="productId">
                            <span class="text-danger" role="alert">{{  $errors->has('productName') ? $errors->first('productName'): '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control" name="categoryId">
                                <option selected>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Manufacturer Name</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control" name="manufacturerId">
                                <option selected>Select Manufacturer</option>
                                @foreach($manufacturers as $manufacturer)
                                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->manufacturerName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ $productById->productPrice }}" class="form-control" id="" name="productPrice">
                            <span class="text-danger" role="alert">{{  $errors->has('productPrice') ? $errors->first('productPrice'): '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Product Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ $productById->productQuantity }}" class="form-control" id="" name="productQuantity">
                            <span class="text-danger" role="alert">{{  $errors->has('productQuantity') ? $errors->first('productQuantity'): '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Product Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="mytextarea" rows="8" name="productShortDescription">{{ $productById->productShortDescription }}</textarea>
                            @if ($errors->has('productShortDescription'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('productShortDescription') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Product Long Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="mytextarea2" rows="8" name="productLongDescription">{{ $productById->productLongDescription }}</textarea>
                            @if ($errors->has('productLongDescription'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('productLongDescription') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Product Images</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="" accept="image/*" name="productImages">
                            <img src="{{ asset($productById->productImages) }}" alt="" height="150px">
                            <span class="text-danger" role="alert">{{  $errors->has('productImages') ? $errors->first('productImages'): '' }}</span>
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
                            <button type="submit" name="btn" class="btn btn-primary btn-block">Update Product</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editProductForm'].elements['publicStatus'].value={{ $productById->publicStatus }}
        document.forms['editProductForm'].elements['categoryId'].value={{ $productById->categoryId }}
        document.forms['editProductForm'].elements['manufacturerId'].value={{ $productById->manufacturerId }}
    </script>
@endsection

