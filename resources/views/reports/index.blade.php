@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Report</div>        

                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Student Name</th>
                            <th>Tuition Fee</th>
                            <th>Status</th>
                            <th>Batch</th>
                            <th>Actions</th>
                        </tr>

                       @forelse( $reports as $report )

                            <tr>
                                <td>
                                    <a href="{{ action("StudentController@show", $report->student->id) }}">
                                        {{ $report->student->name }}
                                    </a>
                                </td>
                                <td>{{ $report->fee }}</td>
                                <td>
                                    @if ( "SUBMITTED" === $report->status )
                                        <span class="glyphicon glyphicon-ok-sign text-success" aria-hidden="true"></span>
                                    @else
                                        <span class="glyphicon glyphicon-remove-sign text-danger" aria-hidden="true"></span>
                                    @endif
                                    {{ $report->status }}
                                </td>
                                <td>{{ $report->batch->name }}</td>
                                <td>                                    
                                    {{ Form::open(['action' => ["ReportController@destroy", $report->id], 'method' => "DELETE"]) }}

                                        <a class="tooltips" href="{{ action("ReportController@edit", $report->id) }}" data-placement="top" title="Edit">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>
                                        </a>

                                        <a href="#" onclick="$(this).closest('form').submit();">
                                            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                                        </a>

                                    {{ Form::close() }}                                    
                                </td>
                            </tr>

                        @empty
                            
                            <h3 class="text-center">No Report Yet</h3>
                            
                        @endforelse
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Overall Status</div>

                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Pending Payment :</dt>
                        <dd class="text-danger">{{ number_format($finance['pending']) }} Kyats</dd><br>

                        <dt>Submitted Payment :</dt>
                        <dd class="text-success">{{ number_format($finance['submitted']) }} Kyats</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
