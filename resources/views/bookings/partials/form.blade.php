<div class="form-group">
	<label for="shipping_date">Shipping Date:</label>
	<input type="text" class="form-control datetimepicker" required name="shipping_date" value="{!! old('shipping_date', optional($booking)->shipping_date) !!}">
</div>
<div class="row">
	<div class="form-group col-md-6">
		<label for="depaturePort">Departure port:</label>
		<select class="form-control" required name="depature_port" id="depaturePort">
			<option></option>
			@foreach($ports as $port)
				<option value="{{ $port->id }}"
						{!! (old('depature_port', optional($booking)->depature_port) == $port->id) ? 'selected' : ''!!}
				>{{ $port->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-md-6">
		<label for="arrival_port">Arrival port:</label>
		<select class="form-control" required name="arrival_port" id="arrival_port">
			<option></option>
			@foreach($ports as $port)
				<option value="{{ $port->id }}"
						{!! (old('arrival_port', optional($booking)->arrival_port) == $port->id) ? 'selected' : ''!!}>{{ $port->name }}</option>
			@endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label for="weight">Shipping Weight (KG):</label>
	<input type="text" class="form-control" required name="weight" value="{!! old('weight', optional($booking)->weight) !!}">
</div>
<div class="form-group">
	<label for="details">Shipping Details</label>
	<textarea class="form-control" id="details" rows="3" name="details" value="">{!! old('details', optional($booking)->details) !!}</textarea>
</div>

<div class="col-md-12">
	<h3>Cost and status</h3>
	<hr>
</div>

<div class="row">
	<div class="form-group col-md-6">
		<label for="approval_status">Approval Status</label>
		<select class="form-control"
				{{ auth()->user()->user_type != 'staff' ? 'disabled': ''}}
				name="approval_status" id="approval_status">
			<option></option>
			<option {!! (old('approval_status', optional($booking)->approval_status) === 'Approved') ? 'selected' : ''!!}>Approved</option>
			<option {!! (old('approval_status', optional($booking)->approval_status) === 'Rejected') ? 'selected' : ''!!}>Rejected</option>
			<option {!! (old('approval_status', optional($booking)->approval_status) === 'Delivered') ? 'selected' : ''!!}>Delivered</option>
			<option {!! (old('approval_status', optional($booking)->approval_status) === 'In progress') ? 'selected' : ''!!}>In progress</option>
		</select>
	</div>
	<div class="form-group col-md-6">
		<label for="departure_time">Container ID</label>
		<select class="form-control"
				{{ auth()->user()->user_type != 'staff' ? 'disabled': ''}}
				name="container_id" id="container_id">
			<option></option>
			@foreach($containers as $container)
				<option value="{{ $container->id }}"
						{!! (old('container_id', optional($booking)->container_id) == $container->id) ? 'selected' : ''!!} >Container ({{ $container->id }})</option>
			@endforeach
		</select>
	</div>
</div>

<input type="submit" class="btn btn-primary" value="Update">