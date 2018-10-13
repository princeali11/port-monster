
<div class="form-group">
	<label for="name" class="col-sm-3 control-label">Customer</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" name="name" id="name" value="{{ $customer->name }}">
	</div>
</div>

<div class="form-group">
	<label for="company_name" class="col-sm-3 control-label">Email</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" name="email" id="email" value="{{ $customer->email }}">
	</div>
</div>

<div class="form-group">
	<label for="contact" class="col-sm-3 control-label">Contact</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" name="contact" id="contact" value="{{ $customer->contact }}">
	</div>
</div>

<div class="form-group">
	<label for="company_name" class="col-sm-3 control-label">Company Name</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" name="company_name" id="company_name" value="{{ $customer->company_name }}">
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-3 col-sm-9">
		<button type="submit" class="btn btn-primary">Save</button>
		<a href="/customers" class="btn btn-default">Cancel</a>
	</div>
</div>