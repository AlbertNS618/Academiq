<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{url('/css/bootstrap.css')}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/subs-style.css')}}">
    <link rel="icon" href="{{url('/img/logo.png')}}" type="image/icon type">
    <title>Subscription</title>
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
    <div class="pricing-table">
        <div class="details">
            <h2>Package to suit your plan</h2>
            <p>Take your desired plan to get access to our content easily, we like to offer special package to our users.</p>
        </div>
        <div class="grid">
            <div class="box basic">
                <div class="title">Basic</div>
                <div class="price">
                    <b>$5.13</b>
                    <span>/ 3mo</span>
                </div>
                <div class="features">
                    <div>Enjoy the full 3 months of subscription for full length. At no additional cost.</div>
                </div>
                <div class="button">
                    <button>Buy Now!</button>
                </div>
            </div>
            <div class="box standard">
                <div class="title">Standard</div>
                <div class="price">
                    <b>$8.33</b>
                    <span>/ 6mo</span>
                </div>
                <div class="features">
                    <div>Enjoy the full 6 months of subscription for full length. At no additional cost.</div>
                </div>
                <div class="button">
                    <button>Buy Now!</button>
                </div>
            </div>
            <div class="box premium">
                <div class="title">Premium</div>
                <div class="price">
                    <b>$12.81</b>
                    <span>/ 12mo</span>
                </div>
                <div class="features">
                    <div>Enjoy the full 12 months of subscription for full length. At no additional cost.</div>
                </div>
                <div class="button">
                    <button>Buy Now!</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
