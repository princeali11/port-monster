@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Ships</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="/ships/create" class="btn btn-primary">Add New Ship</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Ships</div>                
                <table class="table">
                	<tr>
	                    <th>id</th>
	                    <th>Name</th>
	                    <th>Reg No.</th>
	                    <th>Actions</th>
                    </tr>
                    @foreach ($ships as $ship)                    	
                    <tr>
                    	<td>{{ $ship->id }}</td>
                    	<td>{{ $ship->name }}</td>
                    	<td>{{ $ship->reg_no }}</td>
                    	<td>
                    		<a href="/ships/{{ $ship->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                    		<a href="/ships/{{ $ship->id }}/edit" class="btn btn-danger btn-xs">Delete</a>
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
