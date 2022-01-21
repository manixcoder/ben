@extends('admin.master')
@section('pageTitle', 'Create Advertising')
@section('content')
<div class="add-newuser">
    <p>
        <span class="user-color">Advertising</span>
        <span>>Add New Advertising Banner</span>
    </p>
</div>
<div class="user-name">
    <div class="row">
        <form method="POST" action="{{ url('/admin/advertising-management/save-advertising') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 col-sm-12">
                <div class="upload-file">
                    <div class="form-group">
                        <span>
                            <input type="file" name="ad_image" class="form-control choise-file" placeholder="Upload advertisement banner">
                            <figure>
                                <img src="{{ asset('public/adminAssets/images/upload.png')}}" alt="upload">
                            </figure>
                            Upload advertisement banner
                        </span>
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Publish</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection