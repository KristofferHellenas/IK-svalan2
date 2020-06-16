@extends("layouts.app")

@section("content")

<h1>Användare</h1>

<!-- Add member form -->
<form action="/admin" method="POST">
  <div class="row">
    <div class="col">
      <label for="exampleInputEmail1">Förnamn</label>
      <input type="text" class="form-control" placeholder="ex. Johan">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Efternamn</label>
      <input type="text" class="form-control" placeholder="ex. Andersson">
    </div>
  </div>

  <div class="row">
    <div class="col mt-3">
      <label for="exampleInputEmail1">Födelsedag</label>
      <input type="text" class="form-control" placeholder="ex. 1989-03-14">
    </div>
    <div class="col mt-3">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" placeholder="ex. john@tests.com">
    </div>
  </div>

  <div class="row">
    <div class="col mt-3">
      <label for="exampleInputEmail1">Lösenord</label>
      <input type="text" class="form-control" placeholder="Lösenord">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">Förnamn</th>
      <th scope="col">Efternamn</th>
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