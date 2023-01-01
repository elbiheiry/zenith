@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Slideshow
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Slideshow</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <form class="row ajax-form" action="{{ route('admin.sliders.store') }}" method="post">
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" class="jfilestyle" name="image" />
                        </div>
                        <span class="text-danger">Image dimensions should be : 1920 * 960
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Button link</label>
                            <input type="text" class="form-control" name="link">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title (EN)</label>
                            <input type="text" class="form-control" name="title_en">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title (AR)</label>
                            <input type="text" class="form-control" name="title_ar">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Description (EN)</label>
                            <input class="form-control" type="text" name="description_en">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Description (AR)</label>
                            <input class="form-control" type="text" name="description_ar">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Button title (EN)</label>
                            <input type="text" class="form-control" name="button_en">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Button title (AR)</label>
                            <input type="text" class="form-control" name="button_ar">
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
                Slideshow
            </div>
            <div class="widget-content">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title (EN)</th>
                                        <th>Title (AR) </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($sliders['data'] as $index => $slider)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td>{{ $slider['title_en'] }}</td>
                                            <td>{{ $slider['title_ar'] }}</td>
                                            <td>
                                                <button class="custom-btn btn-modal-view"
                                                    data-url="{{ route('admin.sliders.edit', ['slider' => $slider['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.sliders.destroy', ['slider' => $slider['id']]) }}">
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
