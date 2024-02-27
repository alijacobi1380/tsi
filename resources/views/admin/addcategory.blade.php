@extends('admin.layout.sidebar')


@section('func')
    @php
        echo App\Http\Controllers\AdminController::checklang();
    @endphp
@endsection

@section('content')
    <div class="row">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger col-12" role="alert">{{ $error }}</div>
            @endforeach
        @elseif(session()->has('message'))
            <div class="alert alert-success col-12" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <!-- end col -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ route('admin.addcategorycheck') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.categorytitle') }}</label>
                            <div class="col-md-10">
                                <input class="form-control" name="title" type="text" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.categorysubcat') }}</label>
                            <div class="col-md-10">
                                <select class="form-control" name="subcat" id="">
                                    <option value="0">{{ __('messages.categorymain') }}</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.addcategoryicon') }}</label>
                            <div class="col-md-10">
                                <input placeholder="{{ __('messages.addcategoryiconplaceholder') }}" class="form-control"
                                    name="icon" type="text" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.addcategoryimg') }}</label>
                            <div class="col-md-10">
                                <input type="file" name="file" />
                            </div>
                        </div>




                        {{-- <div class="form-group row">
                            <label for="example-text-input"
                                class="col-md-2 col-form-label">{{ __('messages.adnotiftabletitle') }} (
                                {{ __('messages.english') }} )</label>
                            <div class="col-md-10">
                                <input class="form-control" name="titleen" type="text" id="example-text-input">
                            </div>
                        </div> --}}

                        <button type="submit"
                            class="btn col-12 btn-info waves-effect waves-light">{{ __('messages.addcategorybtnform') }}</button>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div id="accordion">
                        <div class="card mb-1 shadow-none">
                            <div class="card-header" id="headingOne">
                                <h6 class="m-0">
                                    <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        {{ __('messages.iconslist') }}
                                    </a>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                style="">
                                <div class="card-body line-height-p">
                                    <div class="row icon-demo-content">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sticker"></i> bx bx-sticker
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shield-quarter"></i> bx bx-shield-quarter
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-upside-down"></i> bx bx-upside-down
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-laugh"></i> bx bx-laugh
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-meh-blank"></i> bx bx-meh-blank
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-happy-beaming"></i> bx bx-happy-beaming
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shocked"></i> bx bx-shocked
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sleepy"></i> bx bx-sleepy
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-confused"></i> bx bx-confused
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wink-smile"></i> bx bx-wink-smile
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dizzy"></i> bx bx-dizzy
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-happy-heart-eyes"></i> bx bx-happy-heart-eyes
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-angry"></i> bx bx-angry
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-smile"></i> bx bx-smile
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-tired"></i> bx bx-tired
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cool"></i> bx bx-cool
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-happy-alt"></i> bx bx-happy-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wink-tongue"></i> bx bx-wink-tongue
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-meh-alt"></i> bx bx-meh-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-food-menu"></i> bx bx-food-menu
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-food-tag"></i> bx bx-food-tag
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-female-sign"></i> bx bx-female-sign
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-male-sign"></i> bx bx-male-sign
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-female"></i> bx bx-female
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-male"></i> bx bx-male
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-clinic"></i> bx bx-clinic
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-health"></i> bx bx-health
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shekel"></i> bx bx-shekel
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-yen"></i> bx bx-yen
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-won"></i> bx bx-won
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pound"></i> bx bx-pound
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-euro"></i> bx bx-euro
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rupee"></i> bx bx-rupee
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-ruble"></i> bx bx-ruble
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-lira"></i> bx bx-lira
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bitcoin"></i> bx bx-bitcoin
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-tone"></i> bx bx-tone
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bolt-circle"></i> bx bx-bolt-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cake"></i> bx bx-cake
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-spa"></i> bx bx-spa
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dish"></i> bx bx-dish
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-fridge"></i> bx bx-fridge
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-image-add"></i> bx bx-image-add
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-image-alt"></i> bx bx-image-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-space-bar"></i> bx bx-space-bar
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx- alarm-add"></i> bx bx-alarm-add
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-archive-out"></i> bx bx-archive-out
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-archive-in"></i> bx bx-archive-in
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-add-to-queue"></i> bx bx-add-to-queue
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-border-radius"></i> bx bx-border-radius
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-check-shield"></i> bx bx-check-shield
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-label"></i> bx bx-label
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-file-find"></i> bx bx-file-find
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-face"></i> bx bx-face
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-extension"></i> bx bx-extension
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-exit"></i> bx bx-exit
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-conversation"></i> bx bx-conversation
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sort-z-a"></i> bx bx-sort-z-a
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sort-a-z"></i> bx bx-sort-a-z
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-printer"></i> bx bx-printer
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-radio"></i> bx bx-radio
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-customize"></i> bx bx-customize
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-brush-alt"></i> bx bx-brush-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-briefcase-alt-2"></i> bx bx-briefcase-alt-2
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-time-five"></i> bx bx-time-five
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pie-chart-alt-2"></i> bx bx-pie-chart-alt-2
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-gas-pump"></i> bx bx-gas-pump
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-mobile-vibration"></i> bx bx-mobile-vibration
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-mobile-landscape"></i> bx bx-mobile-landscape
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-border-all"></i> bx bx-border-all
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-border-bottom"></i> bx bx-border-bottom
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-border-top"></i> bx bx-border-top
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-border-left"></i> bx bx-border-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-border-right"></i> bx bx-border-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dialpad-alt"></i> bx bx-dialpad-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-filter-alt"></i> bx bx-filter-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-brightness"></i> bx bx-brightness
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-brightness-half"></i> bx bx-brightness-half
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wifi-off"></i> bx bx-wifi-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-credit-card-alt"></i> bx bx-credit-card-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-band-aid"></i> bx bx-band-aid
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-hive"></i> bx bx-hive
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-map-pin"></i> bx bx-map-pin
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-line-chart"></i> bx bx-line-chart
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-receipt"></i> bx bx-receipt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-purchase-tag-alt"></i> bx bx-purchase-tag-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-basket"></i> bx bx-basket
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-palette"></i> bx bx-palette
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-no-entry"></i> bx bx-no-entry
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message-alt-dots"></i> bx bx-message-alt-dots
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message-alt"></i> bx bx-message-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-check-square"></i> bx bx-check-square
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-log-out-circle"></i> bx bx-log-out-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-log-in-circle"></i> bx bx-log-in-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-doughnut-chart"></i> bx bx-doughnut-chart
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-building-house"></i> bx bx-building-house
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-accessibility"></i> bx bx-accessibility
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user-voice"></i> bx bx-user-voice
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cuboid"></i> bx bx-cuboid
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cube-alt"></i> bx bx-cube-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-polygon"></i> bx bx-polygon
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-square-rounded"></i> bx bx-square-rounded
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-square"></i> bx bx-square
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-error-alt"></i> bx bx-error-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shield-alt-2"></i> bx bx-shield-alt-2
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-paint-roll"></i> bx bx-paint-roll
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-droplet"></i> bx bx-droplet
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-street-view"></i> bx bx-street-view
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-plus-medical"></i> bx bx-plus-medical
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-search-alt-2"></i> bx bx-search-alt-2
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bowling-ball"></i> bx bx-bowling-ball
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dna"></i> bx bx-dna
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cycling"></i> bx bx-cycling
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shape-circle"></i> bx bx-shape-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-down-arrow-alt"></i> bx bx-down-arrow-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-up-arrow-alt"></i> bx bx-up-arrow-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-right-arrow-alt"></i> bx bx-right-arrow-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-left-arrow-alt"></i> bx bx-left-arrow-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-lock-open-alt"></i> bx bx-lock-open-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-lock-alt"></i> bx bx-lock-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cylinder"></i> bx bx-cylinder
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pyramid"></i> bx bx-pyramid
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-comment-dots"></i> bx bx-comment-dots
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-comment"></i> bx bx-comment
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-landscape"></i> bx bx-landscape
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-book-open"></i> bx bx-book-open
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-transfer-alt"></i> bx bx-transfer-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-copy-alt"></i> bx bx-copy-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-run"></i> bx bx-run
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user-pin"></i> bx bx-user-pin
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-grid"></i> bx bx-grid
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-code-alt"></i> bx bx-code-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-mail-send"></i> bx bx-mail-send
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-ghost"></i> bx bx-ghost
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shape-triangle"></i> bx bx-shape-triangle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shape-square"></i> bx bx-shape-square
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-video-recording"></i> bx bx-video-recording
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-notepad"></i> bx bx-notepad
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bug-alt"></i> bx bx-bug-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-mouse-alt"></i> bx bx-mouse-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-edit-alt"></i> bx bx-edit-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chat"></i> bx bx-chat
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-book-content"></i> bx bx-book-content
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message-square-dots"></i> bx bx-message-square-dots
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message-square"></i> bx bx-message-square
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-slideshow"></i> bx bx-slideshow
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wallet-alt"></i> bx bx-wallet-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-memory-card"></i> bx bx-memory-card
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message-rounded-dots"></i> bx bx-message-rounded-dots
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message-dots"></i> bx bx-message-dots
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bar-chart-alt-2"></i> bx bx-bar-chart-alt-2
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-store-alt"></i> bx bx-store-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-buildings"></i> bx bx-buildings
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-home-circle"></i> bx bx-home-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-money"></i> bx bx-money
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-walk"></i> bx bx-walk
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-repeat"></i> bx bx-repeat
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-font-family"></i> bx bx-font-family
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-joystick-button"></i> bx bx-joystick-button
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-paint"></i> bx bx-paint
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-unlink"></i> bx bx-unlink
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-brush"></i> bx bx-brush
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rotate-left"></i> bx bx-rotate-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-badge-check"></i> bx bx-badge-check
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-show-alt"></i> bx bx-show-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-caret-down"></i> bx bx-caret-down
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-caret-right"></i> bx bx-caret-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-caret-up"></i> bx bx-caret-up
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-caret-left"></i> bx bx-caret-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calendar-event"></i> bx bx-calendar-event
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-magnet"></i> bx bx-magnet
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rewind-circle"></i> bx bx-rewind-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-card"></i> bx bx-card
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-help-circle"></i> bx bx-help-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-test-tube"></i> bx bx-test-tube
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-note"></i> bx bx-note
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sort-down"></i> bx bx-sort-down
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sort-up"></i> bx bx-sort-up
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-id-card"></i> bx bx-id-card
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-badge"></i> bx bx-badge
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-grid-small"></i> bx bx-grid-small
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-grid-vertical"></i> bx bx-grid-vertical
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-grid-horizontal"></i> bx bx-grid-horizontal
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-move-vertical"></i> bx bx-move-vertical
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-move-horizontal"></i> bx bx-move-horizontal
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-stats"></i> bx bx-stats
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-equalizer"></i> bx bx-equalizer
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-disc"></i> bx bx-disc
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-analyse"></i> bx bx-analyse
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-search-alt"></i> bx bx-search-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dollar-circle"></i> bx bx-dollar-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-football"></i> bx bx-football
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-ball"></i> bx bx-ball
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-circle"></i> bx bx-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-transfer"></i> bx bx-transfer
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-fingerprint"></i> bx bx-fingerprint
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-font-color"></i> bx bx-font-color
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-highlight"></i> bx bx-highlight
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-file-blank"></i> bx bx-file-blank
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-strikethrough"></i> bx bx-strikethrough
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-photo-album"></i> bx bx-photo-album
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-code-block"></i> bx bx-code-block
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-font-size"></i> bx bx-font-size
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-handicap"></i> bx bx-handicap
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dialpad"></i> bx bx-dialpad
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wind"></i> bx bx-wind
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-water"></i> bx bx-water
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-swim"></i> bx bx-swim
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-restaurant"></i> bx bx-restaurant
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-box"></i> bx bx-box
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-menu-alt-right"></i> bx bx-menu-alt-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-menu-alt-left"></i> bx bx-menu-alt-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-video-plus"></i> bx bx-video-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-list-ol"></i> bx bx-list-ol
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-planet"></i> bx bx-planet
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-hotel"></i> bx bx-hotel
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-movie"></i> bx bx-movie
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-taxi"></i> bx bx-taxi
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-train"></i> bx bx-train
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bath"></i> bx bx-bath
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bed"></i> bx bx-bed
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-area"></i> bx bx-area
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bot"></i> bx bx-bot
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dumbbell"></i> bx bx-dumbbell
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-check-double"></i> bx bx-check-double
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bus"></i> bx bx-bus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-check-circle"></i> bx bx-check-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rocket"></i> bx bx-rocket
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-certification"></i> bx bx-certification
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-slider-alt"></i> bx bx-slider-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sad"></i> bx bx-sad
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-meh"></i> bx bx-meh
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-happy"></i> bx bx-happy
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cart-alt"></i> bx bx-cart-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-car"></i> bx bx-car
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-loader-alt"></i> bx bx-loader-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-loader-circle"></i> bx bx-loader-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wrench"></i> bx bx-wrench
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-alarm-off"></i> bx bx-alarm-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-layout"></i> bx bx-layout
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dock-left"></i> bx bx-dock-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dock-top"></i> bx bx-dock-top
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dock-right"></i> bx bx-dock-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dock-bottom"></i> bx bx-dock-bottom
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dock-bottom"></i> bx bx-dock-bottom
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-world"></i> bx bx-world
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-selection"></i> bx bx-selection
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-paper-plane"></i> bx bx-paper-plane
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-slider"></i> bx bx-slider
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-loader"></i> bx bx-loader
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chalkboard"></i> bx bx-chalkboard
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-trash-alt"></i> bx bx-trash-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-grid-alt"></i> bx bx-grid-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-command"></i> bx bx-command
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-window-close"></i> bx bx-window-close
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-notification-off"></i> bx bx-notification-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-plug"></i> bx bx-plug
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-infinite"></i> bx bx-infinite
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-carousel"></i> bx bx-carousel
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-hourglass"></i> bx bx-hourglass
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-briefcase-alt"></i> bx bx-briefcase-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wallet"></i> bx bx-wallet
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-station"></i> bx bx-station
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-collection"></i> bx bx-collection
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-tv"></i> bx bx-tv
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-closet"></i> bx bx-closet
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-paperclip"></i> bx bx-paperclip
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-expand"></i> bx bx-expand
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pen"></i> bx bx-pen
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-purchase-tag"></i> bx bx-purchase-tag
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-images"></i> bx bx-images
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pie-chart-alt"></i> bx bx-pie-chart-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-news"></i> bx bx-news
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-downvote"></i> bx bx-downvote
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-upvote"></i> bx bx-upvote
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-globe-alt"></i> bx bx-globe-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-store"></i> bx bx-store
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-hdd"></i> bx bx-hdd
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-skip-previous-circle"></i> bx bx-skip-previous-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-skip-next-circle"></i> bx bx-skip-next-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chip"></i> bx bx-chip
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cast"></i> bx bx-cast
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-body"></i> bx bx-body
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-phone-outgoing"></i> bx bx-phone-outgoing
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-phone-incoming"></i> bx bx-phone-incoming
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-collapse"></i> bx bx-collapse
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rename"></i> bx bx-rename
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rotate-right"></i> bx bx-rotate-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-horizontal-center"></i> bx bx-horizontal-center
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-ruler"></i> bx bx-ruler
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-import"></i> bx bx-import
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calendar-alt"></i> bx bx-calendar-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-battery"></i> bx bx-battery
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-server"></i> bx bx-server
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-task"></i> bx bx-task
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-folder-open"></i> bx bx-folder-open
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-film"></i> bx bx-film
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-aperture"></i> bx bx-aperture
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-phone-call"></i> bx bx-phone-call
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-up-arrow"></i> bx bx-up-arrow
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-undo"></i> bx bx-undo
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-timer"></i> bx bx-timer
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-support"></i> bx bx-support
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-subdirectory-right"></i> bx bx-subdirectory-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-right-arrow"></i> bx bx-
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-"></i> bx bx-right-arrow
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-revision"></i> bx bx-revision
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-repost"></i> bx bx-repost
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-reply"></i> bx bx-reply
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-reply-all"></i> bx bx-reply-all
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-redo"></i> bx bx-redo
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-radar"></i> bx bx-radar
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-poll"></i> bx bx-poll
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-list-check"></i> bx bx-list-check
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-like"></i> bx bx-like
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-left-arrow"></i> bx bx-left-arrow
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-joystick-alt"></i> bx bx-joystick-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-history"></i> bx bx-history
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-flag"></i> bx bx-flag
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-first-aid"></i> bx bx-first-aid
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-export"></i> bx bx-export
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-down-arrow"></i> bx bx-down-arrow
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dislike"></i> bx bx-dislike
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-crown"></i> bx bx-crown
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-barcode"></i> bx bx-barcode
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user"></i> bx bx-user
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user-x"></i> bx bx-user-x
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user-plus"></i> bx bx-user-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user-minus"></i> bx bx-user-minus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user-circle"></i> bx bx-user-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-user-check"></i> bx bx-user-check
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-underline"></i> bx bx-underline
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-trophy"></i> bx bx-trophy
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-trash"></i> bx bx-trash
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-text"></i> bx bx-text
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sun"></i> bx bx-sun
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-star"></i> bx bx-star
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sort"></i> bx bx-sort
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shuffle"></i> bx bx-shuffle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shopping-bag"></i> bx bx-shopping-bag
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shield"></i> bx bx-shield
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-shield-alt"></i> bx bx-shield-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-share"></i> bx bx-share
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-share-alt"></i> bx bx-share-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-select-multiple"></i> bx bx-select-multiple
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-screenshot"></i> bx bx-screenshot
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-save"></i> bx bx-save
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pulse"></i> bx bx-pulse
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-power-off"></i> bx bx-power-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-plus"></i> bx bx-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pin"></i> bx bx-pin
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pencil"></i> bx bx-pencil
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pin"></i> bx bx-pin
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pencil"></i> bx bx-pencil
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-paste"></i> bx bx-paste
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-paragraph"></i> bx bx-paragraph
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-package"></i> bx bx-package
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-notification"></i> bx bx-notification
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-music"></i> bx bx-music
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-move"></i> bx bx-move
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-mouse"></i> bx bx-mouse
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-minus"></i> bx bx-minus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-microphone-off"></i> bx bx-microphone-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-log-out"></i> bx bx-log-out
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-log-in"></i> bx bx-log-in
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-link-external"></i> bx bx-link-external
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-joystick"></i> bx bx-joystick
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-italic"></i> bx bx-italic
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-home-alt"></i> bx bx-home-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-heading"></i> bx bx-heading
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-hash"></i> bx bx-hash
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-group"></i> bx bx-group
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-git-repo-forked"></i> bx bx-git-repo-forked
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-git-pull-request"></i> bx bx-git-pull-request
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-git-merge"></i> bx bx-git-merge
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-git-compare"></i> bx bx-git-compare
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-git-commit"></i> bx bx-git-commit
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-git-branch"></i> bx bx-git-branch
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-font"></i> bx bx-font
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-filter"></i> bx bx-filter
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-file"></i> bx bx-file
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-edit"></i> bx bx-edit
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-diamond"></i> bx bx-diamond
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-detail"></i> bx bx-detail
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cut"></i> bx bx-cut
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cube"></i> bx bx-cube
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-crop"></i> bx bx-crop
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-credit-card"></i> bx bx-credit-card
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-columns"></i> bx bx-columns
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cog"></i> bx bx-cog
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud-snow"></i> bx bx-cloud-snow
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud-rain"></i> bx bx-cloud-rain
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud-lightning"></i> bx bx-cloud-lightning
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud-light-rain"></i> bx bx-cloud-light-rain
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud-drizzle"></i> bx bx-cloud-drizzle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-check"></i> bx bx-check
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cart"></i> bx bx-cart
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calculator"></i> bx bx-calculator
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bold"></i> bx bx-bold
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-award"></i> bx bx-award
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-anchor"></i> bx bx-anchor
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-album"></i> bx bx-album
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-adjust"></i> bx bx-adjust
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-x"></i> bx bx-x
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-table"></i> bx bx-table
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-duplicate"></i> bx bx-duplicate
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-windows"></i> bx bx-windows
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-window"></i> bx bx-window
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-window-open"></i> bx bx-window-open
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-wifi"></i> bx bx-wifi
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-voicemail"></i> bx bx-voicemail
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-video-off"></i> bx bx-video-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-usb"></i> bx bx-usb
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-upload"></i> bx bx-upload
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-alarm"></i> bx bx-alarm
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-tennis-ball"></i> bx bx-tennis-ball
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-target-lock"></i> bx bx-target-lock
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-tag"></i> bx bx-tag
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-tab"></i> bx bx-tab
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-spreadsheet"></i> bx bx-spreadsheet
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sitemap"></i> bx bx-sitemap
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sidebar"></i> bx bx-sidebar
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-send"></i> bx bx-send
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pie-chart"></i> bx bx-pie-chart
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-phone"></i> bx bx-phone
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-navigation"></i> bx bx-navigation
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-mobile"></i> bx bx-mobile
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-mobile-alt"></i> bx bx-mobile-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message"></i> bx bx-message
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-message-rounded"></i> bx bx-message-rounded
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-map"></i> bx bx-map
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-map-alt"></i> bx bx-map-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-lock"></i> bx bx-lock
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-lock-open"></i> bx bx-lock-open
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-list-minus"></i> bx bx-list-minus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-list-ul"></i> bx bx-list-ul
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-list-plus"></i> bx bx-list-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-link"></i> bx bx-link
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-link-alt"></i> bx bx-link-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-layer"></i> bx bx-layer
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-laptop"></i> bx bx-laptop
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-home"></i> bx bx-home
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-heart"></i> bx bx-heart
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-headphone"></i> bx bx-headphone
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-devices"></i> bx bx-devices
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-globe"></i> bx bx-globe
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-gift"></i> bx bx-gift
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-envelope"></i> bx bx-envelope
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-download"></i> bx bx-download
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dots-vertical"></i> bx bx-dots-vertical
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dots-vertical-rounded"></i> bx bx-dots-vertical-rounded
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dots-horizontal"></i> bx bx-dots-horizontal
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dots-horizontal-rounded"></i> bx bx-dots-horizontal-rounded
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-dollar"></i> bx bx-dollar
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-directions"></i> bx bx-directions
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-desktop"></i> bx bx-desktop
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-data"></i> bx bx-data
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-compass"></i> bx bx-compass
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-crosshair"></i> bx bx-crosshair
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-terminal"></i> bx bx-terminal
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud"></i> bx bx-cloud
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud-upload"></i> bx bx-cloud-upload
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-cloud-download"></i> bx bx-cloud-download
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chart"></i> bx bx-chart
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calendar"></i> bx bx-calendar
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calendar-x"></i> bx bx-calendar-x
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calendar-minus"></i> bx bx-calendar-minus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calendar-check"></i> bx bx-calendar-check
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-calendar-plus"></i> bx bx-calendar-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-buoy"></i> bx bx-buoy
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bulb"></i> bx bx-bulb
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bluetooth"></i> bx bx-bluetooth
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bug"></i> bx bx-bug
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-building"></i> bx bx-building
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-broadcast"></i> bx bx-broadcast
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-briefcase"></i> bx bx-briefcase
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bookmark-plus"></i> bx bx-bookmark-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bookmark-minus"></i> bx bx-bookmark-minus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-"></i> bx bx-
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-book"></i> bx bx-book
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-book-bookmark"></i> bx bx-book-bookmark
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-block"></i> bx bx-block
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-basketball"></i> bx bx-basketball
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bar-chart"></i> bx bx-bar-chart
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bar-chart-square"></i> bx bx-bar-chart-square
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bar-chart-alt"></i> bx bx-bar-chart-alt
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-at"></i> bx bx-at
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-archive"></i> bx bx-archive
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-zoom-out"></i> bx bx-zoom-out
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-zoom-in"></i> bx bx-zoom-in
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-x-circle"></i> bx bx-x-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-volume"></i> bx bx-volume
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-volume-mute"></i> bx bx-volume-mute
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-volume-low"></i> bx bx-volume-low
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-volume-full"></i> bx bx-volume-full
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-video"></i> bx bx-video
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-vertical-center"></i> bx bx-vertical-center
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-up-arrow-circle"></i> bx bx-up-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-trending-up"></i> bx bx-trending-up
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-trending-down"></i> bx bx-trending-down
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-toggle-right"></i> bx bx-toggle-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-toggle-left"></i> bx bx-toggle-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-time"></i> bx bx-time
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-sync"></i> bx bx-sync
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-stopwatch"></i> bx bx-stopwatch
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-stop"></i> bx bx-stop
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-stop-circle"></i> bx bx-stop-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-skip-previous"></i> bx bx-skip-previous
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-skip-next"></i> bx bx-skip-next
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-show"></i> bx bx-show
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-search"></i> bx bx-search
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rss"></i> bx bx-rss
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-right-top-arrow-circle"></i> bx bx-right-top-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-right-indent"></i> bx bx-right-indent
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-right-down-arrow-circle"></i> bx bx-right-down-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-right-arrow-circle"></i> bx bx-right-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-reset"></i> bx bx-reset
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rewind"></i> bx bx-rewind
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-rectangle"></i> bx bx-rectangle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-radio-circle"></i> bx bx-radio-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-radio-circle-marked"></i> bx bx-radio-circle-marked
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-question-mark"></i> bx bx-question-mark
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-plus-circle"></i> bx bx-plus-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-play"></i> bx bx-play
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-play-circle"></i> bx bx-play-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pause"></i> bx bx-pause
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-pause-circle"></i> bx bx-pause-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-moon"></i> bx bx-moon
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-minus-circle"></i> bx bx-minus-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-microphone"></i> bx bx-microphone
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-menu"></i> bx bx-menu
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-left-top-arrow-circle"></i> bx bx-left-top-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-left-indent"></i> bx bx-left-indent
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-left-down-arrow-circle"></i> bx bx-left-down-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-left-arrow-circle"></i> bx bx-left-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-last-page"></i> bx bx-last-page
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-key"></i> bx bx-key
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-align-justify"></i> bx bx-align-justify
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-info-circle"></i> bx bx-info-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-image"></i> bx bx-image
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-hide"></i> bx bx-hide
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-fullscreen"></i> bx bx-fullscreen
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-folder"></i> bx bx-folder
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-folder-plus"></i> bx bx-folder-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-folder-minus"></i> bx bx-folder-minus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-first-page"></i> bx bx-first-page
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-fast-forward"></i> bx bx-fast-forward
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-fast-forward-circle"></i> bx bx-fast-forward-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-exit-fullscreen"></i> bx bx-exit-fullscreen
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-error"></i> bx bx-error
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-error-circle"></i> bx bx-error-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-down-arrow-circle"></i> bx bx-down-arrow-circle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-copyright"></i> bx bx-copyright
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-copy"></i> bx bx-copy
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-coffee"></i> bx bx-coffee
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-code"></i> bx bx-code
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-code-curly"></i> bx bx-code-curly
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-clipboard"></i> bx bx-clipboard
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevrons-left"></i> bx bx-chevrons-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevrons-right"></i> bx bx-chevrons-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevrons-up"></i> bx bx-chevrons-up
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevrons-down"></i> bx bx-chevrons-down
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevron-right"></i> bx bx-chevron-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevron-left"></i> bx bx-chevron-left
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevron-up"></i> bx bx-chevron-up
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-chevron-down"></i> bx bx-chevron-down
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-checkbox-square"></i> bx bx-checkbox-square
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-checkbox"></i> bx bx-checkbox
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-checkbox-checked"></i> bx bx-checkbox-checked
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-captions"></i> bx bx-captions
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-camera"></i> bx bx-camera
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-camera-off"></i> bx bx-camera-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bullseye"></i> bx bx-bullseye
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bookmarks"></i> bx bx-bookmarks
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bookmark"></i> bx bx-bookmark
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bell"></i> bx bx-bell
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bell-plus"></i> bx bx-bell-plus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bell-off"></i> bx bx-bell-off
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-bell-minus"></i> bx bx-bell-minus
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-arrow-back"></i> bx bx-arrow-back
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-align-right"></i> bx bx-align-right
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-align-middle"></i> bx bx-align-middle
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <i class="bx bx-align-left"></i> bx bx-align-left
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection

@section('pagetitle')
    {{ __('messages.addcategorypagetitle') }}
@endsection
