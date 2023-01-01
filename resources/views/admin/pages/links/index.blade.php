@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Social links
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Social links</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <form class="row ajax-form" action="{{ route('admin.links.store') }}" method="post">
                    @csrf
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Icon </label>
                            <input type="text" class="form-control" name="icon">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Link </label>
                            <input type="text" class="form-control" name="link">
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
                Social links
            </div>
            <div class="widget-content">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name </th>
                                        <th>link </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($social_links as $index => $link)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td>{{ $link->name }}</td>
                                            <td>{{ $link->link }}</td>
                                            <td>
                                                <button class="custom-btn btn-modal-view"
                                                    data-url="{{ route('admin.links.edit', ['id' => $link->id]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.links.delete', ['id' => $link->id]) }}">
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
