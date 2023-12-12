@extends('app')
@section('content')
    <div class="div">
        <div class="overlap">
            <div class="frame"></div>
            <img class="image" src="img/graphic_design.jpeg" />
            <div class="text-wrapper">Elevate Your Learning</div>
            <p class="p">Begin your learning journey with Academique wherever level you're in. We will help you!</p>
        </div>
        <div class="overlap-group">
             <a class="overlap-wrapper" href="/">
                <img class="logo" src="img/logo.png" />
                <div class="text-wrapper-6 mt-2">ACADEMIQ</div>
             </a>
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <!-- EMAIL -->
                <div class="group">
                    <div class="text-wrapper-3">Email <span class="text-danger">*</span></div>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                </div>
                <!-- Password -->
                <div class="group-2">
                    <div class="text-wrapper-4">Password <span class="text-danger">*</span></div>
                    <input class="form-control" type="password" name="password" />
                </div>
                <!-- Login Button -->
                <div class="overlap-group-wrapper-2">
                    <button class="btn btn-wrapper-2">
                        <div class="text-wrapper-8">LOGIN</div>
                    </button>
                </div>
            </form>
            <p class="dont-have-an-account">
                <span class="span">Don't have an account? </span>
                <a class="text-wrapper-7" href="/register">Register Now</a>
            </p>
            <p class="by-clicking-login">
                <span class="span">By clicking Login, you agree to our </span>
                <span class="text-wrapper-7">Terms and Conditions</span>
                <span class="span"> and </span>
                <span class="text-wrapper-7">Privacy Policy.</span>
            </p>
        </div>
    </div>
@endsection
