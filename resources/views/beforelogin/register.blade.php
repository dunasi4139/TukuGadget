@extends('template')
@section('content')
<body class="register-page">
    <div class="container-fluid">
        <h1>Register</h1>
        <form class="register-form" method="post" action="">
                <label>Nama</label><br>
                <input type="text" name="name"><br>
                <label>E-Mail</label><br>
                <input type="email" name="email"><br>
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Nomor HP</label><br>
                <input type="number" name="nomor"><br>
                <label>Password</label><br>
                <input type="password" name="password" id="password-input"><br>
                <button>Register</button>  
        </form>
    </div>
</body>
@endsection