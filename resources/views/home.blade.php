@extends('layouts.app')

@section('content')

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <h1>WELCOME TO HOME-PAGE</h1>

@endsection
