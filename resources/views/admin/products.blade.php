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

                    <form action="{{ route('admin.filterproducts') }}" method="GET">
                        <div class="form-group row">
                            <label class=" col-form-label">{{ __('messages.adminordertableusername') }}</label>
                            <div class="col-md-4">
                                <select name="name" class="form-control">
                                    <option value="all">{{ __('messages.panelallusers') }}</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class=" col-form-label">{{ __('messages.gttablestatus') }}</label>
                            <div class="col-md-4">
                                <select name="status" class="form-control">
                                    {{-- <option value="0">{{ __('messages.advtwaitforsee') }}</option> --}}
                                    <option value="2">{{ __('messages.advtaccepted') }}</option>
                                    <option value="1">{{ __('messages.advtignore') }}</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="btn btn-info waves-effect waves-light">{{ __('messages.panelsearch') }}</button>
                        </div>
                    </form>
                    <br><br>


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
                                                    <p style="color: red"><i style="font-size: 20px" class="bx bx-user-x"></i>
                                                        {{ __('messages.advtignore') }}</p>
                                                @break

                                                @case(2)
                                                    <p style="color: green"><i style="font-size: 20px" class="bx bx-user-check"></i>
                                                        {{ __('messages.advtaccepted') }}</p>
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
