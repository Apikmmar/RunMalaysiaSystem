<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/proj-laravel-logo-no-bg.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>RunMalaysia</title>
</head>
<body class="bodyclass">
    <div id="video-container">
        <video src="{{ asset('video/cinematic-running.mp4') }}" autoplay loop muted class="playvid2"></video>
    </div>
    <br>
    <div class="container">
        <form action="" method="post" id="login">
            @csrf
            <div class="header">
                <img src="{{asset('images/proj-laravel-logo-no-bg.png')}}" alt="Logo">
                <p class="h1 fw-bold">Run Malaysia</p>
            </div>
            <div class="box"></div>
            <div class="input">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                <select name="user_role" class="form-control">
                    <option>Administrator</option>
                    <option>User</option>
                </select>
                <br>
                <input type="submit" name="login" value="Login" class="btn btn-primary">
                <br>
                <p class="text-light">Don't have an account? <a href="/register">Click Here</a></p>
            </div>
        </form>
    </div>
    <br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>