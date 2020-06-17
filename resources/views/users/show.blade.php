@extends('layouts.app')

@section('content')

@isset($user)
<p>{{ $user->firstname }}</p>
<p>{{ $user->lastname }}</p>
<p>{{ $user->birthday}}</p>
<p>{{ $user->email}}</p>
@endisset

@endsection