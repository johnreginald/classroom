@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Payment Report</div>

                <div class="panel-body">
                    {{ Form::open(['action' => ["ReportController@store", $student->id], "method" => "POST"]) }}

                        @include("reports.form", ["button" => "Create"])         
              
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
