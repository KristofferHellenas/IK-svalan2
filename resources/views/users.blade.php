@extends('layouts.app')

@section('content')

<h3>Admin</h3>
<p>{{ session('mssg') }}</p>

<!-- Add team form -->
<form action="/admin" method="POST">
  @csrf
  <div class="row">
    <div class="col">
      <label for="exampleInputEmail1">Add team</label>
      <input type="text" class="form-control" name="new_team">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Activity ID</label>
      <input type="text" class="form-control" name="new_activity">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{ $user->firstname }}</td>
      <td>{{ $user->lastname }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection 