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

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.gttablenum') }}</th>
                                    <th>{{ __('messages.gttabletitle') }}</th>
                                    <th>{{ __('messages.gttablestatus') }}</th>
                                    <th>{{ __('messages.gttableforce') }}</th>
                                    <th>{{ __('messages.gttablecategory') }}</th>
                                    <th>{{ __('messages.gttableshow') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <th>{{ $ticket->id }}</th>
                                        <th>{{ $ticket->title }}</th>
                                        <th
                                            style="color: @switch($ticket->status)
                                        @case(1)
                                            red;
                                        @break

                                        @case(2)
                                            blue;
                                        @break

                                        @case(3)
                                            green;
                                        @break

                                        @default
                                    @endswitch">
                                            @switch($ticket->status)
                                                @case(1)
                                                    {{ __('messages.tstatus1') }}
                                                @break

                                                @case(2)
                                                    {{ __('messages.tstatus2') }}
                                                @break

                                                @case(3)
                                                    {{ __('messages.tstatus3') }}
                                                @break

                                                @default
                                            @endswitch
                                        </th>
                                        <th>
                                            @switch($ticket->force)
                                                @case(1)
                                                    {{ __('messages.tforce1') }}
                                                @break

                                                @case(2)
                                                    {{ __('messages.tforce2') }}
                                                @break

                                                @case(3)
                                                    {{ __('messages.tforce3') }}
                                                @break

                                                @default
                                            @endswitch
                                        </th>
                                        <th>
                                            @switch($ticket->category)
                                                @case(1)
                                                    {{ __('messages.tcategory1') }}
                                                @break

                                                @case(2)
                                                    {{ __('messages.tcategory2') }}
                                                @break

                                                @case(3)
                                                    {{ __('messages.tcategory3') }}
                                                @break

                                                @default
                                            @endswitch
                                        </th>
                                        <th><a
                                                href="{{ route('admin.showticket', ['id' => $ticket->id]) }}">{{ __('messages.gttableshow') }}</a>
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
@endsection

@section('pagetitle')
    {{ __('messages.adminticketspagetitle') }}
@endsection
