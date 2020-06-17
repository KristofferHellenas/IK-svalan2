extends('layouts.app')

@section('content')
@isset($user)
<p>{{ $user->firstname }}</p>
@endisset


@endsection