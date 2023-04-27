@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{ $error }}
            </div>
        @endforeach
    @elseif(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    
    <a href="{{ route('admin.addreport', ['id' => $id]) }}" type="button"
        class="btn btn-info waves-effect waves-light">{{ __('messages.adminaddreportsbtn') }}</a>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">{{ __('messages.adminorderstableadddesctitle') }}</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">{{ __('messages.panelsupport') }}</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home-1" role="tabpanel">
                        <p class="mb-0">
                            <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('messages.gttablenum') }}</th>
                                                        <th>{{ __('messages.adminaddreportstabletitle') }}</th>
                                                        <th>{{ __('messages.adminaddreportstabledate') }}</th>
                                                        <th>{{ __('messages.adminaddreportstablestatus') }}</th>
                                                        <th>{{ __('messages.adminaddreportstabledesc') }}</th>
                                                        <th>{{ __('messages.adminaddreportstablefile') }}</th>
                                                        <th>{{ __('messages.gptableedit') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach ($reports as $report)
                                                            <th>
                                                                {{ $report->id }}
                                                            </th>
                                                            <th>

                                                                @if (App::getLocale() == 'en')
                                                                    {{ $report->titleen }}
                                                                @else
                                                                    {{ $report->title }}
                                                                @endif
                                                            </th>
                                                            <th>

                                                                @if (App::getLocale() == 'en')
                                                                    {{ $report->dateen }}
                                                                @else
                                                                    {{ $report->date }}
                                                                @endif
                                                            </th>

                                                            <th>
                                                                @switch($report->status)
                                                                    @case(1)
                                                                        {{ __('messages.adminreportstatu1') }}
                                                                    @break

                                                                    @case(2)
                                                                        {{ __('messages.adminreportstatu2') }}
                                                                    @break

                                                                    @case(3)
                                                                        {{ __('messages.adminreportstatu3') }}
                                                                    @break

                                                                    @default
                                                                @endswitch
                                                            </th>

                                                            <th>

                                                                @if (App::getLocale() == 'en')
                                                                    {{ $report->descen }}
                                                                @else
                                                                    {{ $report->desc }}
                                                                @endif
                                                            </th>
                                                            <th>
                                                                @if ($report->file != '')
                                                                    <a href="{{ url('reports') }}/{{ $report->file }}"
                                                                        target="_blank">{{ __('messages.gttableshow') }}</a>
                                                                @endif
                                                            </th>
                                                            <th>
                                                                <a
                                                                    href="{{ route('admin.deletereport', ['id' => $report->id]) }}">{{ __('messages.deleteproduct') }}</a>
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
                        </p>
                    </div>
                    <div class="tab-pane" id="profile-1" role="tabpanel">
                        <p class="mb-0">
                        <div class="tab-pane" id="profile-1" role="tabpanel">
                            <p class="mb-0">
                                <br>

                            <div class="card">
                                <div class="card-body">

                                    <div id="accordion">
                                        <div class="card mb-1 shadow-none">
                                            <div class="card-header" id="headingOne">
                                                <h6 class="m-0">
                                                    <a href="#collapseOne" class="text-dark collapsed"
                                                        data-toggle="collapse" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        {{ __('messages.sendawnser') }}
                                                    </a>
                                                </h6>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordion" style="">
                                                <div class="card-body line-height-p">
                                                    <form
                                                        action="{{ route('admin.addserviceticketcheck', ['id' => $order->id]) }}"
                                                        enctype="multipart/form-data" method="POST">
                                                        @csrf


                                                        <div class="form-group row">
                                                            <label for="example-text-input"
                                                                class="col-md-2 col-form-label">{{ __('messages.tdesc') }}</label>
                                                            <div class="col-md-10">
                                                                <textarea id="summernote" name="desc">
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
                                                                <input value="{{ old('file') }}" type="file"
                                                                    name="file" />
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
                                                        <h5 style="display: inline-block" class="mt-0 mb-1 font-size-16">
                                                            {{ $anwser->sendername }}
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





                            </p>
                        </div>
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('cs')
    <link href="{{ url('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection

@section('sc')
    <script src="{{ url('assets/libs/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('pagetitle')
    {{ __('messages.adminorderstableadddesc') }} {{ $order->servicename }} {{ $order->username }}
@endsection
