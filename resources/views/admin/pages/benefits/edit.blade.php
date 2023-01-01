@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        BENEFIT OF THE PROGRAM
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">BENEFIT OF THE PROGRAM</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="put" action="{{ route('admin.benefits.update', ['benefit' => $benefit['id']]) }}" class="ajax-form">
            @csrf
            @method('put')
            <div class="widget">
                <div class="widget-content">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ $benefit['image_path'] }}" width="150">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 128 * 128
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Title (EN)</label>
                                <input type="text" class="form-control" name="title_en" value="{{ $benefit['title_en'] }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Title (AR)</label>
                                <input type="text" class="form-control font_ar" name="title_ar" value="{{ $benefit['title_ar'] }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description (EN)</label>
                                <textarea class="form-control" name="description_en">{{ $benefit['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description (AR)</label>
                                <textarea class="form-control" name="description_ar">{{ $benefit['description_ar'] }}</textarea>
                            </div>
                        </div>

                        <button class="custom-btn" type="submit">
                            Save Change <i class="fa fa-long-arrow-alt-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--End Page content-->
@endsection
