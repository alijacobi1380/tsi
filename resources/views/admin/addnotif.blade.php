@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.addnotifcheck') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adnotiftabletitle') }} (
                                {{ __('messages.farsi') }} )</label>
                            <div class="col-md-10">
                                <input class="form-control" name="title" type="text" id="example-text-input">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adnotiftabletitle') }} (
                                {{ __('messages.english') }} )</label>
                            <div class="col-md-10">
                                <input class="form-control" name="titleen" type="text" id="example-text-input">
                            </div>
                        </div>

                        <button type="submit"
                            class="btn col-12 btn-info waves-effect waves-light">{{ __('messages.adaddnotifbtnform') }}</button>

                    </form>

                </div>
            </div>
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger col-12" role="alert">{{ $error }}</div>
            @endforeach
        @elseif(session()->has('message'))
            <div class="alert alert-success col-12" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <!-- end col -->
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.adaddnotifbtn') }}
@endsection
