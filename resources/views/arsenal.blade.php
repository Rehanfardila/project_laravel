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
<body>
  
  <h1 style = "color: red" p class="text-xl-left"><center><bold>REHAN ARSENAL OFFICIAL</bold></center></h1> 
  <br>
  <table>
    <tr>
      <td><img src="{{asset('storage/ars_7.jpg')}}" alt="Trulli" width="1200" height="800" ></td>
      <td><img src="{{asset('storage/ars_1.jpg')}}" alt="Trulli" width="1200" height="800" ></td>
    </tr>
  </table>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

 

<a href="{{url('/arsenal')}}"><h4 style ="color: red">Back To Home</h4></a>
</html>