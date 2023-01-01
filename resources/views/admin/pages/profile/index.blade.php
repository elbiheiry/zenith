@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-user"></i>
        Profile
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">profile</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                <i class="fa fa-profile"></i>
                Profile
            </div>
            <div class="widget-content">
                <form class="ajax-form" method="put" action="{{ route('admin.profile.update') }}">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Username : </label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                            </div>
                            <!--End Form Group-->
                        </div>
                        <!--End Col-md-6-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Email address : </label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                            </div>
                            <!--End Form Group-->
                        </div>
                        <!--End Col-md-6-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Password : </label>
                                <input type="password" class="form-control" name="password" />
                            </div>
                            <!--End Form Group-->
                        </div>
                        <!--End Col-md-6-->
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <button class="custom-btn" type="submit">
                            Save Change <i class="fa fa-long-arrow-alt-right"></i>
                        </button>
                        <!--End Form Group-->
                    </div>
                </form>
                <!--End Form-->
            </div>
            <!--End Widget-content-->
        </div>
        <!--End Widget-->
    </div>
    <!--End Page Content-->
@endsection
