<!-- this file location is /resources/views/profile/show.blade.php  -->
<html>
<h1>Profile : {{ $id }}</h1>
<table>
	<tr>
		<th>Name : </th>
		<td>{{ $name }}</td>
	</tr>
	<tr>
		<th>Last Name : </th>
		<td>{{ $lastname }}</td>
	</tr>
</table>
<html>