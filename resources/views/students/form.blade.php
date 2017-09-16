<div class="form-group">
    <label for="name">Name</label>
    {{ Form::text('name', null, ["class" => "form-control", "autofocus"]) }}
</div>

<div class="form-group">
    <label for="status">Status</label>
    {{ Form::select('status', ['active' => "Active", 'finished' => "Finished"], null, ['placeholder' => "Choose Status", 'class' => 'form-control']) }}
</div>

<div class="form-group">
    <label for="gender">Gender</label>
    {{ Form::select('gender', ['f' => "Female", 'm' => "Male"], null, ['placeholder' => "Choose Gender", 'class' => 'form-control']) }}
</div>

<div class="form-group">
    <label for="dob">Date of Birth</label>
    {{ Form::date('dob', null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="nrc">National Registration Card ID</label>
    {{ Form::text('nrc', null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="address">Address</label>
    {{ Form::textarea('address', null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="phone">Phone Number</label>
    {{ Form::text('phone', null, ["class" => "form-control"]) }}
</div>

<button class="btn btn-success">{{ $button }}</button>