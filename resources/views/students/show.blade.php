@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Student Information - <b>{{ $student->name }}</b></div>

            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt>Name :</dt>
                    <dd>{{ $student->name }}</dd><br>

                    <dt>Batch :</dt>
                    <dd>{{ $student->batch->name }} ( {{ $student->batch->time }} )</dd><br>

                    <dt>Phone :</dt>
                    <dd>{{ $student->phone }}</dd><br>
                    
                    <dt>Gender :</dt>
                    <dd>@if( "m" == $student->gender ) Male @else Female @endif</dd><br>

                    <dt>Date of Birth :</dt>
                    <dd>{{ \Carbon\Carbon::parse($student->dob)->toFormattedDateString() }}</dd><br>
                    
                    <dt>NRC ID :</dt>
                    <dd>{{ $student->nrc }}</dd><br>

                    <dt>Address :</dt>
                    <dd>
                        <p style="word-wrap: break-word;">
                            {{ $student->address }}
                        </p>
                    </dd>

                    <dt>Status :</dt>
                    <dd>
                        <p class="
                            @if( 'active' == $student->status )
                                text-success
                            @else
                                text-danger
                            @endif
                        ">{{ ucwords($student->status) }}</p>
                    </dd>
                </dl>
            </div>

            <div class="panel-footer">
            {{ Form::open(['action' => ["StudentController@destroy", $student->id], "method" => "DELETE"]) }}
                <a class="btn btn-primary" href="{{ action("StudentController@edit", $student->id) }}">Edit Student</a>
                <a href="{{ action("ReportController@create", $student->id) }}" class="btn btn-primary">Payment</a>
                <button class="btn btn-danger">Delete Student</button>
            {{ Form::close() }}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Change Batch</div>

            <div class="panel-body">
                {{ Form::model($student, ['action' => ["StudentController@updateBatch", $student->id], 'method' => "POST"]) }}
                    <div class="form-group">
                        <label for="batch"></label>
                        {{ Form::select('batch_id', \App\Batch::batches(), null, ['placeholder' => "Choose Batch", 'class' => 'form-control']) }}
                    </div>

                    <button class="btn btn-primary">Change</button>
                    
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<table class="table table-striped table-hover table-bordered">
    <tr>
        <th>Batch</th>
        <th>Status</th>
        <th>Date</th>
    </tr>
    @forelse( $student->reports as $report)
        <tr>
            <td>{{ $report->batch->name }} ( {{ $report->batch->time }} )</td>
            <td>
                @if ( "SUBMITTED" === $report->status )
                    <span class="glyphicon glyphicon-ok-sign text-success" aria-hidden="true"></span>
                @else
                    <span class="glyphicon glyphicon-remove-sign text-danger" aria-hidden="true"></span>
                @endif
                {{ $report->status }}
            </td>
            <td>{{ $report->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="2">No Payment Yet</td>
        </tr>
    @endforelse
</table>
@endsection
