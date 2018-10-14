@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Container</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="/container/create" class="btn btn-primary">Add New Container</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Container</div>
                <table class="table">
                	<tr>
	                    <th>id</th>
	                    <th>Container Size</th>
	                    <th>Actions</th>
                    </tr>
                    @foreach ($containers as $container)
                    <tr>
                    	<td>{{ $container->id }}</td>
                    	<td>{{ $container->size }}</td>
                    	<td>
                    		<a href="/container/{{ $container->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                            <a href="/container/{{ $container->id }}/delete" class="btn btn-danger btn-xs">Delete</a>
                    		
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
