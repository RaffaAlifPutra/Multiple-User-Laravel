@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{ 'Level User Anda: ' }}

                    @if(Auth::check())
        @if(Auth::user()->role == 'admin')
                     {{ 'admin' }}
                     @endif
        @if(Auth::user()->role == 'hubin')
                     {{ 'hubin' }}
                     @endif
        @if(Auth::user()->role == 'siswa')
                     {{ 'siswa' }}
                     @endif
                     @endif
                     {{ __('You are logged in!')  }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
