<!-- this file location is /resources/views/profile/index.blade.php  -->
<h1>All Profile</h1>
<table border="1">
	<tr>
		<th>Studentid  </th>
		<th>name : </th>
		<th>Hours per week : </th>
		<th>Grade : </th>
		<th>Action : </th>
	</tr>
	@foreach($table as $row)
	<tr>
		<td>{{ $row->Studentid }}</td>
		<td>{{ $row->name }}</td>
		<td>{{ $row->hours }}</td>
		<td>{{ $row->Grade }}</td>
		<td>{{ $row->Action }}</td>
		
	</tr>
	@endforeach
</table>
