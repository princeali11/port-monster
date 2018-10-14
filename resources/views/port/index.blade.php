@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Ports</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="/port/create" class="btn btn-primary">Add New Port</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Ports</div>
                <table class="table">
                	<tr>
	                    <th>id</th>
	                    <th>Name</th>
	                    <th>Location</th>
	                    <th>Actions</th>
                    </tr>
                    @foreach ($ports as $ship)
                    <tr>
                    	<td>{{ $ship->id }}</td>
                    	<td>{{ $ship->name }}</td>
                    	<td>{{ $ship->location }}</td>
                    	<td>
                    		<a href="/port/{{ $ship->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                    		<a href="/port/{{ $ship->id }}/delete" class="btn btn-danger btn-xs">Delete</a>
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
