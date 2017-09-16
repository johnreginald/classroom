@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Batch</div>

                <div class="panel-body">
                    {{ Form::open(['action' => "BatchController@store", "method" => "POST"]) }}

                        @include("batches.form", ["button" => "Add"])         
              
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
