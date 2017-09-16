@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Student - {{ $student->name }}</div>

                <div class="panel-body">
                    {{ Form::model($student,['action' => ["StudentController@update", $student->id], "method" => "PUT"]) }}

                        @include("students.form", ["button" => "Update"])         
              
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
