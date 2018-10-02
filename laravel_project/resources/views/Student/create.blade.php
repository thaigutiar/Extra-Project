<h1>Create New Student</h1>
<form action="{{ url('/') }}/student" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>Name : </strong>
		<input type="text" name="name" placeholder="name here..." >
	</div>
	<div>
		<strong>hours per week : </strong>
		<input type="number" name="hours per week" placeholder="Put your hours per week here..." >
	</div>
	<div>
		<strong>Grade : </strong>
		<input type="text" name="address" placeholder="address here..." >
	</div>

	<div>
		<a href="{{ url('/') }}/student">back</a>
		<button type="submit">Create</button>


</div>


	</div>
</form>
