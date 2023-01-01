@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Products
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Products</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Products
                <a class="custom-btn" href="{{ route('admin.products.create') }}">
                    <i class="fa fa-plus"></i> Add product
                </a>
            </div>
            <div class="widget-content">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name (EN)</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($products['data'] as $index => $product)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td><img src="{{ $product['image_path'] }}" width="100" /></td>
                                            <td>{{ $product['name_en'] }}</td>
                                            <td>
                                                <a class="custom-btn green-bc"
                                                    href="{{ route('admin.products.specifications.index', ['id' => $product['id']]) }}">
                                                    <i class="fa fa-info"></i> Specifications
                                                </a>
                                                <a class="custom-btn blue-bc"
                                                    href="{{ route('admin.products.images.index', ['id' => $product['id']]) }}">
                                                    <i class="fa fa-image"></i> Images
                                                </a>
                                                <a class="custom-btn"
                                                    href="{{ route('admin.products.edit', ['product' => $product['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.products.destroy', ['product' => $product['id']]) }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        @php
                                            $x++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End Page content-->
@endsection
