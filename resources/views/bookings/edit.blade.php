@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Update shipping Request</h3>
            <hr>
        </div>
        <div class="col-md-12">
            <form action="/bookings/{{ $booking->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                @include('bookings.partials.form')


            </form>
        </div>
    </div>
</div>
@endsection
