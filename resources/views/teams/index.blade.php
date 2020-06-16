@extends("layouts.app")

@section("content")

<h1>Lag</h1>

<!-- Add team form -->
<form action="/admin" method="POST">
  @csrf
  <div class="row mt-3">
    <div class="col">
      <label for="exampleInputEmail1">Lägg till nytt lag</label>
      <input type="text" class="form-control" name="new_team">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Activity ID</label>
      <input type="text" class="form-control" name="new_activity">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Lägg till</button>
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
      <td>{{ $team->activity->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection