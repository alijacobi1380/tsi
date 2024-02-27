@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="bx bx-shopping-bag"></i> {{ __('messages.panelproducttitle') }}</h5>
                    <p class="card-text">{{ __('messages.dashbordproduct') }} : <b>{{ $products }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="mdi mdi-ticket-outline"></i> {{ __('messages.panelsupport') }}</h5>
                    <p class="card-text">{{ __('messages.dashboardticket') }} : <b>{{ $tickets }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0 mb-4"><i class="bx bx-dollar-circle"></i> {{ __('messages.panelhesabdari') }}</h5>
                    <p class="card-text">{{ __('messages.dashboardhesabdari') }} : <b>{{ $factors }}</b></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0 mb-4"><i class="bx bx-notification"></i>
                    {{ __('messages.panelnotfi') }}</h5>
                <p class="card-text">

                    @if ($notfications->count() > 0)
                        @foreach ($notfications as $notfication)
                            @if (App::getLocale() == 'en')
                                <div class="alert alert-info mb-0" role="alert"><i class="bx bx-badge-check"></i>
                                    {{ $notfication->titleen }}</div>
                            @else
                                <div class="alert alert-info mb-0" role="alert"><i class="bx bx-badge-check"></i>
                                    {{ $notfication->title }}</div>
                                <br>
                            @endif
                        @endforeach
                    @else
                        {{ __('messages.nonotifi') }}
                    @endif

                </p>
            </div>
        </div>
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.paneldashboard') }}
@endsection
