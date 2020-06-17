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
        <tr>
            <td>{{ Auth::user()->firstname }}</td>
            <td>{{ Auth::user()->lastname}}</td>
            <td>{{ Auth::user()->birthday}}</td>
            <td>{{ Auth::user()->email}}</td>
        </tr>
    </tbody>
    </thead>
</table>
@endsection