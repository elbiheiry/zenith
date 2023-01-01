@extends('admin.layouts.master')
@section('content')
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="counter">
                                    <i class="fa fa-newspaper"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\Message::count() }}" data-speed="1500">
                                            {{ \App\Models\Message::count() }}
                                        </h3>
                                        <div class="count-name">Message</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="counter">
                                    <i class="fa fa-list"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\Product::count() }}" data-speed="1500">
                                            {{ \App\Models\Product::count() }}
                                        </h3>
                                        <div class="count-name">Product</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="counter">
                                    <i class="fa fa-building"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\School::count() }}" data-speed="1500">
                                            {{ \App\Models\School::count() }}
                                        </h3>
                                        <div class="count-name">Schools</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="counter">
                                    <i class="fa fa-question"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\RegisterationRequest::count() }}"
                                            data-speed="1500">
                                            {{ \App\Models\RegisterationRequest::count() }}
                                        </h3>
                                        <div class="count-name">Registeration requests</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="counter">
                                    <i class="fa fa-info"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\Order::count() }}" data-speed="1500">
                                            {{ \App\Models\Order::count() }}
                                        </h3>
                                        <div class="count-name">Orders</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="counter">
                                    <i class="fa fa-info"></i>
                                    <div class="counter-cont">
                                        <h3 class="timer" data-to="{{ \App\Models\Accessory::count() }}"
                                            data-speed="1500">
                                            {{ \App\Models\Accessory::count() }}
                                        </h3>
                                        <div class="count-name">Accessories</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="row" style="margin: 0 -15px">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-title"> Latest Messages
                        <a href="{{ route('admin.messages.index') }}" class="custom-btn"> see all</a>
                    </div>
                    <div class="widget-content" style="padding: 0">
                        @foreach ($messages as $message)
                            <div class="item-list">
                                <a href="{{ route('admin.messages.show', ['message' => $message->id]) }}">
                                    <img src="{{ $message->image() }}" />
                                    <div class="item-content">
                                        {{ $message->email }}
                                        <br />
                                        <span> <i class="fa fa-clock"></i> {{ $message->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="widget-title"> Latest school requests
                        <a href="{{ route('admin.requests.index') }}" class="custom-btn"> see all</a>
                    </div>
                    <div class="widget-content" style="padding: 0">
                        @foreach ($requests as $request)
                            <div class="item-list">
                                <a href="{{ route('admin.requests.show', ['register' => $request->id]) }}">
                                    {{-- <img src="{{ $request->image() }}" /> --}}
                                    <div class="item-content">
                                        {{ $request->email }}
                                        <br />
                                        <span> <i class="fa fa-clock"></i> {{ $request->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
