<div class="form-group">
	<label for="name" class="col-sm-2 control-label">Name</label>
	<div class="col-sm-10">
		<input type="text"
			   class="form-control"
			   name="name"
			   id="name"
			   placeholder="Port name"
			   value="{!! old('name', optional($data)->name) !!}">
	</div>
</div>
<div class="form-group">
	<label for="location" class="col-sm-2 control-label">Location</label>
	<div class="col-sm-10">
		<input type="text"
			   class="form-control"
			   id="location"
			   name="location"
			   placeholder="Port Location"
			   value="{!! old('location', optional($data)->location) !!}">
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Save</button>
		<a href="/port" class="btn btn-default">Cancel</a>
	</div>
</div>