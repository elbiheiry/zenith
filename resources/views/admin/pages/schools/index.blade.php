@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Schools
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Schools</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Schools
                <a class="custom-btn" href="{{ route('admin.schools.create') }}">
                    <i class="fa fa-plus"></i> Add school
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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($schools['data'] as $index => $school)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td><img src="{{ $school['image_path'] }}" width="100" /></td>
                                            <td>{{ $school['name_en'] }}</td>
                                            <td>{{ $school['email'] }}</td>
                                            <td>{{ $school['phone'] }}</td>
                                            <td>
                                                <a class="custom-btn"
                                                    href="{{ route('admin.schools.edit', ['school' => $school['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.schools.destroy', ['school' => $school['id']]) }}">
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
