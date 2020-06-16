@extends('layouts.app')

@section('content')

<h3>Admin</h3>
<p>{{ session('mssg') }}</p>

<!-- Add member form -->
<form action="/admin" method="POST">
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
    <div class="col mt-3">
      <label for="exampleInputEmail1">Birthday</label>
      <input type="text" class="form-control" placeholder="ex. 1989-03-14">
    </div>
    <div class="col mt-3">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" placeholder="ex. john@tests.com">
    </div>
  </div>

  <div class="row">
    <div class="col mt-3">
      <label for="exampleInputEmail1">Password</label>
      <input type="text" class="form-control" placeholder="Password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

<!-- Add team form -->
<form action="/admin" method="POST">
  @csrf
  <div class="row mt-3">
    <div class="col">
      <label for="exampleInputEmail1">Add team</label>
      <input type="text" class="form-control" name="new_team">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Activity ID</label>
      <input type="text" class="form-control" name="new_activity">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">Lag</th>
      <th scope="col">Activity ID</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teams as $team)
    <tr>
      <td>{{ $team->name }}</td>
      <td>{{ $team->activity_id }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection