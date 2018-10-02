<!-- this file location is /resources/views/profile/index.blade.php  -->
<h1>Student List</h1>
<table border="1">
	<tr> 
		<th>Student_id  </th>
		<th>name : </th>
		<th>Hours per week : </th>
		<th>Grade : </th>
		<th>Action : </th>
	</tr>
	@foreach($table as $row)
	<tr>
		<td>{{ $row->Student_id }}</td>
		<td>{{ $row->name }}</td>
		<td>{{ $row->hours }}</td>
		<td>{{ $row->Grade }}</td>
		<td>{{ $row->Action }}</td>

		<td>
			<a href="{{ url('/') }}/student/{{ $row->student_id }}">View</a>
			<a href="{{ url('/') }}/student/{{ $row->student_id }}/edit">Edit</a>
			<a href="{{ url('/') }}/student/{{ $row->student_id }}/delete">delete</a>


		</td>
		
	</tr>
	@endforeach
</table>

<div style="display:none;">
		<a href="javascript:void(0)" onclick="onDelete( {{ $row->student_id }} )">
Delete
</a>
	<form action="#" method="POST" id="form_delete" >
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
	<script>
	function onDelete(id){
		//--THIS FUNCTION IS USED FOR SUBMIT FORM BY script--//

		//GET FORM BY ID
		var form = document.getElementById("form_delete");

		//CHANGE ACTION TO SPECIFY ID
		form.action = "{{ url('/') }}/student/"+id;

		//SUBMIT
		var want_to_delete = confirm('Are you sure to delete this studnet?');
		if(want_to_delete){
			form.submit();
		}
	}
	</script>
</div>