@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Edit Batch - {{ $batch->name }}</div>

    <div class="panel-body">
        {{ Form::model($batch,['action' => ["BatchController@update", $batch->id], "method" => "PUT"]) }}

            @include("batches.form", ["button" => "Update"])         
  
        {{ Form::close() }}
    </div>
</div>
@endsection
