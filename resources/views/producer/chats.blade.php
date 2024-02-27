@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('cs')
    <style>
        #chat2 .form-control {
            border-color: transparent;
        }

        #chat2 .form-control:focus {
            border-color: transparent;
            box-shadow: inset 0px 0px 0px 1px transparent;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .hv {
            transition: 1s;
        }

        .hv:hover {
            color: blue;
            transition: 1s;
        }
    </style>
@endsection

@section('content')
    @livewire('producerchats')
@endsection

@section('pagetitle')
    {{ __('messages.panelchatlist') }}
@endsection

