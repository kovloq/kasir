@extends('layouts.app')

@section('content')
<a href="{{ url("table/create") }}" class="btn btn-primary">Add New</a>
<table class="table">
	<tr>
		<th>Nomor</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	@foreach($table as $row)
	<tr>
		<td>{{ $row["nomor"] }}</td>
		<td><a href="{{ url("table/".$row["id"]."/edit") }}" class="btn btn-warning">Edit</a></td>
		<td>
			<form method="POST" action="{{ url("table",$row["id"]) }}">
				{{ csrf_field() }}
				{{ method_field("DELETE") }}
				<input type="submit" value="Delete" class="btn btn-danger">
			</form>
		</td>
	</tr>
	@endforeach
</table>
@endsection