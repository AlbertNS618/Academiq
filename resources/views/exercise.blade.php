<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{url('/css/bootstrap.css')}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/exer-style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" href="{{url('/img/logo.png')}}" type="image/icon type">
    <title>Exercise Page</title>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-light shadow-sm">
        <div class="container-fluid fw-bold d-flex justify-content-beteween px-5">
            <img src="{{url('/img/logo.png')}}" alt="" width="60px" class="navbar-brand mx-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="badge rounded-pill color2 px-4 py-3">{{session('login')}}</div>
            </button>
            <div class="collapse navbar-collapse mx-5">
                <ul class="navbar-nav">
                    <li class="nav-item active mx-5">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="/subject">Subject</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="/exercise">Exercise</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                @if (session('login'))
                    <div class="badge rounded-pill color2 px-4 py-3">{{session('login')}}</div>
                @else
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li>
                            <a class="nav-link bg" href="/register">Register</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    <header>
        <div class="color2 text-white text-wrap d-flex align-items-center justify-content-around cont">
            <div style="padding-top: 50px; padding-bottom: 50px">
                <h1 class="fw-bold">
                    With exercise, sharpen our ability</br>
                    to understand the material we have</br>
                    learned</h1>
            </div>
        </div>
    </header>

    <form action="/evaluation" method="get" id="exerciseForm" class="color2" style="padding-bottom:100px">
        @csrf
        <div class="d-flex align-items-center flex-column" style="padding-top: 50px; padding-bottom: 50px">
            <select name="grade" id="grade" style="width: 700px; height: 35px; border-radius: 13px; border-width: 2px; border-color:black; padding-left:10px">
                @foreach($grades as $grade)
                    <option value="{{ $grade }}">{{ $grade }}</option>
                @endforeach
            </select>
        </div>

        <div style="padding-top: 40px; padding-bottom: 30px; padding-left: 250px">
            <h2 style="color:white;">Choose a Subject<h2>
        </div>

        <div class="d-flex align-items-center flex-column" style="padding-bottom: 20px; color: white">
            <h2 class="fw-bold">IPA</h2>
        </div>

        <div class="d-flex flex-row justify-content-center align-items-center gap-5 text-center fw-bold fs-5">
            @foreach($subjects->where('major', 'IPA') as $subject)
                <div>
                    <button type="submit" name="subjectId" value="{{ $subject->id }}" class="exerciseButton d-block img-thumbnail border-black border-4 p-3 mb-3">
                        <img src="{{ $subject->image_url }}" alt="{{ $subject->subject_name }}" style="max-width: 100px;">
                    </button>
                    <p>{{ $subject->subject_name }}</p>
                </div>
            @endforeach
        </div>

        <div class="d-flex align-items-center flex-column" style="padding-top: 50px; padding-bottom: 20px; color: white">
            <h2 class="fw-bold">IPS</h2>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center gap-5 text-center fw-bold fs-5">
            @foreach($subjects->where('major', 'IPS') as $subject)
                <div>
                    <button type="submit" name="subjectId" value="{{ $subject->id }}" class="exerciseButton d-block img-thumbnail border-black border-4 p-3 mb-3">
                        <img src="{{ $subject->image_url }}" alt="{{ $subject->subject_name }}"  style="max-width: 100px;">
                    </button>
                    <p>{{ $subject->subject_name }}</p>
                </div>
            @endforeach
        </div>
    </form>

    <section class=" p-5 m-5">
        <div class="d-flex">
            <div class=" me-auto">
                <div class=" mb-5">
                    <h1 class="fw-bold">Strengthen your knowledge daily</h1>
                    <p class="fw-medium">Start to plan for daily studying using the daily planner.</p>
                </div>
                <div class=" badge badge-pill color2 ps-2 pe-4 py-3 plan fs-5 fw-bolder">Plan Now <i class="bi bi-arrow-right ms-3"></i></div>
            </div>
            <img src="{{url('img/scooterman.png')}}" class=" max-w-xl" width="400px" alt="">
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
