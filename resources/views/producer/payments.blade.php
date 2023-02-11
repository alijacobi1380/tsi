@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection


@section('content')
    @if (session()->has('messageerror'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('messageerror') }}
        </div>
    @elseif(session()->has('messageverify'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('messageverify') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title">{{ __('messages.pytitle') }}</h4> --}}
                    <h6 class="card-title">{{ __('messages.pydaycount') }}
                    </h6>
                    <br>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.pynumber') }}</th>
                                    <th>{{ __('messages.pytransid') }}</th>
                                    <th>{{ __('messages.pyprice') }}</th>
                                    <th>{{ __('messages.pyusername') }}</th>
                                    <th>{{ __('messages.adminordertableservicename') }}</th>
                                    <th>{{ __('messages.pydate') }}</th>
                                    <th>{{ __('messages.pywhen') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($factors as $factor)
                                    <tr>
                                        <th scope="row">{{ $factor->id }}</th>
                                        <th>
                                            @if ($factor->paystatus == 1 || $ekhtelafzaman == 0)
                                                <a
                                                    href="{{ route('producer.paygo', ['id' => $factor->id]) }}">{{ __('messages.payfactorbtn') }}</a>
                                            @elseif($factor->paystatus == 2)
                                                {{ __('messages.transid') }} ( {{ $factor->transid }} )
                                            @endif
                                        </th>
                                        <th>{{ number_format($factor->price) }}</th>
                                        <th>{{ $factor->username }}</th>
                                        <th>
                                            @switch($factor->serviceid)
                                                @case(1)
                                                    {{ __('messages.serviceonepagetitle') }}
                                                @break

                                                @case(2)
                                                    {{ __('messages.servicetwopagetitle') }}
                                                @break

                                                @case(3)
                                                    {{ __('messages.servicethreepagetitle') }}
                                                @break

                                                @case(4)
                                                    {{ __('messages.servicefourpagetitle') }}
                                                @break

                                                @case(5)
                                                    {{ __('messages.servicefivepagetitle') }}
                                                @break

                                                @case(6)
                                                    {{ __('messages.servicesixpagetitle') }}
                                                @break

                                                @default
                                            @endswitch
                                        </th>
                                        <th>
                                            @if (App::getLocale() == 'en')
                                                {{ Verta::parse($factor->prdate)->datetime()->format('Y-m-d') }}
                                            @else
                                                {{ $factor->date }}
                                            @endif
                                        </th>
                                        <th>
                                            @if (App::getLocale() == 'en')
                                                {{ Verta::parse($factor->prwhen)->datetime()->format('Y-m-d') }}
                                            @else
                                                {{ $factor->when }}
                                            @endif
                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('pagetitle')
    {{ __('messages.panelhesabdari') }}
@endsection
