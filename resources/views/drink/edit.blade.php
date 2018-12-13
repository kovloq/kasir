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
<form method="POST" action="{{ url("drink",$drink["id"]) }}">
	{{ csrf_field() }}
  {{ method_field("PUT") }}
	<div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" name="name" class="form-control" value="{{ $drink["name"] }}" id="name" placeholder="Nasi Goreng">
	   
  	</div>
  	<div class="form-group">
	    <label for="name">Ready</label>
	    <input type="checkbox" name="is_ready" value="1" {{ ($drink["is_ready"]==1)?"checked":"" }}>
  	</div>
  	<div class="form-group">
	    <label for="price">Price</label>
	    <input type="text" name="price" class="form-control" id="price" value="{{ $drink["price"] }}" placeholder="150000">
	    
  	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection