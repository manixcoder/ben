@extends('admin.master')
@section('pageTitle', 'Users')
@section('content')
<div class="add-newuser">
    <div class="row">
        <div class="col-md-6 text-left">
            <p>
                <span>users</span>
            </p>
        </div>
        <div class="col-md-6 text-right">
            <a href="#">Add New User</a>
        </div>
    </div>
</div>
<div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/background2.png')}}" alt="background2" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>John Doe</h3>
            <p>doejohn33@gmail.com</p>
            <p>9600000052</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>10 Jun 21 | 10:30 am</span>
            </p>
            <div class="toggle-img">
                <span>Active</span>
                <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div>
<div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/backup.png')}}" alt="backup" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>Jessica Johnson</h3>
            <p>jessicajohn94@gmail.com</p>
            <p>9800000058</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>10 Jun 21 | 10:30 am</span>
            </p>
            <div class="toggle-img">
                <span>Inactive</span>
                <img src="{{ asset('public/adminAssets/images/toggle_off.png')}}" alt="toggle_of" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div>
<div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/circle.jpg')}}" alt="circle" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>John Doe</h3>
            <p>doejohn33@gmail.com</p>
            <p>9600000052</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>10 Jun 21 | 10:30 am</span>
            </p>
            <div class="toggle-img">
                <span>Inactive</span>
                <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div>
<div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/backup.png')}}" alt="backup" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>Jessica Johnson</h3>
            <p>jessicajohn94@gmail.com</p>
            <p>9800000058</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>10 Jun 21 | 10:30 am</span>
            </p>
            <div class="toggle-img">
                <span>Inactive</span>
                <img src="{{ asset('public/adminAssets/images/toggle_off.png')}}" alt="toggle_of" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div>

@endsection