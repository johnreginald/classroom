<li class="dropdown">
    <a herf="#" class="dropdown-toggle" role="button" id="batch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Batches
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="batch">
        <li><a href="{{ action("BatchController@index") }}">Current Batches</a></li>
        <li><a href="{{ action("BatchController@index") }}?mode=archive">Finished Batches</a></li>
        <li><a href="{{ action("BatchController@create") }}">Create New Batch</a></li>
    </ul>
</li>