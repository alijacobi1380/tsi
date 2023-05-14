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
                    <form action="{{ route('admin.filtervitrins') }}" method="GET">
                        <div class="form-group row">
                            <label class=" col-form-label">{{ __('messages.adminordertableusername') }}</label>
                            <div class="col-md-4">
                                <select name="name" class="form-control">
                                    <option value="all">{{ __('messages.panelallusers') }}</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class=" col-form-label">{{ __('messages.gttablestatus') }}</label>
                            <div class="col-md-4">
                                <select name="status" class="form-control">
                                    <option value="0">{{ __('messages.advtwaitforsee') }}</option>
                                    <option value="1">{{ __('messages.advtaccepted') }}</option>
                                    <option value="2">{{ __('messages.advtignore') }}</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="btn btn-info waves-effect waves-light">{{ __('messages.panelsearch') }}</button>
                        </div>
                    </form>
                    <br><br>

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
                                @foreach ($vitrins as $vitrin)
                                <tr>
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
    {{ __('messages.advitrsinsmanage') }}
@endsection
