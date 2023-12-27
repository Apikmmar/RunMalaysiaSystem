{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CB21016
Student Name: MUHAMMAD AFIQ AMMAR BIN MURAD --}}
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
        <form action="{{ route('login.post') }}" method="post" id="login">
            @csrf
            <div class="header">
                <img src="{{asset('images/proj-laravel-logo-no-bg.png')}}" alt="Logo">
                <p class="h1 fw-bold">Run Malaysia</p>
            </div>
            <div class="box"></div>
            <div class="input">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                <select name="role_id" class="form-control">
                    <option value="1">Administrator</option>
                    <option value="2">User</option>
                </select>
                <br>
                <input type="submit" name="login" value="Login" class="btn btn-primary">
                <br>
                <p class="text-dark">Don't have an account? <a href="/registration">Click Here</a></p>
            </div>
        </form>
    </div>
    <br>

@endsection