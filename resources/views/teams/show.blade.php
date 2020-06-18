@extends('layouts.app')

@section('content')
<a href="/admin/teams">&laquo; Gå tillbaka</a>
<h1><u>{{$team->name}}</u></h1>
@isset($team)

<h2>Ändra eller ta bort lag</h2>



<!-- Change member form -->
<form action="{{action('TeamController@update', $team->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="row">
        <div class="col mt-3">
            <label for="name">Lagets namn</label>
            <input type="text" class="form-control" name="name" value="{{$team->name}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Ändra</button>
</form>
<form action="/admin/teams/{{ $team->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-3">Ta Bort</button>
</form>
@endisset
@endsection