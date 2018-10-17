@extends('layouts.admin')

@section('title-content', 'ADMIN DASHBOARD')

@section('admin-content')

    <div class="row" style="margin-top: 2%">
        <div class="col-md-2 dash-box">
            <i class="fa fa-3x fa-user"></i><br>
            <hr>
            <span>Users</span><br>
            <span>310</span>
        </div>
        <div class="col-md-2 col-md-offset-1 dash-box">
            <i class="fa fa-3x fa-search"></i><br>
            <hr>
            <span>Search</span><br>
            <span>38</span>
        </div>
        <div class="col-md-2 col-md-offset-1 dash-box">
            <i class="fa fa-3x fa-home"></i><br>
            <hr>
            <span>News</span><br>
            <span>105</span>
        </div>
        <div class="col-md-2 col-md-offset-1 dash-box">
            <i class="fa fa-3x fa-bars"></i><br>
            <hr>
            <span>Articles</span><br>
            <span>520</span>
        </div>
    </div>

@endsection