@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Add bundle
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Add bundle</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="post" action="{{ route('admin.bundles.store') }}" class="ajax-form">
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
                            <span class="text-danger">Image dimensions should be : 960 * 520
                            </span>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> School</label>
                                <select class="form-control" name="school_id">
                                    <option value="0">Choose</option>
                                    @foreach ($schools['data'] as $school)
                                        <option value="{{ $school['id'] }}">{{ $school['name_en'] }}</option>
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
                                <label> Price</label>
                                <input type="number" class="form-control" name="price" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-title">Product data</div>
                <div class="widget-content">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> product</label>
                                <select class="form-control" name="product_id"
                                    data-url="{{ route('admin.bundles.products') }}" id="product-input">
                                    <option value="0">Choose</option>
                                    @foreach ($products['data'] as $product)
                                        <option value="{{ $product['id'] }}">{{ $product['name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> product SKU</label>
                                <select class="form-control" name="product_specification_id" id="specification-area">
                                    <option value="0">Choose</option>

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
@push('js')
    <script>
        $(document).on('change', '#product-input', function() {
            var url = $(this).data('url');
            var _token = "{{ csrf_token() }}";
            var id = $(this).val();

            $.ajax({
                url: url,
                method: "post",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(response) {
                    $('#specification-area').html(response);
                }
            });
        });
    </script>
@endpush
