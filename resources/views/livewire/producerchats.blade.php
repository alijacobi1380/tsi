<div>
    <div class="card" style="padding: 30px">
        <div class="row">

            <div class="col-lg-4"
                style="border-color: #f1f1f1;border-style: solid;border-radius: 5px; overflow-y: scroll;">


                <h2 style="text-align: center">{{ __('messages.chuserslist') }}</h2>

                @foreach ($users as $user)
                    <div wire:click="setid({{ $user->id }})" class="hv" style="cursor: pointer;">
                        <img style="width: 50px;height: 50px;border-radius: 100%;margin: 20px"
                            src="{{ url('assets/images/users/avatar-2.jpg') }}" alt="">
                        <span>{{ $user->name }}</span>
                        <br>
                    </div>
                @endforeach

            </div>
            @if ($reciverid != null)

                <section wire:poll.visible="getchats()" class="col-lg-8"
                    style="border-color: #f1f1f1;border-style: solid;border-radius: 4px">
                    <div class="col-12" style="padding: 0px !important;margin:0px !important;">



                        <div class="card col-12" id="chat2">
                            <div style="text-align: center !important"
                                class="card-header justify-content-between align-items-center p-3">
                                <h5 class="mb-0">
                                    @if ($reciverid != null)
                                        {{ $recivername }}
                                    @endif
                                </h5>

                            </div>
                            <div id="chsec" class="card-body" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: 400px;overflow-y:scroll;">


                                @if ($chats)

                                @php
                                    set_time_limit(100);
                                @endphp

                                    @foreach ($chats as $chat)
                                        @if ($chat->senderid == Auth::user()->id)
                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="{{ url('assets/images/users/avatar-2.jpg') }}" alt="avatar 1"
                                                    style="width: 45px; height: 100%;border-radius: 100%">
                                                <div>
                                                    <p class="small p-2 ms-3 mb-1 rounded-3"
                                                        style="background-color: #f5f6f7;font-size: 16px;border-radius:10px;">
                                                        {{ $chat->desc }}
                                                    </p>


                                                    <p class="small ms-3 mb-3 rounded-3 text-muted">
                                                        @if (App::getLocale() == 'fa')
                                                            {{ $chat->date }}
                                                        @else
                                                            {{ $chat->prdate }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        @elseif($chat->senderid == $reciverid)
                                            <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                                                <div>
                                                    <p style="font-size: 16px;border-radius:10px;"
                                                        class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
                                                        {{ $chat->desc }}
                                                    </p>
                                                    <p
                                                        class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">
                                                        @if (App::getLocale() == 'fa')
                                                            {{ $chat->date }}
                                                        @else
                                                            {{ $chat->prdate }}
                                                        @endif
                                                    </p>
                                                </div>
                                                <img src="{{ url('assets/images/users/avatar-2.jpg') }}" alt="avatar 1"
                                                    style="width: 45px; height: 100%;border-radius: 100%">
                                            </div>
                                        @endif
                                        <script>
                                            var objDiv = document.getElementById("chsec");
                                            objDiv.scrollTop = objDiv.scrollHeight;
                                        </script>
                                    @endforeach
                                @else
                                    <h6>{{ __('messages.nochat') }}</h6>
                                @endif





                            </div>
                            <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">




                                <input wire:keydown.enter="addchat" wire:model.lazy="text" type="text"
                                    class="form-control form-control-lg" id="exampleFormControlInput1"
                                    placeholder="{{ __('messages.chinputplaceholder') }}">

                                <button wire:click="addchat"
                                    style="background-color: #f1f1f1;color: blue;cursor: pointer;margin-right: 10px;border: none;padding: 10px"
                                    class="ms-3"><i class="fas fa-paper-plane"></i></button>



                            </div>

                        </div>


                    </div>
                </section>
            @else
                <div class="col-lg-8 col-md-12 alert alert-secondary" style="text-align: center;align-items: center">
                    <h5>{{ __('messages.chselecterror') }}</h5>
                </div>

            @endif

        </div>

    </div>
</div>
