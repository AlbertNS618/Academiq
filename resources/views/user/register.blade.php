@extends('app')
@section('content')
    <div class="div">
        <div class="overlap">
            <div class="frame"></div>
            <img class="image" src="img/graphic_design.jpeg"/>
            <div class="text-wrapper">Elevate Your Learning</div>
            <p class="p">Begin your learning journey with Academique wherever level you’re in. We will help you!</p>
        </div>
        <div class="overlap-group">
             <a class="overlap-wrapper" href="/">
                <img class="logo" src="img/logo.png"/>
                <div class="text-wrapper-6 mt-2">ACADEMIQUE</div>
             </a>
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <!-- NAME -->
                <div class="group">
                    <div class="text-wrapper-3">Name <span class="text-danger">*</span></div>
                    <input class="form-control" type="name" name="name" value="{{ old('name') }}" />
                </div>
                <!-- EMAIL -->
                <div class="group-2">
                    <div class="text-wrapper-4">Email <span class="text-danger">*</span></div>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                </div>
                <!-- Password -->
                <div class="group-3">
                    <div class="text-wrapper-4">Password <span class="text-danger">*</span></div>
                    <input class="form-control" type="password" name="password" />
                </div>
                <!-- Password Confirmation -->
                <div class="group-4">
                    <div class="text-wrapper-4">Password Confirmation <span class="text-danger">*</span></div>
                    <input class="form-control" type="password" name="confirm_password" />
                </div>
                <!-- Register Button -->
                <div class="overlap-group-wrapper">
                    <button class="btn btn-wrapper">
                        <div class="text-wrapper-5">REGISTER</div>
                    </button>
                </div>
            </form>
            <!-- <p class="have-an-account">
                <span class="span">Already have an account? <a class="text-wrapper-2" href="/login">Login</a></span>
            </p> -->
            <p class="have-an-account">
                <span class="span">Already have an account? </span>
                <a class="text-wrapper-2" href="/login">Login</a>
            </p>
            <p class="by-clicking-register">
                <span class="span">By clicking Register, you agree to our </span>
                <span class="text-wrapper-2">Terms and Conditions</span>
                <span class="span"> and </span>
                <span class="text-wrapper-2">Privacy Policy.</span>
            </p>
        </div>
    </div>
@endsection
