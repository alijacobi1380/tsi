<div>
    @if ($check == 0)
        @switch($serviceid ?? '')
            @case(1)
                <h4 class="card-title">{{ __('messages.question') }}</h4>
                <br>
                {{-- <p class="card-title-desc">توسعه دادن باز و بسته شونده پیش فرض برای ایجاد یک آکاردئون.</p> --}}

                <div id="accordion">
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>
                                    {{ __('messages.serviceone1t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.serviceone1d') }}
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>
                                    {{ __('messages.servicone2t') }}

                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                @php
                                    echo htmlspecialchars_decode(__('messages.servicone2d'));
                                @endphp

                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseThere" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicone3t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThere" class="collapse" aria-labelledby="headingThere" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                {{ __('messages.servicone3d') }}

                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFour" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>
                                    {{ __('messages.servicone4t') }}

                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                @php
                                    echo htmlspecialchars_decode(__('messages.servicone4d'));
                                @endphp

                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSix" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicone5t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                {{ __('messages.servicone5d') }}

                            </div>
                        </div>
                    </div>

                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSeven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicone6t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                {{ __('messages.servicone6d') }}

                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEight" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicone7t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                {{ __('messages.servicone7d') }}

                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseNine" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>
                                    {{ __('messages.servicone8t') }}

                                </a>
                            </h6>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servicone8d') }}


                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTeen" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>
                                    {{ __('messages.servicone9t') }}

                                </a>
                            </h6>
                        </div>

                        <div id="collapseTeen" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servicone9d') }}


                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEleven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>
                                    {{ __('messages.servicone10t') }}

                                </a>
                            </h6>
                        </div>

                        <div id="collapseEleven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servicone10d') }}


                            </div>
                        </div>
                    </div>

                </div>
            @break

            @case(2)
                <h4 class="card-title">
                    {{ __('messages.question') }}
                </h4>
                {{-- <p class="card-title-desc">توسعه دادن باز و بسته شونده پیش فرض برای ایجاد یک آکاردئون.</p> --}}

                <div id="accordion">
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo1t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servictwo1d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo2t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                @php
                                    echo htmlspecialchars_decode(__('messages.servictwo2d'));
                                @endphp

                            </div>
                        </div>
                    </div>



                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo3t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo3d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFour" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo4t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo4d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFive" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo5t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">



                                @php
                                    echo htmlspecialchars_decode(__('messages.servictwo5d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSix" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo6t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo6d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSeven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo7t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo7d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEight" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo8t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo8d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseNine" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo9t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo9d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTeen" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo10t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTeen" class="collapse" aria-labelledby="headingTeen" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo10d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEleven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servictwo11t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servictwo11d') }}

                            </div>
                        </div>
                    </div>


                </div>
            @break

            @case(3)
                <h4 class="card-title">
                    {{ __('messages.question') }}
                </h4>
                {{-- <p class="card-title-desc">توسعه دادن باز و بسته شونده پیش فرض برای ایجاد یک آکاردئون.</p> --}}

                <div id="accordion">
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree1t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servicthree1d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree2t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                @php
                                    echo htmlspecialchars_decode(__('messages.servicthree2d'));
                                @endphp

                            </div>
                        </div>
                    </div>



                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree3t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicthree3d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFour" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree4t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                @php
                                    echo htmlspecialchars_decode(__('messages.servicthree4d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFive" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree5t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">



                                @php
                                    echo htmlspecialchars_decode(__('messages.servicthree5d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSix" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree6t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicthree6d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSeven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree7t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicthree7d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEight" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree8t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicthree8d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseNine" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree9t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicthree9d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTeen" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicthree10t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTeen" class="collapse" aria-labelledby="headingTeen" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicthree10d') }}

                            </div>
                        </div>
                    </div>



                </div>
            @break

            @case(4)
                <h4 class="card-title">
                    {{ __('messages.question') }}
                </h4>
                {{-- <p class="card-title-desc">توسعه دادن باز و بسته شونده پیش فرض برای ایجاد یک آکاردئون.</p> --}}

                <div id="accordion">
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour1t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servicfour1d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour2t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                @php
                                    echo htmlspecialchars_decode(__('messages.servicfour2d'));
                                @endphp

                            </div>
                        </div>
                    </div>



                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour3t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfour3d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFour" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour4t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                @php
                                    echo htmlspecialchars_decode(__('messages.servicfour4d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFive" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour5t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">



                                @php
                                    echo htmlspecialchars_decode(__('messages.servicfour5d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSix" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour6t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfour6d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSeven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour7t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfour7d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEight" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour8t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfour8d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseNine" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour9t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfour9d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTeen" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour10t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTeen" class="collapse" aria-labelledby="headingTeen" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfour10d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEleven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfour11t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfour11d') }}

                            </div>
                        </div>
                    </div>



                </div>
            @break

            @case(5)
                <h4 class="card-title">
                    {{ __('messages.question') }}
                </h4>
                {{-- <p class="card-title-desc">توسعه دادن باز و بسته شونده پیش فرض برای ایجاد یک آکاردئون.</p> --}}

                <div id="accordion">
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive1t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servicfive1d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive2t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                @php
                                    echo htmlspecialchars_decode(__('messages.servicfive2d'));
                                @endphp

                            </div>
                        </div>
                    </div>



                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive3t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfive3d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFour" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive4t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                @php
                                    echo htmlspecialchars_decode(__('messages.servicfive4d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFive" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive5t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">



                                @php
                                    echo htmlspecialchars_decode(__('messages.servicfive5d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSix" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive6t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfive6d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSeven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive7t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfive7d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEight" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive8t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfive8d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseNine" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive9t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfive9d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTeen" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive10t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTeen" class="collapse" aria-labelledby="headingTeen" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfive10d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEleven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicfive11t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicfive11d') }}

                            </div>
                        </div>
                    </div>



                </div>
            @break

            @case(6)
                <h4 class="card-title">
                    {{ __('messages.question') }}
                </h4>
                {{-- <p class="card-title-desc">توسعه دادن باز و بسته شونده پیش فرض برای ایجاد یک آکاردئون.</p> --}}

                <div id="accordion">
                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseOne" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix1t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">
                                {{ __('messages.servicsix1d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix2t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">

                                @php
                                    echo htmlspecialchars_decode(__('messages.servicsix2d'));
                                @endphp

                            </div>
                        </div>
                    </div>



                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseThree" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix3t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicsix3d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFour" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix4t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                @php
                                    echo htmlspecialchars_decode(__('messages.servicsix4d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseFive" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix5t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">



                                @php
                                    echo htmlspecialchars_decode(__('messages.servicsix5d'));
                                @endphp

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSix" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix6t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicsix6d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseSeven" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix7t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicsix7d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseEight" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix8t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicsix8d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseNine" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix9t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicsix9d') }}

                            </div>
                        </div>
                    </div>


                    <div class="card mb-1 shadow-none">
                        <div class="card-header" id="headingOne">
                            <h6 class="m-0">
                                <a href="#collapseTeen" class="text-dark collapsed" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseOne"><i class="bx bx-plus-circle"></i>

                                    {{ __('messages.servicsix10t') }}
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTeen" class="collapse" aria-labelledby="headingTeen" data-parent="#accordion"
                            style="">
                            <div class="card-body line-height-p">


                                {{ __('messages.servicsix10d') }}

                            </div>
                        </div>
                    </div>




                </div>
            @break

            @default
        @endswitch



        <div class="button-container-2">
            <span class="mas">{{ __('messages.needservicehelp') }}</span>
            <button wire:click="verifyorder" type="button"
                name="Hover">{{ __('messages.orderservice') }}</button>
        </div>
    @endif
    

    @if ($check == 3)
        <div class="col-12 alert alert-success" role="alert">
            {{ __('messages.ordersusess') }}
        </div>
    @endif

</div>
