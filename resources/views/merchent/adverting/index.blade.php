@extends('merchent.master')
@section('pageTitle', 'Adverting')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="row">
            <div class="col-md-6 text-left">
                <p>Menu</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ url('merchant/adverting-management/create') }}">New Ad</a>
            </div>
        </div>
    </div>
    <div class="new-requests">
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-10 text-left">
                    <figure class="pizza-sec">
                        <img src="{{ asset('public/merchemtAssets/images/mega-sale.jpeg')}}" alt="circle">
                    </figure>
                    <div class="Jessica-pra text-contant">
                        <h3>Advertisement Title</h3>
                        <p>Lenovo Ideapad 5</p>
                        <a href="#">https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&amp;marketplace</a>

                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <ul>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px"></a></li>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-10 text-left">
                    <figure class="pizza-sec">
                        <img src="{{ asset('public/merchemtAssets/images/big-sale.jpeg')}}" alt="circle">
                    </figure>
                    <div class="Jessica-pra text-contant">
                        <h3>Advertisement Title</h3>
                        <p>Lenovo Ideapad 5</p>
                        <a href="#">https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&amp;marketplace </a>
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <ul>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px"></a></li>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-10 text-left">
                    <figure class="pizza-sec">
                        <img src="{{ asset('public/merchemtAssets/images/fashion-sale.jpeg')}}" alt="circle">
                    </figure>
                    <div class="Jessica-pra text-contant">
                        <h3>Advertisement Title</h3>
                        <p>Lenovo Ideapad 5</p>
                        <a href="#">https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&amp;marketplace</a>
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <ul>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px"></a></li>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px"></a></li>
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