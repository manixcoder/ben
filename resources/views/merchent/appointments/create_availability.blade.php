@extends('merchent.master')
@section('pageTitle', 'Appointments')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="col-md-6 text-left">
            <p>Add Availability </p>
        </div>

    </div>


    <div class="new-requests">
        <div class="row">
            <div class="col-md-5 text-left">
                <div id='full_calendar_events'></div>

            </div>
            <!-- <div class="col-md-5 text-left">
                <div class="Jessica-pra calendar-box">
                    <div class="calendar">
                        <div class="header">
                            <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                            <div class="text" data-render="month-year"></div>
                            <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                        </div>
                        <div class="months" data-flow="left">
                            <div class="month month-a">
                                <div class="render render-a"></div>
                            </div>
                            <div class="month month-b">
                                <div class="render render-b"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <form method="POST" action="{{ url('/merchant/appointments-management/save-appointments') }}" enctype="multipart/form-data">
                <div class="col-md-5 text-left">
                    <div class="appointment-for title">

                        @csrf
                        <input type="hidden" name="appointment_start" id="appointment_start">
                        <input type="hidden" name="appointment_end" id="appointment_end">
                        <div class="form-group">
                            <label>Appointment Title</label>
                            <input type="text" class="form-control" name="appointment_title" placeholder="Write title here">
                        </div>
                        <div class="form-group">
                            <label>From</label>
                            <input type="time" class="form-control " name="start_time" placeholder="HH:MM">
                        </div>
                        <div class="form-group">
                            <label>To</label>
                            <input type="time" class="form-control " name="end_time" placeholder="HH:MM">
                        </div>
                        <div class="form-group">
                            <label class="recurring">Recurring Appointment</label>
                            <span class="pull-right">
                                <label class="switch right-click">
                                    <input type="checkbox ">
                                    <span class="slider round"></span>
                                </label>
                            </span>
                        </div>

                        <div class="Jessica-pra appointment">
                            <div class="pro-service Message">
                                <a href="#">
                                    Connect with Product/Service
                                    <img src="{{ asset('public/merchemtAssets/images/arrow_view.png')}}" alt="arrow_view">
                                </a>
                            </div>
                            <span class="mobile-box">
                                <figure>
                                    <img src="{{ asset('public/merchemtAssets/images/mobile-reparing.jpeg')}}" alt="">
                                </figure>
                                <p>Mobile Repairing</p>
                            </span>
                            <span class="mobile-box">
                                <figure>
                                    <img src="{{ asset('public/merchemtAssets/images/laptop-repairing.jpeg')}}" alt="">
                                </figure>
                                <p>Laptop Repairing</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bgcolor">Add</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection
@section('pagejs')



@stop