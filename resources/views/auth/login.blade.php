<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login_admin</title>
</head>

<body>
    <h4>Log in Page</h4>
    <form action="{{ route('register.login') }}" method="post">
        @csrf
        @method('post')
        @if (Session::has('message'))
            <div>{{ session::get('message') }}</div>
        @endif

        <label for="">Admin Name</label><br>
        <input type="text" name="adminName" style="padding: 4px"><br>
        <span style="color: red">
            @error('adminName')
                {{ $message }}
            @enderror
        </span><br>
        <label for="">Admin Password</label><br>
        <input type="password" name="adminPassword" style="padding: 4px"><br>
        <span style="color: red">
            @error('adminPassword')
                {{ $message }}
            @enderror
        </span><br>
        <button>Login</button>
        <button><a href="/register">Register</a></button>
    </form>

</body>

</html>
