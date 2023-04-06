@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title">{{ __('messages.adminordertitle') }}</h4> --}}
                    <br>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.adminordertableid') }}</th>
                                    <th>{{ __('messages.adminordertablephone') }}</th>
                                    <th>{{ __('messages.adminordertableusername') }}</th>
                                    <th>{{ __('messages.adminordertableservicename') }}</th>
                                    <th>{{ __('messages.adminordertabledate') }}</th>
                                    <th>{{ __('messages.adminordertableenddate') }}</th>
                                    <th>{{ __('messages.adminordertablesprice') }}</th>
                                    <th>{{ __('messages.adminordertablefactor') }}</th>
                                    <th>{{ __('messages.adminorderstableadddesctitle') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $order->id }}</th>
                                        <td>{{ $order->phonenumber }}</td>
                                        <td>{{ $order->username }}</td>
                                        <td>{{ $order->servicename }}</td>
                                        <td>{{ $order->date }}</td>
                                        @foreach ($factors as $factor)
                                            @if ($order->id == $factor->orderid)
                                                <td>
                                                    {{ $factor->when }}
                                                </td>
                                                <td>
                                                    {{ number_format($factor->price) }}
                                                </td>
                                            @endif
                                        @endforeach
                                        <td>
                                            @if ($order->paystatus == 0)
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{ $order->id }}">
                                                    {{ __('messages.adminsodorfactor') }}
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $order->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    {{ __('messages.pricemodal') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form method="POST"
                                                                action="{{ route('admin.addfactor', ['id' => $order->id, 'userid' => $order->userid, 'username' => $order->username, 'serviceid' => $order->serviceid]) }}">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    {{ __('messages.pyprice') }} : <input
                                                                        style="text-align: center" type="number"
                                                                        name="price" id="" required>
                                                                    <br><br>
                                                                    {{ __('messages.pydays') }} : <input required
                                                                        style="text-align: center" type="number"
                                                                        name="day" id="">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">{{ __('messages.pricemodalcancel') }}</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">{{ __('messages.pricemodalsave') }}
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- "{{ route('admin.addfactor', ['id' => $order->id, 'userid' => $order->userid, 'username' => $order->username, 'price' => 5000000, 'serviceid' => $order->serviceid]) }}" --}}
                                            @endif

                                            @if ($order->paystatus == 1)
                                                {{ __('messages.adminwaitforpay') }}
                                            @endif

                                            @if ($order->paystatus == 2)
                                                {{ __('messages.transid') }} @foreach ($factors as $factor)
                                                    @if ($order->id == $factor->orderid)
                                                        ({{ $factor->transid }})
                                                    @endif
                                                @endforeach
                                            @endif

                                        </td>

                                        <td>
                                            <a
                                                href="{{ route('admin.showserviereport', ['id' => $order->id]) }}">{{ __('messages.adminorderstableadddesc') }}</a>
                                        </td>

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
    {{ __('messages.adminorderspagetitle') }}
@endsection
