<div class="form-group row">
	<label for="name" class="col-md-2 col-form-label form-label">Full Name</label>
	<div class="col-md-10">
		<input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" minlength="2" required>
		@if ($errors->has('name'))
			<small class="text-danger">{{$errors->first('name')}}</small>
        @endif
    </div>
</div>

<div class="form-group row">
	<label for="gender" class="col-md-2 col-form-label form-label">Gender</label>
	<div class="col-md-10">
		<div class="form-check form-check-inline">
		 	<input type="radio" name="gender" value="m" id="male" class="form-check-input">
		 	<label for="male" class="form-check-label">Male</label>
		</div>
		<div class="form-check form-check-inline">
		 	<input type="radio" name="gender" value="f" id="female" class="form-check-input">
		 	<label for="female" class="form-check-label">Female</label>
		</div>
		<div>
			@if ($errors->has('gender'))
				<small class="text-danger">{{$errors->first('gender')}}</small>
	        @endif
	        <span class="gender-error-placement"></span>
		</div>
	</div>
</div>

<div class="form-group row">
	<label for="phone" class="col-md-2 col-form-label form-label">Phone</label>
	<div class="col-md-10">
		<input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
		@if ($errors->has('phone'))
			<small class="text-danger">{{$errors->first('phone')}}</small>
        @endif
    </div>
</div>

<div class="form-group row">
	<label for="email" class="col-md-2 col-form-label form-label">Email</label>
	<div class="col-md-10">
		<input type="email" name="email" class="form-control" id="email" placeholder="Enter email address">
		@if ($errors->has('email'))
			<small class="text-danger">{{$errors->first('email')}}</small>
        @endif
    </div>
</div>

<div class="form-group row">
	<label for="email" class="col-md-2 col-form-label form-label">Preferred contact</label>
	<div class="col-md-10">
		<select name="preferredContact" id="preferredContact" class="form-control">
			<option value="">-- Select Preferred Contact --</option>
			<option value="none">None</option>
			<option value="email">Email</option>
			<option value="phone">Phone</option>
		</select>
		@if ($errors->has('preferredContact'))
			<small class="text-danger">{{$errors->first('preferredContact')}}</small>
        @endif
    </div>
</div>



<div class="form-group row">
	<label for="address" class="col-md-2 col-form-label form-label">Address</label>
	<div class="col-md-10">
		<input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
		@if ($errors->has('address'))
			<small class="text-danger">{{$errors->first('address')}}</small>
        @endif
    </div>
</div>

<div class="form-group row">
	<label for="nationality" class="col-md-2 col-form-label form-label">Nationality</label>
	<div class="col-md-10">
		<input type="text" name="nationality" class="form-control" id="nationality" placeholder="Enter nationality">
		@if ($errors->has('nationality'))
			<small class="text-danger">{{$errors->first('nationality')}}</small>
        @endif
    </div>
</div>

<div class="form-group row">
	<label for="dob" class="col-md-2 col-form-label form-label">Date of Birth</label>
	<div class="col-md-10">
		<input type="date" name="dob" class="form-control" id="dob" placeholder="Enter date of birth">
		@if ($errors->has('dob'))
			<small class="text-danger">{{$errors->first('dob')}}</small>
        @endif
    </div>
</div>

<div class="form-group row">
	<label for="education" class="col-md-2 col-form-label form-label">Education</label>
	<div class="col-md-10">
		<select name="education" id="education" class="form-control" aria-describedby="educationHelp">
			<option value="">-- Select Education --</option>
			<option value="intermediate">Intermediate Level</option>
			<option value="bachelor">Bachelor Degree</option>
			<option value="master">Master Degree</option>
		</select>
		<small id="educationHelp" class="form-text text-muted">Please select your passed level.</small>
		@if ($errors->has('education'))
			<small class="text-danger">{{$errors->first('education')}}</small>
        @endif
        <span class="education-error-placement"></span>
    </div>
</div>

<div class="form-group col">
	<input type="submit" value="Create" class="btn btn-primary float-right">
</div>