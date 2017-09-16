<li class="dropdown">
    <a herf="#" class="dropdown-toggle" role="button" id="students" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Students
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="students">
        <li><a href="{{ action("StudentController@index") }}">Students</a></li>
        <li><a href="{{ action("StudentController@create") }}">Register New Student</a></li>
    </ul>
</li>