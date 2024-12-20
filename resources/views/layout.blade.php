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

</head>

<body id="home">
    <nav class="navbar navbar-expand-lg m-0 py-0">
        <div class="navbar container-fluid full-width fixed-top px-4"
            style="border-bottom: 2px solid black; background-color: white ; height: 100px;">
            <a class="navbar-brand " href="#">
                <img src="{{ asset('img/Logo.png') }}" alt="LogoZeroHunger" width="200px">
            </a>
            <ul class="navbar-nav h3 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#donate">Donate!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#artikel">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">About
                        Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        @yield('container')
    </div>

    <footer class="d-flex mt-4">
        <div class="container-fluid d-flex justify-content-center" style="background-color: #D3A029">
            <div class="row justify-content-center" style="padding: 0">
                <div class="col align-items-center justify-content-center my-5">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/LogoPutih.png') }}" alt="" width="250px">
                    </div>
                    <div class="icon-container mt-1 d-flex justify-content-center">
                        <a href="https://www.facebook.com/" class="icon"><img
                                src="{{ asset('img/facebookLogo.png') }}" alt="" width="50px"></a>
                        <a href="https://www.x.com/" class="icon"><img src="{{ asset('img/twitterLogo.png') }}"
                                alt="" width="50px"></a>
                        <a href="https://www.instagram.com/" class="icon"><img
                                src="{{ asset('img/instagramLogo.png') }}" alt="" width="50px"></a>
                        <a href="https://www.youtube.com/" class="icon"><img src="{{ asset('img/youtubeLogo.png') }}"
                                alt="" width="50px"></a>
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
