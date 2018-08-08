@extends('manager.manager')
@section('edit_profile')
    <h3 class="box-title">Editing {{Auth::User()->name}}'s Profile</h3>
    <form class="form-horizontal" role="form" method="POST" action="/updateprofile">
        {{ csrf_field() }}
    <div class="">
        <div class="white-box">
            <form class="form-horizontal form-material">
                <div class="form-group">
                    <label class="col-md-12">Full Name</label>
                    <div class="col-md-12">
                        <input type="text" value="{{Auth::User()->name}}" name="name" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label for="example-email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" value="{{Auth::User()->email}}" class="form-control form-control-line" name="email" id="example-email"> </div>
                </div>
                <div class="form-group">
                    <div class="pull-right">
                        <button class="btn btn-success"><i class="fa fa-save"></i> Update Profile</button>
                    </div>
                </div>
@endsection
