@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Booking</div>                
                <div class="panel-body">
                    <form method="POST" action="/bookings/{{ $booking->id }}" class="form-horizontal">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                        @include('bookings.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
