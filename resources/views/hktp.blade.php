@extends('template1')

@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style = "color: red"><center>E-KTP INDONESIA</center></h1> 
    <br>
    <div class="row">
      <div class="col"> <img src="{{asset('storage/ktp_1.jpg')}}" alt="Trulli" width="1200" height="800"></div>
      <div class="col"><img src="{{asset('storage/ktp_11.jpg')}}" alt="Trulli" width="1200" height="800" ></div>
    </div>
    
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
</html>
@endsection