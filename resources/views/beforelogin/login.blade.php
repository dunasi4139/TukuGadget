@extends('beforelogin.template')
@section('content')

    <body class="login-page"s>
        <div class="container-fluid">
            <h1>Login</h1>
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label><br>
                <input type="password" name="password"><br>
                @if (session('message'))
                    <div class="alert alert-danger" role="alert" style="padding: 5px; font-size: 11px;">
                        {{ session('message') }}
                    </div>
                @endif
                <button type="submit">Log In</button>
            </form>
        </div>
    </body>
@endsection
