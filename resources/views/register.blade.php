<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif

    <form action="{{route('signupUser')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name"><br>
        <span>@error('name') {{$message}} @enderror</span><br>
        <input type="email" name="email" id="" placeholder="Enter Email"><br>
        <span>@error('email') {{$message}} @enderror</span><br>
        <input type="password" name="password" id="" placeholder="Enter Password"><br>
        <span>@error('password') {{$message}} @enderror</span><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>