@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('isAdmin')
                    <h3>Admin</h3>
                    <p>{{ session('mssg') }}</p>

                    <h3><a href="/admin/users">Användare</a></h3>
                    <h3><a href="/admin/teams">Lag</a></h3>
                    <h3><a href="/admin/activities">Aktiviteter</a></h3>

                    @elsecan('isMember')
                    <p>You're a member</p> 

                    @elsecan('isUser')
                    <p>You're a user</p>

                    @endcan
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
