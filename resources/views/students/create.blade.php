@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register New Student</div>

                <div class="panel-body">
                    {{ Form::open(['action' => "StudentController@store", "method" => "POST"]) }}

                        @include("students.form", ["button" => "Register"])         
              
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
