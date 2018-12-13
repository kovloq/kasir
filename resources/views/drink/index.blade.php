@extends('layouts.app')

@section('content')
<a href="{{ url("drink/create") }}" class="btn btn-primary">Add New</a>
<table class="table">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Ready</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	@foreach($drink as $row)
	<tr>
		<th>{{ $row["name"] }}</th>
		<th>{{ $row["price"] }}</th>
		<th>{{ ($row["is_ready"])?"〇":"✕" }}</th>
		<th><a href="{{ url("drink/".$row["id"]."/edit") }}" class="btn btn-warning">Edit</a></th>
		<th>
			<form method="POST" action="{{ url("drink",$row["id"]) }}">
				{{ csrf_field() }}
				{{ method_field("DELETE") }}
				<input type="submit" value="Delete" class="btn btn-danger">
			</form>
		</th>
	</tr>
	@endforeach
</table>
@endsection