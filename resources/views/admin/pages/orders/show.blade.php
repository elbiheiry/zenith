@extends('admin.layouts.master')
@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-envelope"></i>
        Show order
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Show order</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-content ">
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
                        <button class="icon-btn red-bc delete-btn"
                            order-url="{{ route('admin.orders.delete', ['id' => $order['id']]) }}">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        @if ($items->associatedModel != 'bundle')
                                            <th>SKU</th>
                                        @endif


                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $x = 1;
                                    @endphp
                                    @foreach ($items as $index => $item)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            @if ($items->associatedModel != 'bundle')
                                                <td>{{ $item->attributes->sku }}</td>
                                            @endif
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
            <!--End Widget-content-->
        </div>
        <!--End Widget-->
    </div>
    <!--End Page content-->
@endsection
