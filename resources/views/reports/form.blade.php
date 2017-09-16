<div class="form-group">
    <label for="batch">Batch</label>
    {{ Form::select('batch_id', \App\Batch::batches(), null, ['placeholder' => "Choose Batch", 'class' => 'form-control']) }}
</div>

<div class="form-group">
    <label for="fee">Tuition Fee</label>
    {{ Form::select('fee', ["100000" => "100,000", "150000" => "150,000"], null, ['placeholder' => "Choose Fee", "class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="batch">Payment Status</label>
    {{ Form::select('status', ['PENDING' => "Pending", "SUBMITTED" => "Submitted"], null, ['placeholder' => "Choose Payment Status", 'class' => 'form-control']) }}
</div>

<button class="btn btn-primary">{{ $button }}</button>
