@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Create Payment Report</div>

    <div class="panel-body">
        {{ Form::open(['action' => ["ReportController@store", $student->id], "method" => "POST"]) }}

            @include("reports.form", ["button" => "Create"])         
  
        {{ Form::close() }}
    </div>
</div>
@endsection
