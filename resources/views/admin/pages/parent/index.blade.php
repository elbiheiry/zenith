@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Parental program
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Parental program</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Parental program
            </div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.parental.update') }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ $parent['image1_path'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>First Image </label>
                                <input type="file" class="jfilestyle" name="image1" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 570 * 570
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section title (EN)</label>
                                <input type="text" class="form-control" name="title_en"
                                    value="{{ $parent['title_en'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section title (AR)</label>
                                <input type="text" class="form-control" name="title_ar"
                                    value="{{ $parent['title_ar'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section subtitle (EN)</label>
                                <input type="text" class="form-control" name="subtitle_en"
                                    value="{{ $parent['subtitle_en'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section subtitle (AR)</label>
                                <input type="text" class="form-control" name="subtitle_ar"
                                    value="{{ $parent['subtitle_ar'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section description (EN)</label>
                                <textarea type="text" class="form-control" name="description1_en">{{ $parent['description1_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section description (AR)</label>
                                <textarea type="text" class="form-control" name="description1_ar">{{ $parent['description1_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-6">
                            <img src="{{ $parent['image2_path'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Second Image </label>
                                <input type="file" class="jfilestyle" name="image2" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 570 * 570
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Second section description (EN)</label>
                                <textarea type="text" class="form-control" name="description2_en">{{ $parent['description2_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Second section description (AR)</label>
                                <textarea type="text" class="form-control" name="description2_ar">{{ $parent['description2_ar'] }}</textarea>
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
