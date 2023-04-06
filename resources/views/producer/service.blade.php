@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('cs')
    <style>
        .excel,
        .pdf {
            cursor: pointer;
            font-size: 15px;
            margin: 5px;
        }

        .button-container-2 {
            position: relative;
            width: 100%;
            height: 50px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 7vh;
            overflow: hidden;
            border: 1px solid #000;
            font-family: "secondary-font", "primary-font", "segoe ui", "tahoma";
            ;
            font-weight: 300;
            font-size: 15px;
            transition: 0.5s;
            letter-spacing: 1px;
            border-radius: 8px;
        }

        .button-container-2 button {
            width: 101%;
            height: 100%;
            font-family: "secondary-font", "primary-font", "segoe ui", "tahoma";
            font-weight: 300;
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: bold;
            background: #000;
            -webkit-mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/urban-sprite.png");
            mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/urban-sprite.png");
            -webkit-mask-size: 3000% 100%;
            mask-size: 3000% 100%;
            border: none;
            color: #fff;
            cursor: pointer;
            -webkit-animation: ani2 0.7s steps(29) forwards;
            animation: ani2 0.7s steps(29) forwards;
        }

        .button-container-2 button:hover {
            -webkit-animation: ani 0.7s steps(29) forwards;
            animation: ani 0.7s steps(29) forwards;
        }

        .mas {
            position: absolute;
            color: #000;
            text-align: center;
            width: 101%;
            font-family: "Lato", sans-serif;
            font-weight: 300;
            position: absolute;
            font-size: 15px;
            margin-top: 13px;
            overflow: hidden;
            font-weight: bold;
        }

        @-webkit-keyframes ani {
            from {
                -webkit-mask-position: 0 0;
                mask-position: 0 0;
            }

            to {
                -webkit-mask-position: 100% 0;
                mask-position: 100% 0;
            }
        }

        @keyframes ani {
            from {
                -webkit-mask-position: 0 0;
                mask-position: 0 0;
            }

            to {
                -webkit-mask-position: 100% 0;
                mask-position: 100% 0;
            }
        }

        @-webkit-keyframes ani2 {
            from {
                -webkit-mask-position: 100% 0;
                mask-position: 100% 0;
            }

            to {
                -webkit-mask-position: 0 0;
                mask-position: 0 0;
            }
        }

        @keyframes ani2 {
            from {
                -webkit-mask-position: 100% 0;
                mask-position: 100% 0;
            }

            to {
                -webkit-mask-position: 0 0;
                mask-position: 0 0;
            }
        }

        a {
            color: #00ff95;
        }

        .button-container-3 {
            position: relative;
            width: 100px;
            height: 50px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 8vh;
            overflow: hidden;
            border: 1px solid #000;
            font-family: "Lato", sans-serif;
            font-weight: 300;
            transition: 0.5s;
            letter-spacing: 1px;
            border-radius: 8px;
        }

        .button-container-3 button {
            width: 101%;
            height: 100%;
            font-family: "Lato", sans-serif;
            font-weight: 300;
            font-size: 11px;
            letter-spacing: 1px;
            font-weight: bold;
            background: #000;
            -webkit-mask: url("https://raw.githubusercontent.com/pizza3/asset/master/natureSmaller.png");
            mask: url("https://raw.githubusercontent.com/pizza3/asset/master/natureSmaller.png");
            -webkit-mask-size: 7100% 100%;
            mask-size: 7100% 100%;
            border: none;
            color: #fff;
            cursor: pointer;
            -webkit-animation: ani2 0.7s steps(70) forwards;
            animation: ani2 0.7s steps(70) forwards;
        }

        .button-container-3 button:hover {
            -webkit-animation: ani 0.7s steps(70) forwards;
            animation: ani 0.7s steps(70) forwards;
        }
    </style>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                @if ($factorstatus != 0)
                    @if ($order)
                        @if ($factor && $factor->paystatus == 1)
                            <a href="{{ route('producer.payments') }}">
                                <h5>{{ __('messages.servicefactorpay') }} .</h5>
                            </a>
                            <br>
                            <h5>{{ __('messages.servicefactorpaycode') }}
                                {{ $factor->id }}</h5>
                        @else
                            <div class="alert alert-info mb-0" role="alerdiv">{{ __('messages.ord1') }}{{ $order->date }}
                                {{ __('messages.ord2') }}
                                {{ $order->phonenumber }} {{ __('messages.ord3') }}
                                <div>{{ __('messages.waittosuportcallyou') }}</div>
                            </div>
                        @endif
                    @else
                        @livewire('service', ['id' => $serviceid])
                    @endif
                @else
                    <div class="col-12 row" style="text-align: left">
                        <div style="text-align: right" class="col-lg-6 col-md-12">
                            <h4>{{ __('messages.adminorderstableadddesctitle') }}</h4>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <i title="excel" id="export_button" class="excel far fa-file-excel"></i>
                            <i title="pdf" onclick="printDiv()" id="pdf" class="pdf far fa-file-pdf"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="table" class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('messages.gttablenum') }}</th>
                                                    <th>{{ __('messages.adminaddreportstabletitle') }}</th>
                                                    <th>{{ __('messages.adminaddreportstabledate') }}</th>
                                                    <th>{{ __('messages.adminaddreportstablestatus') }}</th>
                                                    <th>{{ __('messages.adminaddreportstabledesc') }}</th>
                                                    <th>{{ __('messages.adminaddreportstablefile') }}</th>
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
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif





            </div>



        </div>
    </div>
@endsection

@section('pagetitle')
    @if ($serviceid < 0 || $serviceid > 6)
        @php
            $serviceid = 1;
        @endphp
    @endif
    @switch($serviceid)
        @case(1)
            {{ __('messages.serviceonepagetitle') }}
        @break

        @case(2)
            {{ __('messages.servicetwopagetitle') }}
        @break

        @case(3)
            {{ __('messages.servicethreepagetitle') }}
        @break

        @case(4)
            {{ __('messages.servicefourpagetitle') }}
        @break

        @case(5)
            {{ __('messages.servicefivepagetitle') }}
        @break

        @case(6)
            {{ __('messages.servicesixpagetitle') }}
        @break

        @default
    @endswitch
@endsection

@section('pagetitleright')
    <div class="page-title-right">
        <a title="{{ __('messages.question') }}" href="{{ route('producer.questionservice', ['id' => $serviceid]) }}"><i
                style="color: white;font-size: 25px" class="bx bx-help-circle"></i></a>
    </div>
@endsection

@section('sc')
    <script src="{{ url('js/excel.js') }}"></script>
    <script>
        function html_table_to_excel(type) {
            var data = document.getElementById('table');

            var file = XLSX.utils.table_to_book(data, {
                sheet: "sheet1"
            });

            XLSX.write(file, {
                bookType: type,
                bookSST: true,
                type: 'base64'
            });

            XLSX.writeFile(file, 'file.' + type);
        }

        const export_button = document.getElementById('export_button');

        export_button.addEventListener('click', () => {
            html_table_to_excel('xlsx');
        });


        function printDiv() {
            var divToPrint = document.getElementById('table');
            var htmlToPrint = '' +
                '<style type="text/css">' +
                'table th, table td {' +
                'border:1px solid grey;' +
                'padding:0.5em;' +
                'direction:ltr !important;' +
                '}' +
                '</style>';
            htmlToPrint += divToPrint.outerHTML;
            newWin = window.open("");
            newWin.document.write(htmlToPrint);
            newWin.print();
            newWin.close();
        }
    </script>
@endsection
