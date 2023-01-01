@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        BENEFIT OF THE PROGRAM
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">BENEFIT OF THE PROGRAM</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="post" action="{{ route('admin.benefits.store') }}" class="ajax-form">
            @csrf
            @method('post')
            <div class="widget">
                <div class="widget-content">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Image </label>
                                <input type="file" class="jfilestyle" name="image" />
                            </div>
                            <span class="text-danger">Image dimensions should be : 128 * 128
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Title (EN)</label>
                                <input type="text" class="form-control" name="title_en" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Title (AR)</label>
                                <input type="text" class="form-control font_ar" name="title_ar" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description (EN)</label>
                                <textarea class="form-control" name="description_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description (AR)</label>
                                <textarea class="form-control" name="description_ar"></textarea>
                            </div>
                        </div>

                        <button class="custom-btn" type="submit">
                            Save Change <i class="fa fa-long-arrow-alt-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="widget">
            <div class="widget-title">
                BENEFIT OF THE PROGRAM
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
                                        <th>Title (EN)</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($benefits['data'] as $index => $benefit)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td><img src="{{ $benefit['image_path'] }}" /></td>
                                            <td>{{ $benefit['title_en'] }}</td>
                                            <td>
                                                <a class="custom-btn"
                                                    href="{{ route('admin.benefits.edit', ['benefit' => $benefit['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.benefits.destroy', ['benefit' => $benefit['id']]) }}">
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
