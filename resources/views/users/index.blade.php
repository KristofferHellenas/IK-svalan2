@extends("layouts.app")

@section("content")

<a href="{{ route('home') }}">&laquo; Tillbaka</a>
<h1>Skapa ny användare</h1>

<!-- Add member form -->
<form method="POST" action="/admin/users">
  @csrf
  <div class="row">
    <div class="col">
      <label for="exampleInputEmail1">Förnamn</label>
      <input type="text" class="form-control" placeholder="ex. John" name="first_name">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Efternamn</label>
      <input type="text" class="form-control" placeholder="ex. Smith" name="last_name">
    </div>
  </div>

  <div class="row">
    <div class="col mt-3">
      <label for="exampleInputEmail1">Födelsedag</label>
      <input type="date" class="form-control" placeholder="ex. 1989-03-14" name="birthday">
    </div>
    <div class="col mt-3">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" placeholder="ex. john@tests.com" name="email">
    </div>
  </div>

  <div class="row">
    <div class="col mt-3">
      <label for="exampleInputEmail1">Lösenord</label>
      <input type="password" class="form-control" placeholder="Lösenord" name="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Lägg till</button>
</form>


<h2>Ekonomi</h2>
<p>{{ $paidcount }} Betalande medlemmar</p>
<p>{{ $paidyouth }} Betalande ungdomar</p>
<p>{{ $paidadult }} Betalande vuxna</p>
<p>Årlig inkomst: {{ $sum }}Kr</p>
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
      <td><a href="/admin/users/{{$user->id}}">{{ $user->firstname }}</a></td>
      <td>{{ $user->lastname }}</td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection