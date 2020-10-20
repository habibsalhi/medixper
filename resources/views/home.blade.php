@extends('layouts.app')

@section('content')

   @livewire('trays.trays')


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
