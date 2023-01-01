@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Edit accessory
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Edit accessory</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="put" action="{{ route('admin.accessories.update', ['accessory' => $accessory['id']]) }}"
            class="ajax-form">
            @csrf
            @method('put')
            <div class="widget">
                <div class="widget-content">
                    <div class="row">

                        <div class="col-6">
                            <img src="{{ $accessory['image_path'] }}" width="150">

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Main image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 540 * 540
                            </span>
                            <div class="form-group">
                                <label> Product</label>
                                <select class="form-control" id="select" multiple name="product_id[]">
                                    <option value="0">Choose</option>
                                    @foreach ($products['data'] as $product)
                                        <option value="{{ $product['id'] }}"
                                            {{ in_array($product['id'], $product_ids) ? 'selected' : '' }}>
                                            {{ $product['name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (EN)</label>
                                <input type="text" class="form-control" name="name_en"
                                    value="{{ $accessory['name_en'] }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Name (AR)</label>
                                <input type="text" class="form-control font_ar" name="name_ar"
                                    value="{{ $accessory['name_ar'] }}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Overview (EN)</label>
                                <textarea class="form-control" name="overview_en">{{ $accessory['overview_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Overview (AR)</label>
                                <textarea class="form-control" name="overview_ar">{{ $accessory['overview_ar'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Technical Specifications (EN)</label>
                                <textarea class="form-control tiny-editor" name="description_en">{{ $accessory['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Technical Specifications (AR)</label>
                                <textarea class="form-control tiny-editor" name="description_ar">{{ $accessory['description_ar'] }}</textarea>
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
