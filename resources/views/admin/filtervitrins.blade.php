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
                                    <th>{{ __('messages.advitrintableusername') }}</th>
                                    <th>{{ __('messages.advitrintablestatus') }}</th>
                                    <th>{{ __('messages.advitrintablechange') }}</th>
                                    <th>{{ __('messages.advtedit') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($vitrins as $vitrin)
                                        <th>
                                            {{ $vitrin->id }}
                                        </th>
                                        <th>
                                            {{ $vitrin->username }}
                                        </th>
                                        <th>
                                            @switch($vitrin->status)
                                                @case(0)
                                                    <p style="color: blue"><i style="font-size: 20px" class="bx bx-user"></i>
                                                        {{ __('messages.advtwaitforsee') }}</p>
                                                @break

                                                @case(1)
                                                    <p style="color: green"><i style="font-size: 20px" class="bx bx-user-check"></i>
                                                        {{ __('messages.advtaccepted') }}</p>
                                                @break

                                                @case(2)
                                                    <p style="color: red"><i style="font-size: 20px" class="bx bx-user-x"></i>
                                                        {{ __('messages.advtignore') }}</p>
                                                @break

                                                @default
                                            @endswitch
                                        </th>
                                        <th>
                                            <a
                                                href="{{ route('admin.changevitrinstatus', ['id' => $vitrin->id, 'status' => 1]) }}">{{ __('messages.advitrintableok') }}</a>
                                            / <a
                                                href="{{ route('admin.changevitrinstatus', ['id' => $vitrin->id, 'status' => 2]) }}">{{ __('messages.advitrintableno') }}</a>
                                        </th>
                                        <th>
                                            <a
                                                href="{{ route('admin.editvitrin', ['id' => $vitrin->id]) }}">{{ __('messages.advtedit') }}</a>
                                        </th>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.advitrsinsmanage') }}
@endsection
