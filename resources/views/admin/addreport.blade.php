@extends('admin.layout.sidebar')

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
                    <form action="{{ route('admin.addreportcheck', ['id' => $id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf



                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adminaddreportstabletitle') }}</label>
                            <div class="col-md-10">
                                <input value="{{ old('title') }}" name="title" class="form-control" type="text"
                                    id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adminaddreportstabletitle') }} (
                                {{ __('messages.english') }} )</label>
                            <div class="col-md-10">
                                <input value="{{ old('titleen') }}" name="titleen" class="form-control" type="text"
                                    id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ __('messages.adminaddreportstablestatus') }}</label>
                            <div class="col-md-10">
                                <select name="status" class="form-control">
                                    <option value="1">{{ __('messages.adminreportstatu1') }}</option>
                                    <option value="2">{{ __('messages.adminreportstatu2') }}</option>
                                    <option value="3">{{ __('messages.adminreportstatu3') }}</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adminaddreportstabledate') }}</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input value="{{ old('date') }}" name="date" type="text"
                                        class="form-control datepicker" placeholder="yyyy/mm/dd" data-provide="datepicker"
                                        data-date-language="fa" data-date-orientation="right">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adminaddreportstabledate') }} (
                                {{ __('messages.english') }} )</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input value="{{ old('dateen') }}" name="dateen" type="text" class="form-control"
                                        placeholder="yyyy/mm/dd" data-provide="datepicker" data-date-language="fa"
                                        data-date-orientation="right" data-date-autoclose="true">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adminaddreportstabledesc') }}</label>
                            <div class="col-md-10">
                                <textarea id="summernote" name="desc">
                                    {{ old('desc') }}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adminaddreportstabledesc') }}
                                ( {{ __('messages.english') }} )</label>
                            <div class="col-md-10">
                                <textarea id="summernote2" name="descen">
                                    {{ old('descen') }}
                                </textarea>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adminaddreportstablefile') }}</label>
                            <div class="col-md-10">
                                <input type="file" name="file" />
                            </div>
                        </div>


                        <button type="submit"
                            class="btn btn-outline-info waves-effect waves-light col-12">{{ __('messages.adminaddreportsbtn') }}</button>

                </div>
                </form>
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
    {{ __('messages.adminaddreportsbtn') }} {{ $order->servicename }} {{ $order->username }}
@endsection

@section('sc')
    <script src="{{ url('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap-datepicker/locales/bootstrap-datepicker.fa.min.js') }}"></script>
    <script src="{{ url('assets/libs/datepicker-jalali/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/libs/datepicker-jalali/bootstrap-datepicker.fa.min.js') }}"></script>
    <script src="{{ url('assets/libs/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote2').summernote();
        });

        $('.datepicker').datepicker({
            dateFormat: "yy/mm/dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,

        });
    </script>
@endsection

@section('cs')
    <link href="{{ url('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/libs/datepicker-jalali/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection
