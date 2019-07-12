@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product['id'] }}</th>
                    <td>{{ $product['article'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>
                        <form action="/basket/deleteFromBasket" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product['id'] }}">

                            <button class="btn btn-danger">delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h4>Total price: {{ $totalPrice }}</h4>

        <div>
            <a class="btn btn-info" href="{{ url('/basket/checkout') }}">Checkout</a>
        </div>
    </div>

@endsection
