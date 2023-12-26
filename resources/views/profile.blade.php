@extends('template')

@section('content')
    <div class="profile-card">
        <h2> Welcome to the back. </h2>
        @if ($avatar)
            <img src="{{ $avatar }}" alt="Avatar Profile">
        @endif
        <div id="profile-information">
            <p>
                <span> Name: </span>
                {{ $name }}
            </p>
            <p>
                <span> Email: </span>
                {{ $email }}
            </p>
        </div>
        <a id="btn-logout" href="/logout"> Logout </a>
    </div>
@endsection
