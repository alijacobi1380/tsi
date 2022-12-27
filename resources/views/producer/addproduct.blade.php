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
                    <form action="{{ route('producer.addproductcheck') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="card-title">{{ __('messages.aptitle') }}</h4>
                        <br>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductname') }}</label>
                            <div class="col-md-10">
                                <input value="{{ old('productname') }}" name="productname" class="form-control"
                                    type="text" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductcategory') }}</label>
                            <div class="col-md-10">
                                <select class="col-12 form-control" name="productcategory" id="">
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductusername') }}</label>
                            <div class="col-md-10">
                                <input style="cursor: not-allowed" value="{{ Auth::user()->name }}" class="form-control"
                                    type="text" disabled id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductdesc') }}</label>
                            <div class="col-md-10">
                                <textarea id="summernote" name="productdesc">
                                    {{ old('productdesc') }}
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductimg') }}</label>
                            <div class="col-md-10">
                                <input value="{{ old('productimage') }}" type="file" name="productimage" />
                            </div>
                        </div>

                        <button type="submit"
                            class="btn btn-outline-info waves-effect waves-light col-12">{{ __('messages.apbtntitle') }}</button>

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
    {{ __('messages.panelproductadd') }}
@endsection

@section('sc')
    <script src="{{ url('assets/libs/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('cs')
    <link href="{{ url('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
