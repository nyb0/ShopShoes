@extends('layouts.app')

@section('content')

    <div class="gallery-box p-0 col-md-12 d-flex">
        @foreach($products as $product)
            <div class="article col-md-6 py-2">
                <h2>{{ $product->article }}</h2>
                <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="">
                <div class="classcat">
                    <p>Brand: {{ $product->brand }}</p>
                    <p>Series: {{ $product->series }}</p>
                    <p>Model: {{ $product->model }}</p>
                    <p>Partnumber: {{ $product->partnumber }}</p>
                </div>
                <div class="character">
                    <p>Gender: {{ $product->gender }}</p>
                    <p>Style: {{ $product->style }}</p>
                    <p>Season: {{ $product->season }}</p>               
                </div>
                <p class="d-inline">{{ mb_strimwidth($product->description, 0, 110) }}</p>
                <a href="{{ url('/' . $product->category_id . '/' . $product->id ) }}">...see more</a>
                <div class="d-flex price justify-content-between">
                    <span>Price: {{ $product->price }}</span>
                    <span>Quantity: {{ $product->quantity }}</span>
                </div>

                <form class="d-flex buy-form" action="{{ url('/basket/') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                    <input type="number" class="form-control offset-md-6 col-md-3 d-inline-block" name="quantity" value="1">
                    <button class="btn btn-info offset-md-1 col-md-2 d-inline-block buy-btn">Buy</button>
                </form>
            </div>
        @endforeach
    </div>
    
    <div class="pagination-box col-12 pt-2 pb-0 d-flex justify-content-center">
        {{ $products->links() }}
    </div>

@endsection
