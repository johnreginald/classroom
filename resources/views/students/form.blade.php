<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="control-label">Name</label>
    {{ Form::text('name', null, ["class" => "form-control", "autofocus"]) }}
    <span class="help-block">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
    <label for="status" class="control-label">Status</label>
    {{ Form::select('status', ['active' => "Active", 'finished' => "Finished"], null, ['placeholder' => "Choose Status", 'class' => 'form-control']) }}
    <span class="help-block">{{ $errors->first('status') }}</span>
</div>

<div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
    <label for="gender" class="control-label">Gender</label>
    {{ Form::select('gender', ['female' => "Female", 'male' => "Male"], null, ['placeholder' => "Choose Gender", 'class' => 'form-control']) }}
    <span class="help-block">{{ $errors->first('gender') }}</span>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    <label for="address" class="control-label">Address</label>
    {{ Form::textarea('address', null, ["class" => "form-control"]) }}
    <span class="help-block">{{ $errors->first('address') }}</span>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="control-label">Phone Number</label>
    {{ Form::text('phone', null, ["class" => "form-control"]) }}
    <span class="help-block">{{ $errors->first('phone') }}</span>
</div>

<button class="btn btn-success">{{ $button }}</button>