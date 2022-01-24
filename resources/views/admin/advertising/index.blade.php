@extends('admin.master')
@section('pageTitle', 'Advertising')
@section('content')
<div class="add-newuser ">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="ti-user"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6 text-left">
            <p>
                <span>Advertising</span>
            </p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('admin/advertising-management/create') }}">Add New Advertising Banner</a>
        </div>
    </div>
</div>

<div class="advertising">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="menu-images">
                <figure>
                    <img src="{{ asset('public/adminAssets/images/760614_1.jpg')}}" alt="760614_1" width="100%">
                </figure>
                <span class="delete-icon">
                    <a href="#">
                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                    </a>
                </span>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="menu-images">
                <figure>
                    <img src="{{ asset('public/adminAssets/images/mega-sale1.jpg')}}" alt="mega" width="100%">
                </figure>
                <span class="delete-icon">
                    <a href="#">
                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>

@endsection