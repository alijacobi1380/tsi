@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="bx bx-shopping-bag"></i> {{ __('messages.panelproducttitle') }}</h5>
                    <p class="card-text">{{ __('messages.addashbordproduct') }} : <b>{{ $products }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="mdi mdi-ticket-outline"></i> {{ __('messages.panelsupport') }}</h5>
                    <p class="card-text">{{ __('messages.addashboardticket') }} : <b>{{ $tickets }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="bx bx-dollar-circle"></i> {{ __('messages.panelhesabdari') }}</h5>
                    <p class="card-text">{{ __('messages.addashboardhesabdari') }} : <b>{{ $factors }}</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="bx bx-world"></i> {{ __('messages.addashboardorderstitle') }}</h5>
                    <p class="card-text">{{ __('messages.addashboardorders') }} : <b>{{ $orders }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="far fa-id-card"></i> {{ __('messages.panelvitrin') }}</h5>
                    <p class="card-text">{{ __('messages.addashboardvitrins') }} : <b>{{ $vitrins }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="fas fa-users"></i> {{ __('messages.addashboarduserstitle') }}</h5>
                    <p class="card-text">{{ __('messages.addashboardusers') }} : <b>{{ $factors }}</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.admindashboardtitle') }}
@endsection
