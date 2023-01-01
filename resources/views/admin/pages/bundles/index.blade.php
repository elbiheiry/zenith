@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Bundles
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Bundles</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Bundles
                <a class="custom-btn" href="{{ route('admin.bundles.create') }}">
                    <i class="fa fa-plus"></i> Add bundle
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
                                    @foreach ($bundles['data'] as $index => $bundle)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td><img src="{{ $bundle['image'] }}" width="100" /></td>
                                            <td>{{ $bundle['name_en'] }}</td>
                                            <td>
                                                <a class="custom-btn green-bc"
                                                    href="{{ route('admin.bundles.accessories.index', ['id' => $bundle['id']]) }}">
                                                    <i class="fa fa-info"></i> Accessories
                                                </a>
                                                <a class="custom-btn"
                                                    href="{{ route('admin.bundles.edit', ['bundle' => $bundle['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.bundles.destroy', ['bundle' => $bundle['id']]) }}">
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
