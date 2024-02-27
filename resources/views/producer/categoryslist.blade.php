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
                    <h4 class="card-title">{{ __('messages.cltitle') }} : {{ $categorys->count() }}</h4>
                    <br>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.cltablenum') }}</th>
                                    <th>{{ __('messages.cltabletitle') }}</th>
                                    <th>{{ __('messages.cltableedit') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorys as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->title }}</td>
                                        <td><a
                                                href="{{ route('producer.deletecategory', ['id' => $category->id]) }}">{{ __('messages.cltabledelete') }}</a>
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
    {{ __('messages.panelproductlist') }}
@endsection
