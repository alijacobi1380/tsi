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

                    <form action="{{ route('producer.addticketcheck') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.attitle') }}</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" value="{{ old('title') }}"
                                    id="example-text-input">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ __('messages.atforce') }}</label>
                            <div class="col-md-10">
                                <select name="force" class="form-control">
                                    <option value="1">{{ __('messages.tforce1') }}</option>
                                    <option value="2">{{ __('messages.tforce2') }}</option>
                                    <option value="3">{{ __('messages.tforce3') }}</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">{{ __('messages.atcategory') }}</label>
                            <div class="col-md-10">
                                <select name="category" class="form-control">
                                    <option value="1">{{ __('messages.tcategory1') }}</option>
                                    <option value="2">{{ __('messages.tcategory2') }}</option>
                                    <option value="3">{{ __('messages.tcategory3') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.tdesc') }}</label>
                            <div class="col-md-10">
                                <textarea id="summernote2" name="desc">
                                @if (old('desc') != '')
{{ old('enproductdesc') }}
@endif
</textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.tfile') }}</label>
                            <div class="col-md-10">
                                <input value="{{ old('file') }}" type="file" name="file" />
                            </div>
                        </div>

                        <button type="submit"
                            class="btn col-12 btn-info waves-effect waves-light">{{ __('messages.paneladdticekt') }}</button>

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
    {{ __('messages.paneladdticekt') }}
@endsection


@section('sc')
    <script src="{{ url('assets/libs/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote2').summernote();
        });
    </script>
@endsection

@section('cs')
    <link href="{{ url('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
