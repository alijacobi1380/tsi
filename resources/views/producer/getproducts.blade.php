@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
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
                                    <th>{{ __('messages.gptabletitle') }}</th>
                                    <th>{{ __('messages.gptablecategory') }}</th>
                                    <th>{{ __('messages.gptableimg') }}</th>
                                    <th>{{ __('messages.gptableedit') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <th>{{ $product->title }}</th>
                                        <th>{{ $product->categoryname }}</th>
                                        <th><a href="{{ url('productimages') }}/{{ $product->image }}"
                                                target="_blank">{{ __('messages.showimg') }}</a>
                                        </th>
                                        <th><a href="{{ route('producer.deleteproduct', ['id' => $product->id]) }}">حذف</a></th>
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
