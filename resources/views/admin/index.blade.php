@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h3 class="mx-auto font-weight-bold">Products LIST:</h3>
    <table class="table product-list">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Article</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->article }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td><a href="{{ url('admin/edit-product/' . $product->id ) }}">Edit</a></td>
                <td><a href="{{ url('admin/delete-product/' . $product->id ) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="col-12 pt-2 pb-0 d-flex justify-content-center align-self-end">
        {{ $products->links() }}
    </div>
           
@endsection