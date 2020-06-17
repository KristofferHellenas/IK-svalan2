@extends("layouts.app")

@section("content")

<h1>Användare</h1>

<!-- Add member form -->
<form  method="POST" action="/admin/users">
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
      <input type="text" class="form-control" placeholder="ex. 1989-03-14" name="birthday">
    </div>
    <div class="col mt-3">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" placeholder="ex. john@tests.com" name="email">
    </div>
  </div>

  <div class="row">
    <div class="col mt-3">
      <label for="exampleInputEmail1">Lösenord</label>
      <input type="text" class="form-control" placeholder="Lösenord" name="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Lägg till</button>
</form>

<!-- Change member form -->
<form action="/admin/users" method="POST">
    @csrf 
    @method('put')
  <div class="row">
    <div class="col mt-3">
      <label for="firstname">Förnamn</label>
      <input type="text" class="form-control" name="firstname" value="">
    </div>
    <div class="col mt-3">
      <label for="lastname">Efternamn</label>
      <input type="text" class="form-control" name="lastname" value="">
    </div>
  </div>
  <div class="row">
    <div class="col mt-3">
      <label for="birthday">Födelsedag</label>
      <input type="date" class="form-control" name="birthday" value="">
    </div>
    <div class="col mt-3">
      <label for="country">Email</label>
      <input type="email" class="form-control" name="email" value="">
    </div>
  </div>
    <button type="submit" class="btn btn-primary mt-3">Ändra</button>
</form>

<p>{{ $paidcount }} Betalande medlemmar</p>
<p>{{ $paidyouth }} Betalande ungdomar</p>
<p>{{ $paidadult }} Betalande vuxna</p>
<p>{{ $sum }}Kr</p>
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