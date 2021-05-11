@extends('template')
@section('content')
<body class="login-page">
    <div class="container-fluid">
        <h1>Login</h1>
        <form class="login-form" method="post" action="">
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label><br>
                <input type="password" name="password"><br>
                <button>Log In</button>  
        </form>
    </div>
</body>
@endsection