@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        images
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">images</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <form class="row ajax-form" action="{{ route('admin.products.images.store', ['id' => $id]) }}"
                    method="post">
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>product image </label>
                            <input type="file" class="jfilestyle" name="image" />
                        </div>
                        <span class="text-danger">Image dimensions should be : 540 * 540
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Color</label>
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
                            <label>Locale</label>
                            <select class="form-control" name="locale">
                                <option value="0">Choose locale</option>
                                <option value="en">EN</option>
                                <option value="ar">AR</option>
                                <option value="general">General</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group text-center">
                        <button class="custom-btn green-bc" type="submit">
                            <i class="fa fa-plus"></i> Save change
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                Images
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
                                        <th>Color </th>
                                        <th>Locale </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($images['data'] as $index => $image)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td><img src="{{ $image['image_path'] }}" width="100"></td>
                                            <td>{{ $image['color']['name_en'] }}</td>
                                            <td>{{ $image['locale'] }}</td>
                                            <td>
                                                <button class="custom-btn btn-modal-view"
                                                    data-url="{{ route('admin.products.images.edit', ['id' => $image['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.products.images.destroy', ['id' => $image['id']]) }}">
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
