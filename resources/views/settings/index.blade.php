@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">

                <div class="panel-body">
                    <h2>
                        {{ $user->name }}
                    </h2>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>                
                <div class="panel-body">
                    <form method="POST" action="/settings/updatepass" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="old_password" class="col-sm-3 control-label">Old Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="old_password" id="old_password" value="">
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="new_password" class="col-sm-3 control-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="new_password" id="new_password" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password" class="col-sm-3 control-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Update</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
