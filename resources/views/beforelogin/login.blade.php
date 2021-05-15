@extends('beforelogin.template')
@section('content')

    <div class="login-wrap">
        <div class="login-html">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form">
                    <div class="sign-in-htm">

                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input" name="username">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password">
                        </div>
                        @if (session('message'))
                            <div class="alert alert-danger" role="alert" style="padding: 5px; font-size: 11px;">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="group">
                            <input type="submit" class="button" value="Login">
                        </div>

                    </div>
            </form>
        </div>
    </div>
    </div>








    {{-- <body class="login-page"s>
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
    </body> --}}
@endsection
