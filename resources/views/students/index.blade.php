@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Student List</div>

    <div class="panel-body">
        <div class="student">
            
            @forelse( $students as $student )

                <h4>
                    <a href="{{ action("StudentController@show", $student->id) }}">{{ $student->name }}</a>
                </h4>

                <p>{{ $student->batch->name }} ( {{ $student->batch->time }} )</p>

                <p>{{ $student->phone }}</p>

                <a href="{{ action("StudentController@edit", $student->id) }}" class="btn btn-primary">Edit Profile</a>

                <a href="{{ action("ReportController@create", $student->id) }}" class="btn btn-primary">Payment</a>

                @if ( $student != $students->last() )
                    <hr>
                @endif

            @empty
                
                <h3 class="text-center">No Students Yet</h3>
                
            @endforelse
        </div>
    </div>

    <div class="text-center">
        {{ $students->links() }}
    </div>
</div>
@endsection
