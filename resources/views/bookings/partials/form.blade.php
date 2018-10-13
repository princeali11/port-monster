<div class="form-group">
	<label for="weight" class="col-sm-3 control-label">Customer</label>
	<div class="col-sm-9">
		<select name="customer_id" id="customer_id" class="form-control">
			@foreach ($customers as $customer)
				<option value="{{ $customer->id }}">{{ $customer->name }}</option>
			@endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label for="weight" class="col-sm-3 control-label">Weight</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" name="weight" id="weight" value="{{ $booking->weight }}">
	</div>
</div>

<div class="form-group">
	<label for="quantity" class="col-sm-3 control-label">Quantity</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" name="quantity" id="quantity" value="{{ $booking->quantity }}">
	</div>
</div>

@if (Auth::user()->isStaff())
<div class="form-group">
	<label for="status" class="col-sm-3 control-label">Status</label>
	<div class="col-sm-9">
		<select name="status" class="form-control">
			<option value="En route to the destination">En route to the destination</option>
			<option value="Reached the destination">Reached the destination</option>
		</select>
	</div>
</div>
@endif
<div class="form-group">
	<div class="col-sm-offset-3 col-sm-9">
		<button type="submit" class="btn btn-primary">Save</button>
		<a href="/bookings" class="btn btn-default">Cancel</a>
	</div>
</div>