@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new schedule</div>                
                <div class="panel-body">
                    <form method="POST" action="/schedules" class="form-horizontal">
                    {{ csrf_field() }}
                        @include('schedules.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
