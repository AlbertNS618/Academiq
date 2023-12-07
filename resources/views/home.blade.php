<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{url('/css/bootstrap.css')}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/own-style.css')}}">
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-light shadow-sm">
        <div class="container-fluid fw-medium d-flex justify-content-between">
            <img src="{{url('/img/logo.png')}}" alt="" width="60px" class="navbar-brand mx-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-5">
                <ul class="navbar-nav">
                    <li class="nav-item active mx-5">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="">Subject</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="">Exercise</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="">Login</a>
                    </li>
                    <li>
                        <a class="nav-link bg" href="">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="bgHeaderColor d-flex align-items-center px-4 py-5 justify-content-around cont">
            <div>
                <div>
                    <h1 class="fw-bold">Elevate Your Learning</h1>
                    <p class="w-75">
                        Begin your learning journey wherever level you're in.
                        We will help you!
                    </p>
                </div>
                <div class="badge rounded-pill bg-warning px-4 py-3 fw-bold fs-4 my-4">
                    <a class="text-dark text-decoration-none">Start Now!</a>
                </div>
            </div>
            <img class="rounded-circle bg-white m-3" width="400px" src="{{url('/img/manheader.png')}}" alt="">

        </div>
    </header>
    <main class="my-5">
        <div class=" d-flex align-items-center flex-column">
            <h2 class="fw-bold">Learn based on your School Interest</h2>
            <div id="penjurusan" class="carousel slide my-5 d-flex flex-column align-items-center">
                <div>
                    <ul class="list-group list-group-horizontal ">
                        <li class="list-group-item">
                            <button type="button" data-bs-target="#penjurusan" data-bs-slide-to="0" class="btn border-black" aria-current="true">IPA</button>
                        </li>
                        <li class="list-group-item">
                            <button type="button" data-bs-target="#penjurusan" class="btn border-black" data-bs-slide-to="1">IPS</button>
                        </li>
                    </ul>
                </div>
                <div class="carousel-inner mt-5">
                    <div class="carousel-item active">
                        <div class="d-flex flex-row gap-5 text-center fw-bold fs-5">
                            <div>
                                <img src="{{url('/img/Math.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>MATH</div>
                            </div>
                            <div>
                                <img src="{{url('/img/Physics.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>PHYSICS</div>
                            </div>
                            <div>
                                <img src="{{url('/img/Chemistry.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>CHEMISTRY</div>
                            </div>
                            <div>
                                <img src="{{url('/img/English.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>ENGLISH</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-row gap-5 text-center fw-bold fs-5">
                            <div>
                                <img src="{{url('/img/Geology.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>GEOLOGY</div>
                            </div>
                            <div>
                                <img src="{{url('/img/Sociology.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>SOCIOLOGY</div>
                            </div>
                            <div>
                                <img src="{{url('/img/Economy.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>ECONOMY</div>
                            </div>
                            <div>
                                <img src="{{url('/img/English.png')}}" class="d-block img-thumbnail border-black border-4 p-3 mb-4" width="200px" alt="...">
                                <div>ENGLISH</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
