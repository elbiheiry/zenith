@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        For parents
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">For parents</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                For parents
            </div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.content.update') }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ $content['image_path'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 570 * 570
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Title (EN)</label>
                                <input type="text" class="form-control" name="title_en"
                                    value="{{ $content['title_en'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Title (AR)</label>
                                <input type="text" class="form-control" name="title_ar"
                                    value="{{ $content['title_ar'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Subtitle (EN)</label>
                                <input type="text" class="form-control" name="subtitle_en"
                                    value="{{ $content['subtitle_en'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Subtitle (AR)</label>
                                <input type="text" class="form-control" name="subtitle_ar"
                                    value="{{ $content['subtitle_ar'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Description (EN)</label>
                                <textarea type="text" class="form-control" name="description_en">{{ $content['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Description (AR)</label>
                                <textarea type="text" class="form-control" name="description_ar">{{ $content['description_ar'] }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="custom-btn" type="submit">
                            Save Change <i class="fa fa-long-arrow-alt-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--End Page content-->
@endsection
