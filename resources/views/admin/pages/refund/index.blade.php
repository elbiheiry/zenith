@extends('admin.layouts.master')

@section('content')
    <!-- Page head ==========================================-->
    <div class="page-head">
        <i class="fa fa-list"></i>
        Retrun & refund policy
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
            </li>
            <li class="active">Retrun & refund policy</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="widget">
            <div class="widget-title">
                Retrun & refund policy
            </div>
            <div class="widget-content">
                <form method="put" action="{{ route('admin.refund.update') }}" class="ajax-form">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Description (EN)</label>
                                <textarea class="form-control tiny-editor" name="description_en">{{ $refund['description_en'] }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Description (AR)</label>
                                <textarea class="form-control tiny-editor" name="description_ar">{{ $refund['description_ar'] }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="custom-btn" type="submit">
                            Save Change <i class="fa fa-long-arrow-alt-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--End Page content-->
@endsection
