@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Specifications
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Specifications</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-content">
                <form class="row ajax-form" action="{{ route('admin.products.specifications.store', ['id' => $id]) }}"
                    method="post">
                    @csrf
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>SKU</label>
                            <input class="form-control" name="sku" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" name="price" type="number" step="0.01" min="0">
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Type</label>
                            <input class="form-control" name="type" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Capacity</label>
                            <select class="form-control" name="capacity_id">
                                <option value="0">Choose</option>
                                @foreach ($capacities['data'] as $capacity)
                                    <option value="{{ $capacity['id'] }}">{{ $capacity['name_en'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Connectivity</label>
                            <select class="form-control" name="connectivity">
                                <option value="0">Choose</option>
                                <option value="Wi-Fi"> Wi-Fi </option>
                                <option value="Wi-Fi + Cellular">Wi-Fi + Cellular</option>
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
                Specifications
            </div>
            <div class="widget-content">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SKU</th>
                                        <th>Price </th>
                                        <th>Color</th>
                                        <th>Capacity / Type</th>
                                        <th>Connectivity </th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($specifications['data'] as $index => $specification)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td>{{ $specification['sku'] }}</td>
                                            <td>{{ $specification['price'] }}</td>
                                            <td>{{ $specification['color']['name_en'] }}</td>
                                            <td>{{ $specification['capacity_id'] == null ? $specification['type'] : $specification['capacity']['name_en'] }}
                                            </td>
                                            <td>{{ $specification['connectivity'] == null ? 'N\A' : $specification['connectivity'] }}
                                            </td>

                                            <td>
                                                <button class="custom-btn btn-modal-view"
                                                    data-url="{{ route('admin.products.specifications.edit', ['id' => $specification['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                @if ($index != 0)
                                                    <button class="custom-btn red-bc delete-btn"
                                                        data-url="{{ route('admin.products.specifications.destroy', ['id' => $specification['id']]) }}">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                @endif

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
