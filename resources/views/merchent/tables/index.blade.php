@extends('merchent.master')
@section('pageTitle', 'Tables')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="appoint-ment">
    <div class="dashboard-heading">
        <h3>Table</h3>
    </div>
    <div class="new-requests">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                    New Booking
                </a>
            </li>
            <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                    Accepted
                </a>
            </li>
            <li role="presentation">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                    My Tables
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span><a href="#">Decline</a></span>
                            <span><a href="#" class="accept-bg">Accept</a></span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span><a href="#">Decline</a></span>
                            <span><a href="#" class="accept-bg">Accept</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i>
                                            <img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @php
            $tables2Data = DB::table('tables')->where('merchent_id', Auth::user()->id)->where('table_for','2')->orderby('id','DESC')->get();
            $tables4Data = DB::table('tables')->where('merchent_id', Auth::user()->id)->where('table_for','4')->orderby('id','DESC')->get();
            $tables6Data = DB::table('tables')->where('merchent_id', Auth::user()->id)->where('table_for','6')->orderby('id','DESC')->get();

            @endphp

            <div role="tabpanel" class="tab-pane" id="messages">
                <a href="{{ url('merchant/table-management/create') }}" class="addproduct-btn pull-right">Add New Table</a>
                <div class="new-booking">
                    <div class="row">
                        <ul class="nav nav-tabs number-sec col-md-12" role="tablist">

                            <li class="col-md-4 text-left active" role="presentation">
                                <a class="number-table" href="#subhome" aria-controls="subhome" role="tab" data-toggle="tab">
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon" width="90px">
                                    </figure>
                                    <div class="Jessica-pra">
                                        <p> <span>Table for</span><b>2</b></p>
                                        <p> <span> Number of Table</span><b>{{ count($tables2Data) }}</b></p>
                                    </div>
                                </a>
                            </li>

                            <li class="col-md-4 text-left" role="presentation">
                                <a class="number-table table-box" href="#profilesub" aria-controls="profilesub" role="tab" data-toggle="tab">
                                    <figure class="small-img">
                                        <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon" width="80%">
                                    </figure>
                                    <div class="Jessica-pra">
                                        <p> <span>Table for</span><b>4</b></p>
                                        <p> <span> Number of Table</span><b>{{ count($tables4Data) }}</b></p>
                                    </div>
                                </a>
                            </li>

                            <li class="col-md-4 text-left" role="presentation">
                                <a class="number-table table-box" href="#messagessub" aria-controls="messagessub" role="tab" data-toggle="tab">
                                    <figure class="small-img">
                                        <img src="{{ asset('public/merchemtAssets/images/table_six.png')}}" alt="icon" width="80%">
                                    </figure>
                                    <div class="Jessica-pra">
                                        <p>
                                            <span>Table for</span>
                                            <b>6</b>
                                        </p>
                                        <p>
                                            <span>Number of Table</span>
                                            <b>{{ count($tables4Data) }}</b>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="subhome">
                                @forelse($tables2Data as $tables)
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>{{ $tables->table_name }}</h3>
                                                <p> <span>Avarage Booking Time :</span> {{ $tables->booking_time }} hours</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="appointment-for">
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/view">
                                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/edit">
                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/delete">
                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>Table not found</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>



                            <div role="tabpanel" class="tab-pane " id="profilesub">
                                @forelse($tables4Data as $tables)
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>{{ $tables->table_name }}</h3>
                                                <p> <span>Avarage Booking Time :</span> {{ $tables->booking_time }} hours</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="appointment-for">

                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/view">
                                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/edit">
                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/delete">
                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>Table not found</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                            <div role="tabpanel" class="tab-pane " id="messagessub">
                                @forelse($tables6Data as $tables)
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_six.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>
                                                    {{ $tables->table_name }}
                                                </h3>
                                                <p>
                                                    <span>
                                                        Avarage Booking Time :
                                                    </span>
                                                    {{ $tables->booking_time }} hours
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="appointment-for">
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/view">
                                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/edit">
                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('admin/table-management')}}/{{ $tables->id }}/delete">
                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_six.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>Table not found</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
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