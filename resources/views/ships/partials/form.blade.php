<div class="form-group">
	<label for="name" class="col-sm-2 control-label">Name</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="name" id="name" placeholder="Ship name" value="{{ $ship->name }}">
	</div>
</div>
<div class="form-group">
	<label for="reg_no" class="col-sm-2 control-label">Reg No</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="reg_no" name="reg_no" placeholder="Registration number" value="{{ $ship->reg_no }}">
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Save</button>
		<a href="/ships" class="btn btn-default">Cancel</a>
	</div>
</div>