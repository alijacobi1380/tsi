@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="card bg-primary text-white-50">
            <div class="card-body">
                <h5 class="mt-0 mb-4 text-white"><i
                        class="mdi mdi-bullseye-arrow mr-3"></i>{{ __('messages.payfactortitle') }}</h5>
                <p class="card-text">{{ __('messages.payfactordesc') }}</p>
            </div>
        </div>

        <a href="{{ route('producer.paygo') }}" style="color: white" class="btn btn-info waves-effect waves-light col-12">{{__('messages.payfactorbtn')}}</a>
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.payfactor') }}
@endsection
