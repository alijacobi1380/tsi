@extends('producer.layout.sidebar')

@section('func')
    @php
        echo App\Http\Controllers\ProducerController::checklang();
    @endphp
@endsection

@section('content')
    @if ($factorstatus == false)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <a href="{{ route('producer.services', ['id' => 1]) }}">{{ __('messages.factorpayerror') }}</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('producer.editproductcheck', ['id' => $id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h4 class="card-title">{{ __('messages.aptitleedit') }}</h4>
                        <br>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductname') }}</label>
                            <div class="col-md-10">
                                <input value="{{ $product->title }}" name="productname" class="form-control" type="text"
                                    id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductname') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.ekhtiari') }}" value="{{ $product->entitle }}"
                                    name="enproductname" class="form-control" type="text" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductcategory') }}</label>
                            <div class="col-md-10">
                                <select class="col-12 form-control" name="productcategory" id="">
                                    <p>{{ __('messages.productnowcategory') }} : @if (App::getLocale() == 'en')
                                            {{ $product->encategoryname }}
                                        @else
                                            {{ $product->categoryname }}
                                        @endif
                                    </p>
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->id }}">
                                            @if (App::getLocale() == 'en')
                                                {{ $category->entitle }}
                                            @else
                                                {{ $category->title }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductusername') }}</label>
                            <div class="col-md-10">
                                <input style="cursor: not-allowed" value="{{ $product->username }}" class="form-control"
                                    type="text" disabled id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductdesc') }}</label>
                            <div class="col-md-10">
                                <textarea id="summernote" name="productdesc">
                                    {{ $product->desc }}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductdesc') }}</label>
                            <div class="col-md-10">
                                <textarea id="summernote2" name="enproductdesc">
                                    @if (old('enproductdesc') == '')
{{ __('messages.ekhtiari') }}
@else
{{ $product->endesc }}
@endif
</textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductimg') }}</label>
                            <div class="col-md-10">
                                <input value="{{ old('productimage') }}" type="file" name="productimage" />
                            </div>
                        </div>
                        <br>
                        <h4 class="col-12" style="text-align: center">
                            {{ __('messages.productprops') }}
                        </h4>
                        <br>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductcolor') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.addproductcolorplaceholder') }}" class="form-control"
                                    id="example-text-input" type="text" name="productcolor"
                                    value="{{ $product->productcolor }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductcolor') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.ekhtiari') }}" class="form-control"
                                    id="example-text-input" type="text" name="enproductcolor"
                                    value="{{ $product->enproductcolor }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductvazn') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.addproductvaznplaceholder') }}" class="form-control"
                                    id="example-text-input" type="text" name="productvazn"
                                    value="{{ $product->productvazn }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductvazn') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.ekhtiari') }}" class="form-control"
                                    id="example-text-input" type="text" name="enproductvazn"
                                    value="{{ $product->enproductvazn }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductjens') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.addproductjensplaceholder') }}" class="form-control"
                                    id="example-text-input" type="text" name="productjens"
                                    value="{{ $product->productjens }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductjens') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.ekhtiari') }}" class="form-control"
                                    id="example-text-input" type="text" name="enproductjens"
                                    value="{{ $product->enproductjens }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductpack') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.addproductpackplaceholder') }}" class="form-control"
                                    id="example-text-input" type="text" name="productpack"
                                    value="{{ $product->productpack }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductpack') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.ekhtiari') }}" class="form-control"
                                    id="example-text-input" type="text" name="enproductpack"
                                    value="{{ $product->enproductpack }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductcustom') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.addproductcustomplaceholder') }}"
                                    class="form-control" id="example-text-input" type="text" name="productcustom"
                                    value="{{ $product->productcustom }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductcustom') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.ekhtiari') }}" class="form-control"
                                    id="example-text-input" type="text" name="enproductcustom"
                                    value="{{ $product->enproductcustom }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.approductdeliver') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.addproductdeliverplaceholder') }}"
                                    class="form-control" id="example-text-input" type="text" name="productdeliver"
                                    value="{{ $product->productdeliver }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.enapproductdeliver') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.ekhtiari') }}" class="form-control"
                                    id="example-text-input" type="text" name="enproductdeliver"
                                    value="{{ $product->enproductdeliver }}">
                            </div>
                        </div>



                        <button type="submit"
                            class="btn btn-outline-info waves-effect waves-light col-12">{{ __('messages.apbtntitleedit') }}</button>

                </div>
                </form>
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
        </div>
        <!-- end col -->
    </div>
@endsection

@section('pagetitle')
    {{ __('messages.panelproductedit') }}
@endsection

@section('sc')
    <script src="{{ url('assets/libs/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote2').summernote();
        });
    </script>
@endsection

@section('cs')
    <link href="{{ url('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
