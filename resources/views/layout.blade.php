<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Apa Kek</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary gradient-custom">
        <div class="navbar container">
            <a class="navbar-brand " href="#">
                <h3 class="" style="color: white;font-weight: 800"><em>ZeroHunger</em></h3>
            </a>
            <ul class="navbar-nav h3 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white"><strong>News</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white"><strong>About Us</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="color: white"><strong>Donate!</strong></a>
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
