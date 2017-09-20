<div class="form-group">
    <label for="name">Name</label>
    {{ Form::text('name', null, ["class" => "form-control", "autofocus"]) }}
</div>

<div class="form-group">
    <label for="time">Time</label>
    {{ Form::text('time', null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="status">Status</label>
    {{ Form::select('status', ["active" => "Active", "finished" => "Finished"], null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="started_at">Class Start Date</label>
    {{ Form::date('started_at', null, ["class" => "form-control"]) }}
</div>

<button class="btn btn-success">{{ $button }}</button>