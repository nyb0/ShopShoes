@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="article col-md-12 py-2">
        <h1>{{ $product->article }}</h1>
        <div class="classcat">
            <p>Brand: {{ $product->brand }}</p>
            <p>Series: {{ $product->series }}</p>
            <p>Model: {{ $product->model }}</p>
            <p>Partnumber: {{ $product->partnumber }}</p>
        </div>
        <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="">
        <div class="character">
            <p>Gender: {{ $product->gender }}</p>
            <p>Style: {{ $product->style }}</p>
            <p>Season: {{ $product->season }}</p>                  
        </div>
        <p>{{ $product->description }}</p>
        <div class="d-flex price justify-content-between">
            <span>Price: {{ $product->price }}</span>
            <span>Quantity: {{ $product->quantity }}</span>
        </div>
        
        <form class="d-flex" action="{{ url('/basket/') }}" method="post">
            @csrf
            <input type="hidden" value="{{ $product->id }}" name="product_id">
            <input type="number" class="form-control offset-md-7 col-md-2 d-inline-block" name="quantity" value="1">
            <button class="btn btn-info offset-md-1 col-md-2 d-inline-block buy-btn">Buy</button>
        </form>
    </div>

@endsection
