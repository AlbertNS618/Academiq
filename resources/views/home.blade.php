<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/css/own-style.css')}}">
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-light">
        <div class="container-fluid fw-medium">
            <img src="{{url('/img/logo.png')}}" alt="" width="60px" class="navbar-brand mx-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5">
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
                    <li class="">
                        <a class="nav-link" href="">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="bgHeaderColor d-flex align-items-center px-4 py-2 justify-content-between">
            <div>
                <h1>Elevate Your Learning</h1>
                <p class=" w-75">
                    Begin your learning journey wherever level you're in.
                    We will help you!
                </p>
                <div class="badge rounded-pill bg-warning px-4 py-3 fw-bold fs-4 ">
                    <a class="text-dark text-decoration-none">Start Now!</a>
                </div>
            </div>
            <img class="rounded-circle bg-white m-3" width="450px" src="{{url('/img/man-header.png')}}" alt="">

        </div>
    </header>
    <script ></script>
</body>
</html>
