@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
<div class="col-md-12 d-flex justify-content-center p-0 m-0">
    <div class="auth col-md-10 p-0 pb-3">
        <div class="auth-header mb-3">{{ __('Edit product: ' . $product->article) }}</div>

        <form method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="{{ $product->id }}" name="id">

            <div class="form-group row">
                <label for="category_id" class="col-md-2 col-form-label text-md-right">Category_ID:</label>
                <div class="col-md-9">                    
                    <select name="category_id" id="category_id" class="custom-select">
                        <option disabled>Choise Category_ID</option>
                        <option value="1111" {{ ($product->category_id =='1111') ? 'selected' : ''}}>1111</option>
                        <option value="1122" {{ ($product->category_id =='1122') ? 'selected' : ''}}>1122</option>
                        <option value="1133" {{ ($product->category_id =='1133') ? 'selected' : ''}}>1133</option>
                        <option value="2222" {{ ($product->category_id =='2222') ? 'selected' : ''}}>2222</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="article" class="col-md-2 col-form-label text-md-right">Article:</label>
                <div class="col-md-9">
                    <input type="text" name="article" class="form-control" id="article" value="{{$product->article}}" placeholder="Enter article">
                </div>
            </div>

            <div class="form-group row">
                <label for="brand" class="col-md-2 col-form-label text-md-right">Brand:</label>
                <div class="col-md-9">                                     
                    <select name="brand" id="brand" class="custom-select">
                        <option disabled>Choise Brand</option>
                        <option value="ADIDAS" {{ ($product->brand =='ADIDAS') ? 'selected' : ''}}>ADIDAS</option>
                        <option value="NIKE" {{ ($product->brand =='NIKE') ? 'selected' : ''}}>NIKE</option>
                        <option value="PUMA" {{ ($product->brand =='PUMA') ? 'selected' : ''}}>PUMA</option>
                        <option value="VANS" {{ ($product->brand =='VANS') ? 'selected' : ''}}>VANS</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="series" class="col-md-2 col-form-label text-md-right">Series:</label>
                <div class="col-md-9">
                    <input type="text" name="series" class="form-control" id="series" value="{{$product->series}}" placeholder="Enter series">
                </div>
            </div>

            <div class="form-group row">
                <label for="model" class="col-md-2 col-form-label text-md-right">Model:</label>
                <div class="col-md-9">
                    <input type="text" name="model" class="form-control" id="model" value="{{$product->model}}" placeholder="Enter model">
                </div>
            </div>

            <div class="form-group row">
                <label for="partnumber" class="col-md-2 col-form-label text-md-right">Partnumber:</label>
                <div class="col-md-9">
                    <input type="text" name="partnumber" class="form-control" id="partnumber" value="{{$product->partnumber}}" placeholder="Enter partnumber">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-md-2 col-form-label text-md-right">Gender:</label>
                <div class="col-md-9">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" {{ ($product->gender =='male') ? 'checked' : ''}} id="male" name="gender" class="custom-control-input" value="male">
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" {{ ($product->gender =='female') ? 'checked' : ''}} id="female" name="gender" class="custom-control-input" value="female">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="style" class="col-md-2 col-form-label text-md-right">Style:</label>
                <div class="col-md-9">                                     
                    <select name="style" id="style" class="custom-select">
                        <option disabled>Choise Style</option>
                        <option value="Classic" {{ ($product->style =='Classic') ? 'selected' : ''}}>Classic</option>
                        <option value="Sport" {{ ($product->style =='Sport') ? 'selected' : ''}}>Sport</option>
                        <option value="Old School" {{ ($product->style =='Old School') ? 'selected' : ''}}>Old School</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="season" class="col-md-2 col-form-label text-md-right">Season:</label>
                <div class="col-md-9">                                     
                    <select name="season" id="season" class="custom-select">
                        <option disabled>Choise Season</option>
                        <option value="Autumn/Winter" {{ ($product->season =='Autumn/Winter') ? 'selected' : ''}}>Autumn/Winter</option>
                        <option value="Spring/Summer" {{ ($product->season =='Spring/Summer') ? 'selected' : ''}}>Spring/Summer</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-2 col-form-label text-md-right">Description:</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control" id="description" placeholder="Enter description">{{$product->description}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-2 col-form-label text-md-right">Price:</label>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" id="price" value="{{$product->price}}" placeholder="Enter price">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="quantity" class="col-md-2 col-form-label text-md-right">Quantity:</label>
                <div class="col-md-9">
                    <input type="number" name="quantity" class="form-control" id="quantity" value="{{$product->quantity}}">
                </div>
            </div>

            <div class="custom-file col-md-5 offset-md-6 mb-3">
                <input type="file" class="custom-file-input" accept="image/x-png,image/gif,image/jpeg" name="image" id="image">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>

            <button type="submit" class="btn-log col-md-3 offset-md-8">Save changes</button>
            
        </form>

        </div>
    </div>
</div>

@endsection