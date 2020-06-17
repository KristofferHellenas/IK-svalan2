@extends('layouts.app')

@section('content')
<h1>Välkommen!</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Förnamn</th>
            <th scope="col">Efternamn</th>
            <th scope="col">Födelsedag</th>
            <th scope="col">Email</th>
        </tr>
    <tbody>
        @foreach($user as $user)
        <tr>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname}}</td>
            <td>{{ $user->birthday}}</td>
            <td>{{ $user->email}}</td>
        </tr>
        @endforeach
    </tbody>
    </thead>
</table>
@endsection