@extends('layouts.app')

@section('content')

<h3>Admin</h3>
<p>{{ session('mssg') }}</p>

<h3><a href="/admin/users">Användare</a></h3>
<h3><a href="/admin/teams">Lag</a></h3>
<h3><a href="/admin/activities">Aktiviteter</a></h3>

@endsection