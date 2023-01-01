@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title">{{ __('messages.pytitle') }}</h4> --}}
                    <h6 class="card-title">{{ __('messages.pydaycount') }} : {{ $ekhtelafzaman }} {{__('messages.pyday')}}</h6>
                    <br>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.pynumber') }}</th>
                                    <th>{{ __('messages.pytransid') }}</th>
                                    <th>{{ __('messages.pyprice') }}</th>
                                    <th>{{ __('messages.pyusername') }}</th>
                                    <th>{{ __('messages.pydate') }}</th>
                                    <th>{{ __('messages.pywhen') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($factors as $factor)
                                    <tr>
                                        <th scope="row">{{ $factor->id }}</th>
                                        <th>{{ $factor->transid }}</th>
                                        <th>{{ number_format($factor->price) }}</th>
                                        <th>{{ $factor->username }}</th>
                                        <th>{{ $factor->date }}</th>
                                        <th>{{ $factor->when }}</th>
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
