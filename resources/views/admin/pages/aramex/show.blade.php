@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Track shippment
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Track shippment</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Track shippment
            </div>
            <div class="widget-content">

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label> Data </label>
                            <textarea class="form-control">
                                {{ json_encode($data) }}
                            </textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Page content-->
@endsection
