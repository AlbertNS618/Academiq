<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/subject-style.css')}}">
    <link rel="icon" href="{{url('/img/logo.png')}}" type="image/icon type">
    <title>Subject</title>
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
                    <div>Hi, {{session('login')}}</div>
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

    <header class="d-flex justify-content-center py-5 color2">
        <h1 class="mt-5 text-white">A Broad Selection of Courses Based on Your School Interest</h1>
    </header>

    <main class="pt-5 px-5 color2">
        <div class="py-5 d-flex flex-column">
            <h2 class="text-white flex">IPA</h2>
            <div class="d-flex flex-row justify-content-around jus text-center fw-bold fs-5 px-5">
                <div>
                    <img src="{{url('/img/Math.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4 som" width="150px" alt="...">
                    <div>MATH</div>
                </div>
                <div>
                    <img src="{{url('/img/Physics.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4 som" width="150px" alt="...">
                    <div>PHYSICS</div>
                </div>
                <div>
                    <img src="{{url('/img/Chemistry.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="150px" alt="...">
                    <div>CHEMISTRY</div>
                </div>
                <div>
                    <img src="{{url('/img/English.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="150px" alt="...">
                    <div>ENGLISH</div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <h2 class="text-white">IPS</h2>
            <div class="d-flex flex-row justify-content-around gap-5 text-center fw-bold fs-5 px-5">
                <div>
                    <img src="{{url('/img/Geology.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="150px" alt="...">
                    <div>GEOLOGY</div>
                </div>
                <div>
                    <img src="{{url('/img/Sociology.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="150px" alt="...">
                    <div>SOCIOLOGY</div>
                </div>
                <div>
                    <img src="{{url('/img/Economy.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="150px" alt="...">
                    <div>ECONOMY</div>
                </div>
                <div>
                    <img src="{{url('/img/English.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="150px" alt="...">
                    <div>ENGLISH</div>
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
