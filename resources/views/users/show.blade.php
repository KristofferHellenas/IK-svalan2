@extends('layouts.app')

@section('content')
<a href="{{ route('home') }}">&laquo; Tillbaka</a>
<h1><u>{{$user->firstname}} {{$user->lastname}}</u></h1>
@isset($user)

<h2>Ändra eller ta bort medlem</h2>



<!-- Change member form -->
<form action="/admin/users" method="POST">
    @csrf
    @method('put')
    <div class="row">
        <div class="col mt-3">
            <label for="firstname">Förnamn</label>
            <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}">
        </div>
        <div class="col mt-3">
            <label for="lastname">Efternamn</label>
            <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
        </div>
    </div>
    <div class="row">
        <div class="col mt-3">
            <label for="birthday">Födelsedag</label>
            <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
        </div>
        <div class="col mt-3">
            <label for="country">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Ändra</button>
</form>
<form action="/admin/users/{{ $user->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-3">Ta Bort</button>
</form>
@endisset
@endsection