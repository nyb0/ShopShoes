@extends('layouts.app')

@section('content')
    <div class="col-md-12 d-flex justify-content-center p-0 m-0">
        <div class="auth col-md-7 p-0">
            <div class="auth-header">{{ __('Verify Your Email Address') }}</div>

            <div class="p-3 auth-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
    </div>
@endsection
