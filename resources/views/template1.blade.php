<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-primary sticky-top" style="background-color: darkblue">
        <a class="navbar-brand" href="#">
            <img src="{{asset('storage/ps4_12.jpg')}}" alt="Trulli" width="200" height="100">
            <img src="{{asset('storage/5.jpg')}}" alt="Trulli" width="250" height="100">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/ps')}}" style="background-color:gold">
                        <center> Home</center>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}" style="background-color:gold">
                        About
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="background-color:gold">
                        Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="">
                        <Div class="Container" style="min-height: 200px">
                            <div class="card my-1">
                                <div class="card-body" style="background-color: gold">
                                    <h3>
                                        <center> Login</center>
                                    </h3>
                                    <form action="#" method="POST">
                                        <ul class="list-group">
                                            <H5>Nama</H5> <input type="text" name="brand" required>
                                            <H5>Password</H5> <input type="text" name="brand" required>

                                        </ul>
                                        <hr>
                                        <input type="submit" value="Submit" class="btn btn-danger">
                                        <input type="submit" value="Sign in" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </Div>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
        </div>
    </nav>
    {{-- navbar --}}
    <div class="col">
        <center>
            <marquee scrolldelay="1">
                <h1 style=" color: mediumblue">
                    PLAYSTATION 4
                </h1>
            </marquee>
        </center>
    </div>
    <hr>
    @yield('isi')

    <footer class="footer bg-dark" style="height: 200px; padding: 50px">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <H3 style="color: cornsilk">Rehan Games Playstation 4</H3>
                <P style="color: cornsilk">contact : 081587838388</P>
            </div>
            <div class="col-2"></div>
            <div class="col">
                <H3 style="color: cornsilk">Social Media</H3>
                <P style="color: cornsilk">contact :@RehanGames</P>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>