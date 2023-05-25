<!DOCTYPE html>
<html>
<head>
    <title>NPS YPR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0; height: 100px;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="https://www.npsypr.edu.in/"><h2>National Public School</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item" style="margin-left:500px;">
                        <a class="nav-link" href="{{ route('login') }}"><h3>Login</h3></a>
                    </li>
                    <li class="nav-item" style="margin-left:20px;">
                        <a class="nav-link" href="{{ route('register-user') }}"><h3>Register</h3></a>
                    </li>
                    @else
                    <li class="nav-item" style="">
                        <a class="nav-link" href="{{ route('signout') }}"><h3>Logout</h3></a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- <h1>Wellcome to national public school</h1> -->
    @yield('content')
</body>
</html>