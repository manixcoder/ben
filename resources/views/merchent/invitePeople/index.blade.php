@extends('merchent.master')
@section('pageTitle', 'InvitePeople')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="add-newoffer">
    <div class="pra-sec">
        <p>Invite People</p>
    </div>
    <div class="form-box ">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="generate">
                    <form>
                        <h3>Recipient Info</h3>
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Send Invitation</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="code-img">
                    <figure>
                        <img src="{{ asset('public/merchemtAssets/images/QR-CODE (1).png')}}" alt="QR-CODE (1)">
                    </figure>
                    <p>
                        <span class="pull-center">
                            <a href="#">
                                Share
                                <img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="share" width="15px">
                            </a>
                        </span>
                    </p>
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