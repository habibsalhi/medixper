@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <div
                            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center">
                            <div class="content">
                                <div class="title m-b-md">
                                    <h1>Light</h1>
                                </div>

                                @livewire('agencies.agencies')
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
