@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $batch->name }} ( {{ $batch->time }} )</div>

                <div class="panel-body">
                    <div class="student">
                        <table class="table table-hover">
                            <tr>
                                <th>Student Name</th>
                                <th>Status</th>
                            </tr>

                            @forelse( $batch->students as $student)

                                <tr>
                                    <td>
                                        <a href="{{ action("StudentController@show", $student->id) }}">{{ $student->name }}</a>
                                    </td>
                                    <td>
                                        <span class="
                                            @if( 'active' == $student->status )
                                                text-success
                                            @else
                                                text-danger
                                            @endif
                                        ">{{ ucwords($student->status) }}
                                        </span>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <th colspan="3">No Student Yet</th>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
