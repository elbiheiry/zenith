@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Edit product
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Edit product</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="put" action="{{ route('admin.products.update', ['product' => $product['id']]) }}" class="ajax-form">
            @csrf
            @method('put')
            <div class="widget">
                <div class="widget-content">
                    <div class="row">

                        <div class="col-6">
                            <img src="{{ $product['image_path'] }}" width="150">
                            <div class="form-group">
                                <label>Main image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 540 * 540
                            </span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (EN)</label>
                                <input type="text" class="form-control" name="name_en"
                                    value="{{ $product['name_en'] }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (AR)</label>
                                <input type="text" class="form-control font_ar" name="name_ar"
                                    value="{{ $product['name_ar'] }}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product description (EN)</label>
                                <textarea class="form-control tiny-editor" name="description_en">{{ $product['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product description (AR)</label>
                                <textarea class="form-control tiny-editor" name="description_ar">{{ $product['description_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product features (EN)</label>
                                <textarea class="form-control tiny-editor" name="features_en">{{ $product['features_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product features (AR)</label>
                                <textarea class="form-control tiny-editor" name="features_ar">{{ $product['features_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product legal (EN)</label>
                                <textarea class="form-control tiny-editor" name="legal_en">{{ $product['legal_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product legal (AR)</label>
                                <textarea class="form-control tiny-editor" name="legal_ar">{{ $product['legal_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product terms (EN)</label>
                                <textarea class="form-control tiny-editor" name="terms_en">{{ $product['terms_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product terms (AR)</label>
                                <textarea class="form-control tiny-editor" name="terms_ar">{{ $product['terms_ar'] }}</textarea>
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
