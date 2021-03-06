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
<form method="POST" action="{{ url("drink") }}">
	{{ csrf_field() }}
	<div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" name="name" class="form-control" id="name" placeholder="Jus Tomat">
	   
  	</div>
  	<div class="form-group">
	    <label for="name">Ready</label>
	    <input type="checkbox" name="is_ready" value="1" >
  	</div>
  	<div class="form-group">
	    <label for="price">Price</label>
	    <input type="text" name="price" class="form-control" id="price" placeholder="10000">
	    
  	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection