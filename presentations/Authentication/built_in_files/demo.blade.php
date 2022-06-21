@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Demo Page') }}</div>

                <div class="card-body">
                    <h1>Demo Page</h1>
                    
                    @if(Auth::check())
                    {{ __('You are logged in!') }}
                    @else 
                    {{ __('You are logged out!')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection