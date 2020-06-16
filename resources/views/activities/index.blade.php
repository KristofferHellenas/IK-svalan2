@extends("layouts.app")

@section("content")

<h1>Aktiviteter</h1>

<!-- Add activities form -->
<form action="/admin/activities" method="POST">
  @csrf
  <div class="row mt-3">
    <div class="col">
      <label for="exampleInputEmail1">Lägg till ny aktivitet</label>
      <input type="text" class="form-control" name="name">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Lägg till</button>
</form>

<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">Aktivitet</th>
      <th scope="col">ID</th>
    </tr>
  </thead>
  <tbody>
    @foreach($activities as $activity)
    <tr>
      <td>{{ $activity->name }}</td>
      <td>{{ $activity->id }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection