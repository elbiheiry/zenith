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
        @foreach ($user->orders as $index => $order)
            <div class="widget">
                <div class="widget-title">
                    Order #{{ $index + 1 }}
                </div>
                <div class="widget-content">
                    <div class="row only-message">
                        <div class="message-head">
                            <div class="sender-name" style="padding: 5px 5px 5px 0;">
                                {{ $order['name'] }}
                                <br />
                                <span> <i class="fa fa-clock"></i> {{ $order->created_at->diffForHumans() }} </span>
                                <span> <i class="fa fa-envelope"></i> {{ $order['email'] }} </span>
                                <span> <i class="fa fa-phone"></i> {{ $order['phone'] }} </span>
                                <span> <i class="fa fa-map-marker"></i> {{ $order['city'] }} - {{ $order['state'] }} -
                                    {{ $order['address'] }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @php
                            $items = json_decode($order->items);
                        @endphp
                        <div class="col">
                            <div class="table-responsive-lg">
                                <table class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item name</th>
                                            <th>Item quantity</th>
                                            <th>Item SKU</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $x = 1;
                                        @endphp

                                        @foreach ($items as $index => $item)
                                            <tr>
                                                <td>{{ $x }}</td>
                                                <td><a target="_blank"
                                                        href="{{ route('site.store.product', ['slug' => $item->attributes->slug]) }}">{{ $item->name }}</a>
                                                </td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->sku }}</td>
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
        @endforeach
    </div>
    <!--End Page content-->
@endsection
