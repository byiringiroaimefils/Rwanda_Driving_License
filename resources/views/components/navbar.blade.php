<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/app.css')}}">
    <style>

    </style>
</head>
<body>
    <nav class="sidebar">
        <div>
            <h3>Drive License System</h3>
            <ul>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/candidate">Candidates</a></li>
                <li><a href="/grade">Grade</a></li>
                <li><a href="/report">Report</a></li>
            </ul>
        </div>
        <div class="logout">
            <a href="{{ route('logout') }}" style="color: red;">Log Out</a>
        </div>
    </nav>
</body>
</html>
