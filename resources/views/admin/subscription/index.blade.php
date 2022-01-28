@extends('admin.master')
@section('pageTitle', 'Dashboard')
@section('content')
@section('pageCss')
<style></style>
@stop
<div class="add-newuser">
    <div class="row">
        <div class="col-md-6 text-left">
            <p>
                <span>Subscriptions</span>
            </p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('admin/subscription-management/create') }}">Add New Subcription Plan</a>
        </div>
    </div>
</div>
<div class="john-doe pading-none">
    <div class="row">
        <div class="col-md-5 col-sm-5">
            <div class="sabscrib-sec">
                <h3>Basic</h3>
                <p>$ 30/month</p>
                <div class="advertisements-sec">
                    <p><img src="{{ asset('public/adminAssets/images/s_included.png')}}">Products Promotions</p>
                    <p><img src="{{ asset('public/adminAssets/images/s_not_included.png')}}">Advertisements</p>
                    <p><img src="{{ asset('public/adminAssets/images/s_not_included.png')}}">Times Service</p>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <div class="toggle-img">
                <ul class="calldetail-box">
                    <li>
                        Active
                        <label class="switch">
                            <input type="checkbox" checked="">
                            <span class="slider"></span>
                        </label>
                    </li>
                    <li><a href="#"><img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="icon"></a></li>
                    <li><a href="#"><img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="icon"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="john-doe">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="sabscrib-sec">
                    <h3>Standard</h3>
                    <p>$ 30/month</p>
                    <div class="advertisements-sec">
                        <p><img src="{{ asset('public/adminAssets/images/s_included.png')}}">Products Promotions</p>
                        <p><img src="{{ asset('public/adminAssets/images/s_not_included.png')}}">Advertisements</p>
                        <p><img src="{{ asset('public/adminAssets/images/s_not_included.png')}}">Times Service</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 text-right">
                <div class="toggle-img">
                    <ul class="calldetail-box">
                        <li>
                            Active
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="slider"></span>
                            </label>
                        </li>
                        <li><a href="#"><img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="icon"></a></li>
                        <li><a href="#"><img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="john-doe">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="sabscrib-sec">
                    <h3>Premium</h3>
                    <p>$ 30/month</p>
                    <div class="advertisements-sec">
                        <p><img src="{{ asset('public/adminAssets/images/s_included.png')}}">Products Promotions</p>
                        <p><img src="{{ asset('public/adminAssets/images/s_not_included.png')}}">Advertisements</p>
                        <p><img src="{{ asset('public/adminAssets/images/s_not_included.png')}}">Times Service</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 text-right">
                <div class="toggle-img">
                    <ul class="calldetail-box">
                        <li>
                            Active
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="slider"></span>
                            </label>
                        </li>
                        <li><a href="#"><img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="icon"></a></li>
                        <li><a href="#"><img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop