@extends('beforelogin.template')
@section('title','Register - Tuku Gadget')
@section('content')
<body class="register-page">
    <div class="register-wrap">
        <div class="register-html">
        <form class="register-form" method="post" action="{{ route('register') }}">
            @csrf
            <div class="register-form">
                <div class="sign-up-htm">
                    <h1>Register</h1>
                    <br>
                    <div class="group">
                        <label for="name" class="label">Name</label>
                        <input id="name" type="text" class="input" name="name">
                    </div>
                    <div class="group">
                        <label for="email" class="label">Email</label>
                        <input id="email" type="email" class="input" name="email">
                    </div>
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="username">
                    </div>
                    <div class="group">
                        <label for="nohp" class="label">Phone Number</label>
                        <input id="nohp" type="number" class="input" name="noHP">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password">
                    </div>
                    <input type="checkbox" onclick="showPassword()"><a class="show-pass">Show Password</a>
                    @if (session('message'))
                        <div class="alert alert-danger" role="alert" style="padding: 5px; font-size: 11px;">
                            {{ session('message') }}
                        </div>
                    @endif
                    <br>
                    <div class="group">
                        <input type="submit" class="button" value="Register">
                    </div>
                </div>
            </div>
        </div>  
        </form>
    </div>
</body>
    <script>
        function showPassword() {
        var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection