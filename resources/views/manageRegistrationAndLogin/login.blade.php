@extends('components.master2')

@section('inside')
    
    <br>
    <div id="video-container">
        <video src="{{ asset('video/cinematic-running.mp4') }}" autoplay loop muted class="playvid2"></video>
    </div>
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
                <p class="text-dark">Don't have an account? <a href="/register">Click Here</a></p>
            </div>
        </form>
    </div>
    <br>

@endsection