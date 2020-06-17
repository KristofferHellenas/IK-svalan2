@extends('layouts.app')

@section('content')
<a href="{{ route('home') }}">&laquo; Tillbaka</a>
<h1><u>{{$activity->name}}</u></h1>
@isset($activity)

<h2>Ändra eller ta bort aktivitet</h2>



<!-- Change member form -->
<form action="/admin/activities" method="POST">
    @csrf
    @method('put')
    <div class="row">
        <div class="col mt-3">
            <label for="name">Förnamn</label>
            <input type="text" class="form-control" name="name" value="{{$activity->name}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Ändra</button>
</form>
<form action="/admin/activities/{{ $activity->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-3">Ta Bort</button>
</form>
@endisset
@endsection