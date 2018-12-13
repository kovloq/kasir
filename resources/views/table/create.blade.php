@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url("table") }}">
	{{ csrf_field() }}
	<div class="form-group">
	    <label for="nomor">Table Number</label>
	    <input type="text" name="nomor" class="form-control" id="nomor" placeholder="01">
  	</div>
  	<input type="submit" class="btn btn-primary" value="submit"/>
</form>
@endsection