@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
    @if ($factorstatus == false)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <a href="{{ route('producer.payfactor') }}">{{ __('messages.factorpayerror') }}</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('messages.productcount') }} : {{ $products->count() }}</h4>
                    <br>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.gptablenum') }}</th>
                                    <th>{{ __('messages.gptablepublish') }}</th>
                                    <th>{{ __('messages.gptabletitle') }}</th>
                                    <th>{{ __('messages.gptablecategory') }}</th>
                                    <th>{{ __('messages.gptableimg') }}</th>
                                    <th>{{ __('messages.gptableedit') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $id = $products->count();
                                @endphp
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $id-- }}</th>
                                        <th>
                                            @if ($product->publish == 2)
                                                <i style="color: green;font-size: 20px" class="mdi mdi-check-bold"></i>
                                            @elseif($product->publish == 1)
                                                <i style="color: red;font-size: 20px" class="bx bx-user-circle"
                                                    title="{{ __('messages.publisherror') }}"></i>
                                            @elseif($product->publish == 0)
                                                <i style="color: red;font-size: 20px" class="bx bx-error"
                                                    title="{{ __('messages.publishpayerror') }}"></i>
                                            @endif
                                        </th>
                                        <th>
                                            @if (App::getLocale() == 'en')
                                                {{ $product->entitle }}
                                            @else
                                                {{ $product->title }}
                                            @endif
                                        </th>
                                        <th>
                                            @if (App::getLocale() == 'en')
                                                {{ $product->encategoryname }}
                                            @else
                                                {{ $product->categoryname }}
                                            @endif
                                        </th>
                                        <th><a href="{{ url('productimages') }}/{{ $product->image }}"
                                                target="_blank">{{ __('messages.showimg') }}</a>
                                        </th>
                                        <th><a
                                                href="{{ route('producer.deleteproduct', ['id' => $product->id]) }}">{{ __('messages.deleteproduct') }}</a>
                                        </th>
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
    {{ __('messages.panelproductlist') }}
@endsection
