@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="accordion" id="accordionExample">

        @foreach($orders as $order)

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $order->id }}" aria-expanded="false" aria-controls="collapse{{ $order->id }}">
                            Order ID #{{ $order->id }}, Total price = {{ $order->total_price }} $.
                        </button>
                    </h2>
                </div>

                <div id="collapse{{ $order->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Product name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->article }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection
