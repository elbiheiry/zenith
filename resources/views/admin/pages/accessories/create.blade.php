@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Add accessory
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Add accessory</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="post" action="{{ route('admin.accessories.store') }}" class="ajax-form">
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Product</label>
                                <select class="form-control" id="select" multiple name="product_id[]">
                                    <option value="0">Choose</option>
                                    @foreach ($products['data'] as $product)
                                        <option value="{{ $product['id'] }}">{{ $product['name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
                                <label>Overview (EN)</label>
                                <textarea class="form-control" name="overview_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Overview (AR)</label>
                                <textarea class="form-control" name="overview_ar"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Technical Specifications (EN)</label>
                                <textarea class="form-control tiny-editor" name="description_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Technical Specifications (AR)</label>
                                <textarea class="form-control tiny-editor" name="description_ar"></textarea>
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
                                <label> Color</label>
                                <select class="form-control" name="color_id">
                                    <option value="0">Choose color</option>
                                    @foreach ($colors['data'] as $color)
                                        <option value="{{ $color['id'] }}">{{ $color['name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Locale</label>
                                <input type="text" class="form-control" name="locale" />
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
