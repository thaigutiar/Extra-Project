<!doctype html>
<html>
<h1>Edit Student : {{ $row->student_id }}</h1>
	<form action="{{ url('/') }}/student/{{ $row->student_id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    	<div>
    		<strong>Name : </strong>
    		<input type="text" name="name" value="{{ $row->name }}" placeholder="name here..." >
    	</div>
    	<div>
    		<strong>hours per week : </strong>
    		<input type="hours" name="hours" value="{{ $row->hours }}" placeholder="hours here..." >
    	</div>
    	<div>
    		<strong>grade : </strong>
    		<input type="text" name="grade" value="{{ $row->grade }}" placeholder="grade here..." >
    	</div>
    	<div>
			<a href="{{ url('/') }}/employee">back</a>
			<button type="submit">Update</button>
            
		</div>

	</html>