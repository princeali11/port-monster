@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update user details</div>                
                <div class="panel-body">
                    <form method="POST" action="/users/{{ $user->id }}" class="form-horizontal">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                        @include('users.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
