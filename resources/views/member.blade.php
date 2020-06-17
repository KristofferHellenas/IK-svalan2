@extends('layouts.app')

@section('content')
<h1>Välkommen medlem!</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Förnamn</th>
            <th scope="col">Efternamn</th>
            <th scope="col">Födelsedag</th>
            <th scope="col">Email</th>
        </tr>
    <tbody>
        <tr>
            <td>{{ Auth::user()->firstname }}</td>
            <td>{{ Auth::user()->lastname}}</td>
            <td>{{ Auth::user()->birthday}}</td>
            <td>{{ Auth::user()->email}}</td>
        </tr>
    </tbody>
    </thead>
</table>

<form action="{{ route('users.update', Auth::user()->id) }}" method="post">
    <!-- {{-- @csrf = Cross sharing Resource Forgery --}} -->
    @csrf 
    @method('patch')
    <label for="email">Ny mail:</label>
    <input type="text" name="email" value="{{ Auth::user()->email }}">
    <input type="submit" value="Byt Mail">
</form>

<h3 class="mt-3">Mina lag</h3>
@foreach (auth()->user()->teams as $team) 
<table>
  <h3>{{ $team->activity->name }}</h3>
  <h4>{{ $team-> name}}</h4>
  @foreach ($team->users as $user)
  <tr>
    <td>{{ $user->firstname }}</td>
  </tr>
  @endforeach
<table>
</form>
@endforeach
@endsection