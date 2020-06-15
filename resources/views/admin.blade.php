@extends('layouts.app')

@section('content')


@foreach($teams as $team)
<p>{{ $team->name }}</p>
@endforeach


<h3>Admin</h3>

<form>
  <div class="row">
    <div class="col">
      <label for="exampleInputEmail1">First name</label>
      <input type="text" class="form-control" placeholder="ex. John">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Last name</label>
      <input type="text" class="form-control" placeholder="ex. Smith">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputEmail1">Birthday</label>
      <input type="text" class="form-control" placeholder="ex. 1989-03-14">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" placeholder="ex. john@tests.com">
    </div>
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputEmail1">Password</label>
      <input type="text" class="form-control" placeholder="Password">
    </div>
  </div>
</form>

@endsection