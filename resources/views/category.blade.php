@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @foreach($products as $product)
        <div class="article col-md-6 mt-1">
            <h2>{{ $product->article }}</h2>
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
            <p class="d-inline">{{ mb_strimwidth($product->description, 0, 110) }}</p>
            <a href="{{ url('/' . $product->category_id . '/' . $product->id ) }}">...</a>
            <div class="d-flex price justify-content-between">
                <span>Price: {{ $product->price }}</span>
                <span>Quantity: {{ $product->quantity }}</span>
            </div>
        </div>
    @endforeach   
    
@endsection