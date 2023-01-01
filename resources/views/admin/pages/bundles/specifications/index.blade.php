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
                <form class="row ajax-form" action="{{ route('admin.bundles.accessories.store', ['id' => $id]) }}"
                    method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Accessory</label>
                            <select class="form-control" name="accessory_id" id="accessory-input"
                                data-url="{{ route('admin.bundles.accessories.specifications') }}">
                                <option value="0">Choose </option>
                                @foreach ($accessories['data'] as $accessory)
                                    <option value="{{ $accessory['id'] }}">{{ $accessory['name_en'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Accessory SKU</label>
                            <select class="form-control" name="accessory_specification_id" id="specification-area">
                                <option value="0">Choose </option>
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
                                        <th>Accessory</th>
                                        <th>SKU</th>
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
                                            <td>{{ $specification['accessory']['name_en'] }}</td>
                                            <td>{{ $specification['accessory_specification']['sku'] }}</td>
                                            <td>
                                                <button class="custom-btn btn-modal-view"
                                                    data-url="{{ route('admin.bundles.accessories.edit', ['id' => $specification['id']]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.bundles.accessories.destroy', ['id' => $specification['id']]) }}">
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
@push('js')
    <script>
        $(document).on('change', '#accessory-input', function() {
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
