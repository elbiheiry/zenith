@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        School program
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">School program</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                School program
            </div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.program.update') }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ $program['image1_path'] }}" style="height : 100px !important">
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
                                    value="{{ $program['title_en'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section title (AR)</label>
                                <input type="text" class="form-control" name="title_ar"
                                    value="{{ $program['title_ar'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section subtitle (EN)</label>
                                <input type="text" class="form-control" name="subtitle_en"
                                    value="{{ $program['subtitle_en'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section subtitle (AR)</label>
                                <input type="text" class="form-control" name="subtitle_ar"
                                    value="{{ $program['subtitle_ar'] }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section description (EN)</label>
                                <textarea type="text" class="form-control" name="description1_en">{{ $program['description1_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> First section description (AR)</label>
                                <textarea type="text" class="form-control" name="description1_ar">{{ $program['description1_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-6">
                            <img src="{{ $program['image2_path'] }}" style="height : 100px !important">
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
                                <label> Benefits of school (EN)</label>
                                <textarea type="text" class="form-control" name="description2_en">{{ $program['description2_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Benefits of school (AR)</label>
                                <textarea type="text" class="form-control" name="description2_ar">{{ $program['description2_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-6">
                            <img src="{{ $program['image3_path'] }}" style="height : 100px !important">
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Third Image </label>
                                <input type="file" class="jfilestyle" name="image3" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 570 * 570
                            </span>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> How it works (EN)</label>
                                <textarea type="text" class="form-control" name="description3_en">{{ $program['description3_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> How it works (AR)</label>
                                <textarea type="text" class="form-control" name="description3_ar">{{ $program['description3_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        {{-- <div class="row"> --}}
                        <div class="col-6">
                            <div class="form-group">
                                <label>School program (EN)</label>
                                <textarea class="form-control tiny-editor" name="description_en">{{ $program['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>School program (AR)</label>
                                <textarea class="form-control tiny-editor" name="description_ar">{{ $program['description_ar'] }}</textarea>
                            </div>
                        </div>
                        {{-- </div> --}}
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
