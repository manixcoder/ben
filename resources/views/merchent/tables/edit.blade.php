@extends('merchent.master')
@section('pageTitle', 'Merchent')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer">
    <div class="dashboard-heading">
        <h3>Edit Table</h3>
    </div>
    <div class="form-box  Customer-journey">
        <div class="row category-mr">
            <div class="generate">
                <form method="POST" action="{{ url('/merchant/product-management/save-product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Table For</label>
                                <input type="name" class="form-control" placeholder="Table name 1">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Average Booking Time (in hours)</label>
                            <div class="form-group">
                                <select class="form-control text-color">
                                    <option>2</option>
                                    <option>s</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4"></div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bgcolor">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script>
</script>
@stop