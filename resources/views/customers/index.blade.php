@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Customers</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="/customers/create" class="btn btn-primary">Add New Customer</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Customers</div>                
                <table class="table">
                	<tr>
	                    <th>id</th>
	                    <th>Name</th>
                        <th>Email</th>
                        <th>Contact No.</th>
	                    <th>Company</th>
	                    <th>Actions</th>
                    </tr>
                    @foreach ($customers as $customer)                    	
                    <tr>
                    	<td>{{ $customer->id }}</td>
                    	<td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->contact }}</td>
                    	<td>{{ $customer->company_name }}</td>
                    	<td>
                    		<a href="/customers/{{ $customer->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                    		<a href="/customers/{{ $customer->id }}/edit" class="btn btn-danger btn-xs">Delete</a>
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
