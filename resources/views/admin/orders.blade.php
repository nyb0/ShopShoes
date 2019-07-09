@extends('layouts.app')

@section('content')

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

           <h1>Here is list of all OREDRS</h1>
           
@endsection