<div class="form-group">
	<label for="ship_id" class="col-sm-3 control-label">Ship</label>
	<div class="col-sm-9">
		<select name="ship_id" id="ship_id" class="form-control">
			@foreach ($ships as $ship)
				<option value="{{ $ship->id }}">{{ $ship->name }}</option>				
			@endforeach
		</select>
	</div>
</div>
<div class="form-group">
	<label for="departure_time" class="col-sm-3 control-label">Departure Time</label>
	<div class="col-sm-9">
		<input type="datetime" class="form-control datetimepicker" id="departure_time" name="departure_time" value="{{ $schedule->departure_time }}">
	</div>
</div>

<div class="form-group">
	<label for="departure_port" class="col-sm-3 control-label">Departure Port</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" id="departure_port" name="departure_port" value="{{ $schedule->departure_port }}">
	</div>
</div>

<div class="form-group">
	<label for="warehouse" class="col-sm-3 control-label">Warehouse Details</label>
	<div class="col-sm-9">
{{-- 		<input type="text" class="form-control" id="warehouse" name="warehouse" value="{{ $schedule->warehouse }}"> --}}
		<textarea class="form-control" id="warehouse" name="warehouse">{{ $schedule->warehouse }}</textarea>
	</div>
</div>

<div class="form-group">
	<label for="capacity" class="col-sm-3 control-label">Capacity (Weight)</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" id="capacity" name="capacity" value="{{ $schedule->capacity }}">
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-3 col-sm-9">
		<button type="submit" class="btn btn-primary">Save</button>
		<a href="/schedules" class="btn btn-default">Cancel</a>
	</div>
</div>