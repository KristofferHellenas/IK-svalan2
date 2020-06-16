@extends("layouts.app")

@section("content")

<h1>hej</h1>

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
      <td>{{ $team->activity_id->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection