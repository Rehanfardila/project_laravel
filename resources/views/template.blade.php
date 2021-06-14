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
    <nav class="navbar navbar-expand bg-danger">
  
        <ul class="nav">
          <li>
              <img src="{{asset('storage/ars.jpg')}}" alt="Trulli" width="350" height="200" >
        </li>
            <li>
                <a class="nav-link" href="{{url('/arsenal')}}"><h1 style ="color: white">Home</h1></a>
            </li>
            <li>
              <a class="nav-link" href="{{url('/about')}}"><h1 style ="color: white">About</h1></a>
          </li>
          
        </ul>
    </nav>
   @yield('isi_halaman')
</body>
</html>