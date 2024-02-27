@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <a href="{{ route('admin.addnotif') }}" type="button"
        class="btn btn-info waves-effect waves-light">{{ __('messages.adaddnotifbtn') }}</a>
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.gttablenum') }}</th>
                                    <th>{{ __('messages.adnotiftabletitle') }}</th>
                                    <th>{{ __('messages.adnotiftabledelete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($notfications as $notf)
                                        <th>
                                            {{ $notf->id }}
                                        </th>
                                        <th>

                                            @if (App::getLocale() == 'en')
                                                {{ $notf->titleen }}
                                            @else
                                                {{ $notf->title }}
                                            @endif
                                        </th>
                                        <th><a
                                                href="{{ route('admin.deletenotfication', ['id' => $notf->id]) }}">{{ __('messages.adnotifdelete') }}</a>
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
    {{ __('messages.adsidebarnotiftitle') }}
@endsection
