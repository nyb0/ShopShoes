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
                    <select name="category_id" id="category_id" class="custom-select">
                        <option disabled selected>Choise Category_ID</option>
                        <option value="1111">1111</option>
                        <option value="1122">1122</option>
                        <option value="1133">1133</option>
                        <option value="2222">2222</option>
                    </select>
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
                    <select name="brand" id="brand" class="custom-select">
                        <option disabled selected>Choise Brand</option>
                        <option value="ADIDAS">ADIDAS</option>
                        <option value="NIKE">NIKE</option>
                        <option value="PUMA">PUMA</option>
                        <option value="VANS">VANS</option>
                    </select>
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
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="male">
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="female">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="style" class="col-md-2 col-form-label text-md-right">Style:</label>
                <div class="col-md-9">                                     
                    <select name="style" id="style" class="custom-select">
                        <option disabled selected>Choise Style</option>
                        <option value="Classic">Classic</option>
                        <option value="Sport">Sport</option>
                        <option value="Old School">Old School</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="season" class="col-md-2 col-form-label text-md-right">Season:</label>
                <div class="col-md-9">                                     
                    <select name="season" id="season" class="custom-select">
                        <option disabled selected>Choise Season</option>
                        <option value="Autumn/Winter">Autumn/Winter</option>
                        <option value="Spring/Summer">Spring/Summer</option>
                    </select>
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

            <div class="custom-file col-md-5 offset-md-6 mb-3">
                <input type="file" class="custom-file-input" accept="image/x-png,image/gif,image/jpeg" name="image" id="image">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>

            <button type="submit" class="btn-log col-md-2 offset-md-9">Create</button>
            
        </form>

        </div>
    </div>
</div>

@endsection