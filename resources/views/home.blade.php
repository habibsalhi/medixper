@extends('layouts.app')

@section('content')
    <div class="container"  style="    font-size: 0.85rem;">
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

                        <div
                            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center">
                            <div class="content">
                               @livewire('agencies.agencies')
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .pl-4, .px-4 {
        padding-left: 0.25rem!important;
    }
    constructed stylesheet
    .pr-4, .px-4 {
        padding-right: 0.25rem!important;
    }
    constructed stylesheet
    .pb-2, .py-2 {
        padding-bottom: .25rem!important;
    }
    constructed stylesheet
    .pt-2, .py-2 {
        padding-top: .25rem!important;
    }
</style>
@endsection
