@extends('admin.master')
@section('pageTitle', 'Dashboard')
@section('content')
@section('pageCss')
<style></style>
@stop
<div class="add-newuser">
  <p><span>Dashboard</span></p>
</div>
<div class="row">
  <div class="col-md-4 col-sm-4">
    <div class="total-user">
      <p>Total User
        <span class="pull-right view-all"><a href="{{ url('admin/user-management') }}">{{ $user_data }}</a></span>
      </p>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="total-user">
      <p>Total Company
        <span class="pull-right view-all"><a href="{{ url('admin/company-management') }}">{{ $merchent_data }}</a></span>
      </p>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="total-user">
      <p>New Messages
        <span class="pull-right view-all"><a href="#">78</a></span>
      </p>
    </div>
  </div>
  <div class="col-md-12 col-sm-12">
    <h3>Registration Requests
      <span class="pull-right view-all"><a href="{{ url('admin/company-management') }}">View all</a></span>
    </h3>
  </div>
</div>

<div class="table-responsive requests-table">
  <table border="0" class="company-name">
    <tbody>
      <tr>
        <td>
          <p>#NUD5449595</p>
          <h3>Company Name</h3>
          <p>Restaurant Mexican</p>
          <p>2700 Cliffside Drive, Syracuse, 13202</p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">10 Jun 21 | 10:30 am</p>
          <span class="pull-right view-all"><a href="#">View Details</a>
            <button type="submit" class="btn btn-primary">Decline</button>
            <button type="submit" class="btn btn-primary bgcolor">Accept</button>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <p>#NUD5449595</p>
          <h3>Company Name</h3>
          <p>Hotel</p>
          <p>2700 Cliffside Drive, Syracuse, 13202</p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">10 Jun 21 | 10:30 am</p>
          <span class="pull-right view-all"><a href="#">View Details</a>
            <button type="submit" class="btn btn-primary">Decline</button>
            <button type="submit" class="btn btn-primary bgcolor">Accept</button>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <p>#NUD5449595</p>
          <h3>Company Name</h3>
          <p>Restaurant Mexican</p>
          <p>2700 Cliffside Drive, Syracuse, 13202</p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">10 Jun 21 | 10:30 am</p>
          <span class="pull-right view-all"><a href="#">View Details</a>
            <button type="submit" class="btn btn-primary">Decline</button>
            <button type="submit" class="btn btn-primary bgcolor">Accept</button>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <p>#NUD5449595</p>
          <h3>Company Name</h3>
          <p>Hotel</p>
          <p>2700 Cliffside Drive, Syracuse, 13202</p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">10 Jun 21 | 10:30 am</p>
          <span class="pull-right view-all"><a href="#">View Details</a>
            <button type="submit" class="btn btn-primary">Decline</button>
            <button type="submit" class="btn btn-primary bgcolor">Accept</button>
          </span>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection