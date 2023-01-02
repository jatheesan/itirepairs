@extends('layouts.admin')
@section('pagetitle','Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- __('You are logged in!') --}}
                    <div class="row justify-content-center">
                        <img src="{{ asset('images/itislide-3.png') }}" alt="itirepairs">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
