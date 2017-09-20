@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Add New Batch</div>

    <div class="panel-body">
        {{ Form::open(['action' => "BatchController@store", "method" => "POST"]) }}

            @include("batches.form", ["button" => "Add"])         
  
        {{ Form::close() }}
    </div>
</div>
@endsection
