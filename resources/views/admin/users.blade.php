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
                                    <th>{{ __('messages.aduserstablename') }}</th>
                                    <th>{{ __('messages.aduserstableemail') }}</th>
                                    <th>{{ __('messages.aduserstablerule') }}</th>
                                    <th>{{ __('messages.gptableedit') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th>
                                            {{ $user->id }}
                                        </th>
                                        <th>
                                            {{ $user->name }}
                                        </th>
                                        <th>
                                            {{ $user->email }}
                                        </th>
                                        <th>
                                            @switch($user->rule)
                                                @case(1)
                                                    {{ __('messages.taminkonande') }}
                                                @break

                                                @case(2)
                                                    {{ __('messages.modir') }}
                                                @break

                                                @default
                                            @endswitch
                                        </th>
                                        <th>
                                            <a href="{{ route('admin.deleteuser', ['id' => $user->id]) }}"
                                                data-toggle="modal"
                                                data-target="#exampleModal{{ $user->id }}">{{ __('messages.deleteproduct') }}</a>
                                            / <a
                                                href="{{ route('admin.edituser', ['id' => $user->id]) }}">{{ __('messages.editproduct') }}</a>
                                        </th>
                                    </tr>



                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        {{ __('messages.adusersmodaltitle') }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ __('messages.adusersmodaldesc') }}
                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ __('messages.adusersmodalbtnno') }}</button>
                                                        <a href="{{ route('admin.deleteuser', ['id' => $user->id]) }}"
                                                            style="color: white"
                                                            class="btn btn-primary">{{ __('messages.adusersmodalbtnok') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    {{ __('messages.aduserspagetitle') }}
@endsection
