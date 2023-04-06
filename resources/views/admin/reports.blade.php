@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <a href="{{ route('admin.addreport', ['id' => $id]) }}" type="button"
        class="btn btn-info waves-effect waves-light">{{ __('messages.adminaddreportsbtn') }}</a>
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
@endsection

@section('pagetitle')
    {{ __('messages.adminorderstableadddesc') }} {{ $order->servicename }} {{ $order->username }}
@endsection
