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


                    {{-- <h4 class="card-title">{{ __('messages.vitrintitle') }}</h4> --}}
                    {{-- <p class="card-title-desc">از تب های بوت استرپ برای ایجاد محتوای دارای سربرگ استفاده کنید.</p> --}}
                    <br><br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">{{ __('messages.vttitle1') }}</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">{{ __('messages.vtaddres') }}</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">{{ __('messages.vtcert') }}</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->

                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home-1" role="tabpanel">
                            <p class="mb-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <form id="form"
                                                action="{{ route('admin.editvitrincheck', ['id' => $vitrin->id]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="row col-12">

                                                    <div class="custom-control custom-checkbox col-3">
                                                        <input @if ($vitrin->danesh == 1) checked="" @endif
                                                            value="1" name="danesh" type="checkbox"
                                                            class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label"
                                                            for="customCheck1">{{ __('messages.adeditvtdaneshbonian') }}</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox col-3">
                                                        <input @if ($vitrin->konsers == 1) checked="" @endif value="1" name="konsers" type="checkbox"
                                                            class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label"
                                                            for="customCheck2">{{ __('messages.adeditvtkonsers') }}</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox col-3">
                                                        <input @if ($vitrin->taeed == 1) checked="" @endif value="1" name="taeed" type="checkbox"
                                                            class="custom-control-input" id="customCheck3">
                                                        <label class="custom-control-label"
                                                            for="customCheck3">{{ __('messages.adeditvtaccepted') }}</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox col-3">
                                                        <input @if ($vitrin->esalat == 1) checked="" @endif value="1" name="esalat" type="checkbox"
                                                            class="custom-control-input" id="customCheck4">
                                                        <label class="custom-control-label"
                                                            for="customCheck4">{{ __('messages.adeditvtesalat') }}</label>
                                                    </div>



                                                </div>
                                                <br><br>

                                                <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">{{ __('messages.vtcompanyname') }}</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" value="{{ $vitrin->brandname }}"
                                                            name="brandname" type="text" id="example-text-input">
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">{{ __('messages.vtcompanynameen') }}</label>
                                                    <div class="col-md-10">
                                                        <input placeholder="{{ __('messages.ekhtiari') }}"
                                                            class="form-control" value="{{ $vitrin->brandname }}"
                                                            name="brandnameen" type="text" id="example-text-input">
                                                    </div>
                                                </div> --}}

                                                <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">{{ __('messages.vtdesc') }}</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" value="{{ $vitrin->desc }}"
                                                            name="desc" type="text" id="example-text-input">
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">{{ __('messages.vtdescen') }}</label>
                                                    <div class="col-md-10">
                                                        <input placeholder="{{ __('messages.ekhtiari') }}"
                                                            class="form-control" value="{{ $vitrin->descen }}"
                                                            name="descen" type="text" id="example-text-input">
                                                    </div>
                                                </div> --}}


                                                <div class="form-group row">
                                                    <label
                                                        class="col-md-2 col-form-label">{{ __('messages.vtsize') }}</label>
                                                    <div class="col-md-10">
                                                        <select name="size" class="form-control">
                                                            <option value="1"
                                                                @if ($vitrin->size == 1) selected="selected" @endif>
                                                                {{ __('messages.vtsize1') }}
                                                            </option>
                                                            <option value="2"
                                                                @if ($vitrin->size == 2) selected="selected" @endif>
                                                                {{ __('messages.vtsize2') }}
                                                            </option>
                                                            <option value="3"
                                                                @if ($vitrin->size == 3) selected="selected" @endif>
                                                                {{ __('messages.vtsize3') }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label
                                                        class="col-md-2 col-form-label">{{ __('messages.vtimage') }}</label>
                                                    <div class="col-md-10">
                                                        <div class="custom-file">
                                                            <input value="{{ old('logo') }}" name="logo"
                                                                type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label"
                                                                for="customFile">{{ __('messages.vtselectfile') }}</label>
                                                        </div>
                                                        @if ($vitrin->logo)
                                                            <a target="_blank"
                                                                href="{{ url('vitrinimg') }}/{{ $vitrin->logo }}"><i
                                                                    class="bx bx-file-blank"></i></a>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label
                                                        class="col-md-2 col-form-label">{{ __('messages.vtbaner') }}</label>
                                                    <div class="col-md-10">
                                                        <div class="custom-file">
                                                            <input value="{{ old('baner') }}" name="baner"
                                                                type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label"
                                                                for="customFile">{{ __('messages.vtselectfile') }}</label>
                                                        </div>
                                                        @if ($vitrin->baner)
                                                            <a target="_blank"
                                                                href="{{ url('vitrinimg') }}/{{ $vitrin->baner }}"><i
                                                                    class="bx bx-file-blank"></i></a>
                                                        @endif
                                                    </div>
                                                </div>




                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            </p>
                        </div>
                        <div class="tab-pane" id="profile-1" role="tabpanel">
                            <p class="mb-0">
                                <br>

                            {{-- <h4>{{ __('messages.farsi') }}</h4> --}}
                            <br>

                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtcountry') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtcountry" value="{{ $vitrin->country }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtstate') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtstate" value="{{ $vitrin->state }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtcity') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtcity" value="{{ $vitrin->city }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp1') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp1" value="{{ $vitrin->prop1 }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp2') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp2" value="{{ $vitrin->prop2 }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp3') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp3" value="{{ $vitrin->prop3 }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp4') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp4" value="{{ $vitrin->prop4 }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp5') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp5" value="{{ $vitrin->prop5 }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>
                            <br><br>

                            {{-- <h4>{{ __('messages.english') }}</h4>
                            <br>

                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtcountry') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtcountryen" value="{{ $vitrin->countryen }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtstate') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtstateen" value="{{ $vitrin->stateen }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtcity') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtcityen" value="{{ $vitrin->cityen }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp1') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp1en" value="{{ $vitrin->prop1en }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp2') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp2en" value="{{ $vitrin->prop2en }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp3') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp3en" value="{{ $vitrin->prop3en }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp4') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp4en" value="{{ $vitrin->prop4en }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtprp5') }}</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="vtprp5en" value="{{ $vitrin->prop5en }}"
                                        type="text" id="example-text-input">
                                </div>
                            </div> --}}


                            </p>
                        </div>
                        <div class="tab-pane" id="messages-1" role="tabpanel">
                            <p class="mb-0">
                                <br>

                            {{-- <h4>{{ __('messages.farsi') }}</h4> --}}
                            <br>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert1') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert1" value="{{ old('vtcert1') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert1)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert1 }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert2') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert2" value="{{ old('vtcert2') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert2)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert2 }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert3') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert3" value="{{ old('vtcert3') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert3)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert3 }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert4') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert4" value="{{ old('vtcert4') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert4)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert4 }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert5') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert5" value="{{ old('vtcert5') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert5)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert5 }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtaboutus') }}</label>
                                <div class="col-md-10">
                                    <textarea id="summernote" name="aboutus">
                                        {{ $vitrin->aboutus }}
                                    </textarea>
                                </div>
                            </div>

                            <br>
                            {{-- <h4>{{ __('messages.english') }}</h4>
                            <br>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert1') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert1en" value="{{ old('vtcert1en') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert1en)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert1en }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert2') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert2en" value="{{ old('vtcert2en') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert2en)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert2en }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert3') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert3en" value="{{ old('vtcert3en') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert3en)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert3en }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert4') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert4en" value="{{ old('vtcert4en') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert4en)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert4en }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">{{ __('messages.vtcert5') }}</label>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input name="vtcert5en" value="{{ old('vtcert5en') }}" type="file"
                                            class="custom-file-input" id="customFile">
                                        <label class="custom-file-label"
                                            for="customFile">{{ __('messages.vtselectfile') }}</label>
                                    </div>
                                    @if ($vitrin->cert5en)
                                        <a target="_blank" href="{{ url('vitrinimg') }}/{{ $vitrin->cert5en }}"><i
                                                class="bx bx-file-blank"></i></a>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-md-2 col-form-label">{{ __('messages.vtaboutus') }}</label>
                                <div class="col-md-10">
                                    <textarea id="summernote2" name="aboutusen">
                                        {{ $vitrin->aboutusen }}
                                    </textarea>
                                </div>
                            </div> --}}


                            </p>
                        </div>

                        </form>


                    </div>
                    <button id="btn" type="button"
                        class="col-12 btn btn-primary waves-effect waves-light">{{ __('messages.vtbtn') }}</button>


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
            <!-- end col -->
        </div>
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.advteditpage') }}
@endsection

@section('sc')
    <script src="{{ url('assets/libs/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote2').summernote();
        });
    </script>

    <script>
        document.getElementById('btn').addEventListener('click', function() {
            document.getElementById('form').submit();
        });
    </script>
@endsection

@section('cs')
    <link href="{{ url('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
