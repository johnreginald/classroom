@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Register New Student</div>

    <div class="panel-body">
        {{ Form::open(['action' => "StudentController@store", "method" => "POST"]) }}

            @include("students.form", ["button" => "Register"])         
  
        {{ Form::close() }}
    </div>
</div>
@endsection
