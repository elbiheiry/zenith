@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-envelope"></i>
        Registeration requests
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Registeration requests</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                <div class="alert-text">You have {{ count($messages['data']) }} request</div>
            </div>
            <!--End Widget Title-->
            <div class="widget-content">
                <div class="row">
                    <div class="col" id="load-area">
                        @include('admin.pages.requests.templates.messages')
                    </div>
                    <!--End Item List-->
                    <div class="w-100"></div>
                    @if (count($messages['data']) > 0)
                        <button class="custom-btn" data-url="{{ url()->current() }}" id="load-more-button"
                            data-last="{{ $messages['meta']['last_page'] }}"
                            data-count="{{ $messages['meta']['current_page'] }}">
                            Load More
                        </button>
                    @endif

                </div>
            </div>
            <!--End Widget-content-->
        </div>
        <!--End Widget-->
    </div>
@endsection
