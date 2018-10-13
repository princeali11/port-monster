@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Bookings</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="/bookings/create" class="btn btn-primary">Make New Booking</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Bookings</div>                
                <table class="table">
                	<tr>
	                    <th>Id</th>
                        <th>Request Date</th>
                        <th>Depature Port</th>
                        <th>Arrival Port</th>
                        <th>Status</th>
	                    <th>Actions</th>
                    </tr>
                    @foreach ($bookings as $booking)                    	
                    <tr>
                    	<td>{{ $booking->id }}</td>
                    	<td>{{ $booking->customer->name }}</td>
                        <td>{{ $booking->schedule->departure_time->format('jS \\of F Y h:i:s A') }}</td>
                        <td>{{ $booking->weight }}</td>
                    	<td>{{ $booking->quantity }}</td>
                    	<td>
                            <a href="/bookings/{{ $booking->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                    		<a href="/bookings/{{ $booking->id }}" class="btn btn-primary btn-xs">View Booking</a>
                    		<a href="/bookings/{{ $booking->id }}/edit" class="btn btn-danger btn-xs">Delete</a>
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
