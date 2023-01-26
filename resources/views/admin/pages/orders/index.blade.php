@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Orders
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Orders</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Orders
            </div>
            <div class="widget-content">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" id="datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order No.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Total</th>
                                        <th>Created at</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($orders as $index => $order)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td>{{ $order['order_no'] }}</td>
                                            <td>{{ $order['name'] }}</td>
                                            <td>{{ $order['phone'] }}</td>
                                            <td>{{ $order['email'] }}</td>
                                            <td>{{ $order['total'] }}</td>
                                            <td>{{ $order['created_at'] }}</td>
                                            <td>
                                                <a class="custom-btn"
                                                    href="{{ route('admin.shippment.index', ['id' => $order['order_no']]) }}">
                                                    <i class="fa fa-info"></i> Shipping
                                                </a>
                                                <a class="custom-btn blue-bc"
                                                    href="{{ route('admin.orders.show', ['order_no' => $order['order_no']]) }}">
                                                    <i class="fa fa-eye"></i> Show
                                                </a>
                                                <button class="custom-btn red-bc delete-btn"
                                                    data-url="{{ route('admin.orders.delete', ['id' => $order['id']]) }}">
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
