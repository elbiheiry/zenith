@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Edit school
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Edit school</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="put" action="{{ route('admin.schools.update', ['school' => $school['id']]) }}" class="ajax-form">
            @csrf
            @method('put')
            <div class="widget">
                <div class="widget-content">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ $school['image_path'] }}" width="150">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>School logo </label>
                                <input type="file" class="jfilestyle" name="logo" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 360 * 190
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (EN)</label>
                                <input type="text" class="form-control" name="name_en"
                                    value="{{ $school['name_en'] }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (AR)</label>
                                <input type="text" class="form-control font_ar" name="name_ar"
                                    value="{{ $school['name_ar'] }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $school['email'] }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact phone</label>
                                <input type="text" class="form-control font_ar" name="phone"
                                    value="{{ $school['phone'] }}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>School brief (EN)</label>
                                <textarea class="form-control" name="description_en">{{ $school['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>School brief (AR)</label>
                                <textarea class="form-control" name="description_ar">{{ $school['description_ar'] }}</textarea>
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
