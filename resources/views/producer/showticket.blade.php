@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
    @elseif(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">

            <div id="accordion">
                <div class="card mb-1 shadow-none">
                    <div class="card-header" id="headingOne">
                        <h6 class="m-0">
                            <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false"
                                aria-controls="collapseOne">
                                {{ __('messages.sendawnser') }}
                            </a>
                        </h6>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                        style="">
                        <div class="card-body line-height-p">
                            <form action="{{ route('producer.addticketcheckid', ['id' => $id]) }}"
                                enctype="multipart/form-data" method="POST">
                                @csrf


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
                </div>


            </div>

        </div>
    </div>

    @foreach ($tanwsers as $anwser)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <div class="media">
                            <div class="media-body">
                                <h5 style="display: inline-block" class="mt-0 mb-1 font-size-16">{{ $anwser->sendername }}
                                </h5>
                                <span style="float: left">
                                    @if (App::getLocale() == 'en')
                                        {{ $anwser->prdate }}
                                    @else
                                        {{ $anwser->date }}
                                    @endif
                                </span>
                                <p>{!! $anwser->desc !!}</p>
                            </div>

                        </div>
                        @if ($anwser->file != '')
                            <a href="{{ url('ticketsfile') }}/{{ $anwser->file }}">
                                <i class="bx bx-file-blank " style="font-size: 30px;color:blue"></i>
                            </a>
                        @endif






                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="media">
                        <div class="media-body">
                            <h5 style="display: inline-block" class="mt-0 mb-1 font-size-16">{{ $ticket->sendername }}</h5>
                            <span style="float: left">
                                @if (App::getLocale() == 'en')
                                    {{ $ticket->prdate }}
                                @else
                                    {{ $ticket->date }}
                                @endif
                            </span>
                            <p>{!! $ticket->desc !!}</p>
                        </div>

                    </div>
                    @if ($ticket->file != '')
                        <a href="{{ url('ticketsfile') }}/{{ $ticket->file }}">
                            <i class="bx bx-file-blank " style="font-size: 30px;color:blue"></i>
                        </a>
                    @endif






                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.panelshowticekt') }} {{ $ticket->title }}
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
