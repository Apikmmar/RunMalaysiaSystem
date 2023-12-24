@extends('components.master2')

@section('inside')
    
    <br>
    <div id="video-container">
        <video src="{{ asset('video/cinematic-running.mp4') }}" autoplay loop muted class="playvid2"></video>
    </div>
    <div class="container">
    @if(session('success'))
        <div class="alert alert-success" id="success-message">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger" id="success-message">
            {{ session('error') }}
        </div>
    @endif
        </div>
        <form action="{{ route('register.post') }}" method="post" id="login">
            @csrf
            <div class="header">
                <img src="{{asset('images/proj-laravel-logo-no-bg.png')}}" alt="Logo">
                <p class="h1 fw-bold">Run Malaysia</p>
            </div>
            <div class="box"></div>
            <div class="input">
                <input type="text" name="fullname" class="form-control" placeholder="Your Full Name" required="required">
                <input type="text" name="ic" class="form-control" placeholder="Your Identity Card Number" required="required">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required="required">
                <input type="text" name="username" class="form-control" placeholder="Your Username" required="required">
                <input type="password" name="password" class="form-control" placeholder="Your Password" required="required">
                <select name="user_role" class="form-control">
                    <option>Administrator</option>
                    <option>User</option>
                </select>
                <br>
                <input type="submit" name="login" value="Login" class="btn btn-primary">
                <br>
                <p class="text-dark">Already have an account? <a href="/login">Click Here</a></p>
            </div>
        </form>
    </div>
    <br>

@endsection