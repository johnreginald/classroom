@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Batch List</div>

                <div class="panel-body">
                    <div class="batch">
                        @forelse( $batches as $batch )

                            <h4>{{ $batch->name }} ( {{ $batch->time }} )</h4>

                            <p class="{{ ( "active" === $batch->status) ? "text-success" : "text-danger" }}">
                                {{ ucfirst( $batch->status ) }}
                            </p>

                            <p>{{ $batch->students->count() }} Students in This Class</p>

                            <a class="btn btn-primary" href="{{ action("BatchController@show", $batch->id) }}">View All Students</a>

                            <a class="btn btn-primary" href="{{ action("BatchController@edit", $batch->id) }}">Edit</a>

                            @if ( $batch != $batches->last() )
                                <hr>
                            @endif

                        @empty

                            <h3 class="text-center">No batchs Yet</h3>

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
