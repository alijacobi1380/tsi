@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title">{{ __('messages.adminordertitle') }}</h4> --}}
                    <br>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.adminordertableid') }}</th>
                                    <th>{{ __('messages.adeditproducttableprname') }}</th>
                                    <th>{{ __('messages.adeditproducttableusername') }}</th>
                                    <th>{{ __('messages.adeditproducttablecategory') }}</th>
                                    <th>{{ __('messages.adeditproducttablestatus') }}</th>
                                    <th>{{ __('messages.gptableedit') }}</th>
                                    <th>{{ __('messages.panelproductedit') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>
                                            @if (App::getLocale() == 'en')
                                                {{ $product->entitle }}
                                            @else
                                                {{ $product->title }}
                                            @endif
                                        </td>

                                        <td>
                                            {{ $product->username }}
                                        </td>

                                        <td>
                                            @if (App::getLocale() == 'en')
                                                {{ $product->encategoryname }}
                                            @else
                                                {{ $product->categoryname }}
                                            @endif
                                        </td>

                                        <td>
                                            @switch($product->publish)
                                                @case(1)
                                                    <p style="color: red">{{ __('messages.adeditproducttablestatusno') }}</p>
                                                @break

                                                @case(2)
                                                    <p style="color: green">{{ __('messages.adeditproducttablestatusok') }}</p>
                                                @break

                                                @default
                                            @endswitch
                                        </td>

                                        <td>
                                            <a
                                                href="{{ route('admin.changeproductstatus', ['id' => $product->id, 'status' => 2]) }}">{{ __('messages.advitrintableok') }}</a>
                                            / <a
                                                href="{{ route('admin.changeproductstatus', ['id' => $product->id, 'status' => 1]) }}">{{ __('messages.advitrintableno') }}</a>
                                        </td>

                                        <td>
                                            <a
                                                href="{{ route('admin.editproduct', ['id' => $product->id]) }}">{{ __('messages.editproduct') }}</a>
                                        </td>



                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('pagetitle')
    {{ __('messages.adeditproductlist') }}
@endsection
