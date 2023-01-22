@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Shippment
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Shippment</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form method="post" action="{{ route('admin.shippment.store', ['id' => $order->id]) }}" class="ajax-form">
            @csrf
            @method('post')
            <div class="widget">
                <div class="widget-title">
                    Shipper data
                </div>
                <div class="widget-content">

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label> Name </label>
                                <input type="text" class="form-control" value="Ahmed Halawa" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Phone number </label>
                                <input type="text" class="form-control" value="+9440540541315" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Email </label>
                                <input type="email" class="form-control" value="ahalawa@zenitharabia.com" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> City </label>
                                <input type="text" class="form-control" value="Riyadh" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Zip code </label>
                                <input type="text" class="form-control" name="zip_code">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Line1 details </label>
                                <input type="text" class="form-control" name="line1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Line2 details </label>
                                <input type="text" class="form-control" name="line2">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Line3 details </label>
                                <input type="text" class="form-control" name="line3">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-title">
                    Shipping data
                </div>
                <div class="widget-content">

                    <div class="row">

                        <div class="col-4">
                            <div class="form-group">
                                <label> Pickup date </label>
                                <input type="date" class="form-control" name="pickup_date">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Pickup ready time </label>
                                <input type="time" class="form-control" name="ready_time">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Last pickup time </label>
                                <input type="time" class="form-control" name="last_pickup_time">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Closing time </label>
                                <input type="time" class="form-control" name="closing_time">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Shipping date time </label>
                                <input type="datetime-local" class="form-control" name="shipping_date_time">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Due date </label>
                                <input type="datetime-local" class="form-control" name="due_date">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Pickup location </label>
                                <input type="text" class="form-control" name="pickup_location">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Weight </label>
                                <input type="number" class="form-control" name="weight">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label> Volume </label>
                                <input type="number" class="form-control" name="volume">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label> Comments </label>
                                <input type="text" class="form-control" name="comments">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label> Description </label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="custom-btn" type="submit">
                            Save Change <i class="fa fa-long-arrow-alt-right"></i>
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <!--End Page content-->
@endsection
