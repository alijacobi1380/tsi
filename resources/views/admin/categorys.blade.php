@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <a href="{{ route('admin.addcategory') }}" type="button"
        class="btn btn-info waves-effect waves-light">{{ __('messages.addcategorypagetitle') }}</a>
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.categorytitle') }}</th>
                                    <th>{{ __('messages.categorysubcat') }}</th>
                                    <th>{{ __('messages.addcategoryicon') }}</th>
                                    <th>{{ __('messages.addcategoryimg') }}</th>
                                    <th>{{ __('messages.gptableedit') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorys as $category)
                                    <tr>
                                        <th>{{ $category->title }}</th>
                                        <th>
                                            @if ($category->subcat == 0)
                                                {{ __('messages.categorymain') }}
                                            @else
                                                @foreach ($categorys as $cat)
                                                    @if ($category->subcat == $cat->id)
                                                        {{ $cat->title }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </th>
                                        <th><i style="font-size: 20px" class="{{ $category->icon }}"></i></th>
                                        <th>
                                            @if ($category->image != '')
                                                <a
                                                    href="{{ url('categorys') }}/{{ $category->image }}">{{ __('messages.showimg') }}</a>
                                            @else
                                                {{ __('messages.categorytableerror') }}
                                            @endif
                                        </th>
                                        <th><a
                                                href="{{ route('admin.deletecategory', ['id' => $category->id]) }}">{{ __('messages.deleteproduct') }}</a>
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
@endsection

@section('pagetitle')
    {{ __('messages.sidebarcategory') }}
@endsection
