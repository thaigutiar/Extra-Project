@forelse($table_student as $row)
	<h1>Employee : {{ $row->student_id }} </h1>
	<div>
		<strong>name : </strong>
		<span>{{ $row->name }} </span>
	</div>
	<div>
		<strong>hours oer week : </strong>
		<span>{{ $row->hours oer week }}</span>
	</div>
	<div>
		<strong>Grade : </strong>
		<span>{{ $row->Grade }}</span>
	</div>
	<div><a href="{{ url('/') }}/student">back to student</a></div>
