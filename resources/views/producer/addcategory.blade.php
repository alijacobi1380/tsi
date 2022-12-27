@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('producer.addcategorycheck') }}" method="POST">
                        @csrf
                        <h4 class="card-title">{{ __('messages.actitle') }}</h4>
                        <br>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.acproductname') }}</label>
                            <div class="col-md-10">
                                <input value="{{ old('title') }}" name="title" class="form-control" type="text"
                                    id="example-text-input">
                            </div>
                        </div>

                        <button type="submit"
                            class="btn btn-outline-info waves-effect waves-light col-12">{{ __('messages.acbtntitle') }}</button>
                    </form>

                </div>

            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @elseif(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <!-- end col -->
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.panelcategoryadd') }}
@endsection
