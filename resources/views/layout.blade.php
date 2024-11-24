<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Apa Kek</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom mx-5">
        <div class="navbar container-fluid">
            <a class="navbar-brand " href="#">
                <img src="{{ asset('img/Logo.png') }}" alt="LogoZeroHunger" width="200px">
            </a>
            <ul class="navbar-nav h3 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#D3A029"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#D3A029"><strong>News</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#D3A029"><strong>About Us</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="color:#D3A029"><strong>Donate!</strong></a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
