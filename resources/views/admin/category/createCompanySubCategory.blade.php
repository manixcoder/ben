@extends('admin.master')
@section('pageTitle', 'Comapany Sub Category')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">
            Comapany Sub Category
        </span>
        <span>&gt;Add New Sub Category</span>
    </p>
</div>
<div class="user-name">
    <div class="row">
        @php
        $categorydata = DB::table('categories')->where('c_type', '2')->where('parent_id', '0')->get();
        @endphp
        <form method="POST" action="{{ url('/admin/category-management/save-sub-categary') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Comapany Category</label>
                    <select name="parent" class="form-control @error('parent') has-danger @enderror">
                        <option value="" selected>Select Category</option>
                        @foreach($categorydata as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('parent')
                    <small class="form-control-feedback">{{ $errors->first('parent') }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Comapany Sub Category</label>
                    <input type="text" name="name" class="form-control @error('name') has-danger @enderror" value="{{ old('name') }}" placeholder="Comapany Sub Category">
                    @error('name')
                    <small class="form-control-feedback">{{ $errors->first('name') }}</small>
                    @enderror
                </div>
            </div>

            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <a href="http://localhost/benifitme/admin/category-management" class="btn btn-primary">Cancel</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop