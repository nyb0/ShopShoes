@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
<div class="col-md-12 d-flex justify-content-center p-0 m-0">
    <div class="auth col-md-10 p-0 pb-3">
        <div class="auth-header mb-3">{{ __('Create new product') }}</div>

        <form method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="category_id" class="col-md-2 col-form-label text-md-right">Category_ID:</label>
                <div class="col-md-9">
                    <input type="text" name="category_id" class="form-control" id="category_id" placeholder="Enter Category_ID">
                </div>
            </div>

            <div class="form-group row">
                <label for="article" class="col-md-2 col-form-label text-md-right">Article:</label>
                <div class="col-md-9">
                    <input type="text" name="article" class="form-control" id="article" placeholder="Enter article">
                </div>
            </div>

            <div class="form-group row">
                <label for="brand" class="col-md-2 col-form-label text-md-right">Brand:</label>
                <div class="col-md-9">
                    <input type="text" name="brand" class="form-control" id="brand" placeholder="Enter brand">
                </div>
            </div>

            <div class="form-group row">
                <label for="series" class="col-md-2 col-form-label text-md-right">Series:</label>
                <div class="col-md-9">
                    <input type="text" name="series" class="form-control" id="series" placeholder="Enter series">
                </div>
            </div>

            <div class="form-group row">
                <label for="model" class="col-md-2 col-form-label text-md-right">Model:</label>
                <div class="col-md-9">
                    <input type="text" name="model" class="form-control" id="model" placeholder="Enter model">
                </div>
            </div>

            <div class="form-group row">
                <label for="partnumber" class="col-md-2 col-form-label text-md-right">Partnumber:</label>
                <div class="col-md-9">
                    <input type="text" name="partnumber" class="form-control" id="partnumber" placeholder="Enter partnumber">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-md-2 col-form-label text-md-right">Gender:</label>
                <div class="col-md-9">
                    <input type="text" name="gender" class="form-control" id="gender" placeholder="Enter gender">
                </div>
            </div>

            <div class="form-group row">
                <label for="style" class="col-md-2 col-form-label text-md-right">Style:</label>
                <div class="col-md-9">
                    <input type="text" name="style" class="form-control" id="style" placeholder="Enter style">
                </div>
            </div>

            <div class="form-group row">
                <label for="season" class="col-md-2 col-form-label text-md-right">Season:</label>
                <div class="col-md-9">
                    <input type="text" name="season" class="form-control" id="season" placeholder="Enter season">
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-2 col-form-label text-md-right">Description:</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control" id="description" placeholder="Enter description"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-2 col-form-label text-md-right">Price:</label>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="quantity" class="col-md-2 col-form-label text-md-right">Quantity:</label>
                <div class="col-md-9">
                    <input type="number" name="quantity" class="form-control" id="quantity" value="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-2 col-form-label text-md-right">Image:</label>
                <div class="col-md-9">
                    <input type="file" accept="image/x-png,image/gif,image/jpeg" name="image" class="form-control-file" id="image">
                </div>
            </div>

            <button type="submit" class="btn-log col-md-2 offset-md-9">Create</button>
            
        </form>

        </div>
    </div>
</div>

@endsection