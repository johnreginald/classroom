<div class="list-group">
	<a href="{{ url('/') }}" class="list-group-item active">Home</a>
	
	<!-- Students -->
	<a href="{{ action('StudentController@index') }}" class="list-group-item">Students</a>
	<a href="{{ action('StudentController@create') }}" class="list-group-item">Register New Student</a>

	<!-- Batches -->
	<a href="{{ action('BatchController@index') }}" class="list-group-item">Batches</a>
	<a href="{{ action('BatchController@create') }}" class="list-group-item">New Batch</a>

	<!-- Report -->
	<a href="{{ action('ReportController@index') }}" class="list-group-item">Report</a>
	
</div>