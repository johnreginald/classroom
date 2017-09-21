<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="control-label">Name</label>
    {{ Form::text('name', null, ["class" => "form-control", "autofocus"]) }}
    <span class="help-block">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
    <label for="time" class="control-label">Time</label>
    {{ Form::text('time', null, ["class" => "form-control"]) }}
    <span class="help-block">{{ $errors->first('time') }}</span>
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
    <label for="status" class="control-label">Status</label>
    {{ Form::select('status', ["active" => "Active", "finished" => "Finished"], null, ["class" => "form-control"]) }}
    <span class="help-block">{{ $errors->first('status') }}</span>
</div>

<div class="form-group {{ $errors->has('started_at') ? 'has-error' : '' }}">
    <label for="started_at" class="control-label">Class Start Date</label>
    {{ Form::date('started_at', null, ["class" => "form-control"]) }}
    <span class="help-block">{{ $errors->first('started_at') }}</span>
</div>

<button class="btn btn-success">{{ $button }}</button>