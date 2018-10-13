@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Schedule</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="/schedules/create" class="btn btn-primary">Add New Schedule</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Schedules</div>                
                <table class="table">
                	<tr>
	                    <th>id</th>
	                    <th>Ship Name</th>
                        <th>Departure Time</th>
                        <th>Departure Port</th>
	                    <th>Capacity</th>
	                    <th>Actions</th>
                    </tr>
                    @foreach ($schedules as $schedule)                    	
                    <tr>
                    	<td>{{ $schedule->id }}</td>
                    	<td>{{ $schedule->ship->name }}</td>
                        <td>{{ $schedule->departure_time->format('jS \\of F Y h:i:s A') }}</td>
                        <td>{{ $schedule->departure_port }}</td>
                    	<td>{{ $schedule->capacity }}</td>
                    	<td>
                    		<a href="/schedules/{{ $schedule->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                            <a href="/schedules/{{ $schedule->id }}/edit" class="btn btn-danger btn-xs">Delete</a>
                    		
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
