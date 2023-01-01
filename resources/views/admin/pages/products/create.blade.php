@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Add product
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Add product</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="post" action="{{ route('admin.products.store') }}" class="ajax-form">
            @csrf
            @method('post')
            <div class="widget">
                <div class="widget-content">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Main image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 540 * 540
                            </span>
                        </div>
                        <!--<div class="col-6">-->
                        <!--    <div class="form-group">-->
                        <!--        <label>Components image (Can be null)</label>-->
                        <!--        <input type="file" class="jfilestyle" name="image2" />-->
                        <!--    </div>-->
                        <!--    <span class="text-danger">Image dimensions should be : 540 * 540-->
                        <!--    </span>-->
                        <!--</div>-->

                        <!--<div class="col-md-6">-->
                        <!--    <div class="form-group">-->
                        <!--        <label> School</label>-->
                        <!--        <select class="form-control" id="select" multiple name="school_id[]">-->
                        <!--            @foreach ($schools['data'] as $school)
    -->
                        <!--                <option value="{{ $school['id'] }}">{{ $school['name_en'] }}</option>-->
                        <!--
    @endforeach-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (EN)</label>
                                <input type="text" class="form-control" name="name_en" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (AR)</label>
                                <input type="text" class="form-control font_ar" name="name_ar" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product description (EN)</label>
                                <textarea class="form-control tiny-editor" name="description_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product description (AR)</label>
                                <textarea class="form-control tiny-editor" name="description_ar"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product features (EN)</label>
                                <textarea class="form-control tiny-editor" name="features_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product features (AR)</label>
                                <textarea class="form-control tiny-editor" name="features_ar"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product legal (EN)</label>
                                <textarea class="form-control tiny-editor" name="legal_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product legal (AR)</label>
                                <textarea class="form-control tiny-editor" name="legal_ar"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product terms (EN)</label>
                                <textarea class="form-control tiny-editor" name="terms_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>product terms (AR)</label>
                                <textarea class="form-control tiny-editor" name="terms_ar"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-title">Basic SKU</div>
                <div class="widget-content">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> SKU</label>
                                <input type="text" class="form-control" name="sku" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" step="0.01" min="0" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Capacity</label>
                                <select class="form-control" name="capacity_id">
                                    <option value="0">Choose capacity</option>
                                    @foreach ($capacities['data'] as $capacity)
                                        <option value="{{ $capacity['id'] }}">{{ $capacity['name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Color</label>
                                <select class="form-control" name="color_id">
                                    <option value="0">Choose color</option>
                                    @foreach ($colors['data'] as $color)
                                        <option value="{{ $color['id'] }}">{{ $color['name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Connectivity</label>
                                <select class="form-control" name="connectivity">
                                    <option value="0">Choose</option>
                                    <option value="Wi-Fi"> Wi-Fi </option>
                                    <option value="Wi-Fi + Cellular">Wi-Fi + Cellular</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
