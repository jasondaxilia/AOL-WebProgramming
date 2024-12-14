<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZeroHunger</title>
    <link rel="icon" href="{{ asset('img/MangkokPanas.png') }}" type="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: montserrat;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom mx-5 p-0">
        <div class="navbar container-fluid">
            <a class="navbar-brand " href="#">
                <img src="{{ asset('img/Logo.png') }}" alt="LogoZeroHunger" width="200px">
            </a>
            <ul class="navbar-nav h3 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#D3A029; font-weight: 700">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#D3A029; font-weight: 700">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#D3A029; font-weight: 700">About
                        Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="color:#D3A029; font-weight: 700">Donate!</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        @yield('container')
    </div>

    <footer class="d-flex">
        <div class="container-fluid d-flex justify-content-center" style="background-color: #D3A029">
            <div class="row justify-content-center" style="padding: 0">
                <div class="col align-items-center justify-content-center my-5">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/LogoPutih.png') }}" alt="" width="250px">
                    </div>
                    <div class="icon-container mt-1 d-flex justify-content-center">
                        <a href="" class="icon"><img src="{{ asset('img/facebookLogo.png') }}" alt=""
                                width="50px"></a>
                        <a href="" class="icon"><img src="{{ asset('img/twitterLogo.png') }}" alt=""
                                width="50px"></a>
                        <a href="" class="icon"><img src="{{ asset('img/instagramLogo.png') }}" alt=""
                                width="50px"></a>
                        <a href="" class="icon"><img src="{{ asset('img/youtubeLogo.png') }}" alt=""
                                width="50px"></a>
                    </div>
                </div>
                <div class="mx-auto d-flex justify-content-center" style="color: white">
                    © 2024 ZeroHunger. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
