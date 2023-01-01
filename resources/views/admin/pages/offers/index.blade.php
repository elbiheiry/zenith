@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        {{ request()->type != 'parents' ? 'Offers' : 'Benefits for parents' }}
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">{{ request()->type != 'parents' ? 'Offers' : 'Benefits for parents' }}</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <form class="row ajax-form" action="{{ route('admin.offers.store', ['type' => request()->type]) }}"
                    method="post">
                    @csrf
                    {{-- <div class="row"> --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" class="jfilestyle" name="image" />
                        </div>
                        <span class="text-danger">Image dimensions should be : 128 * 128
                        </span>
                    </div>
                    {{-- </div>
                    <div class="row"> --}}
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
                    {{-- </div> --}}
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
                {{ request()->type != 'parents' ? 'Offers' : 'Benefits for parents' }}
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
                                    @foreach ($offers['data'] as $index => $offer)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td>{{ $offer['title_en'] }}</td>
                                            <td>{{ $offer['title_ar'] }}</td>
                                            <td>
                                                <button class="custom-btn btn-modal-view"
                                                    data-url="{{ route('admin.offers.edit', ['id' => $offer['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.offers.destroy', ['id' => $offer['id']]) }}">
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
