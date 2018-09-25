@forelse($table_employee as $row)
	<h1>Employee : {{ $row->employee_id }} </h1>
	<div>
		<strong>position_name : </strong>
		<span>{{ $row->position_name }}</span>
	</div>
	<div><a href="{{ url('/') }}/position">back to position</a></div>
@empty
	<div>This Employee "id" does not exist</div>
@endforelse
