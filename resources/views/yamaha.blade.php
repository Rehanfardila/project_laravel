@extends('template')

@section('isi_halaman')

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  font-family: arial;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 10px solid #dddddd;
  text-align: center;
  padding: 8px;
}

</style>
</head>
<body>
<h2></h2>

<h1 style="color:blue;">Nyalakan Nyali</h1>

<table class="table-bordered table-striped">
<img src="{{asset('storage/slogo.jpg')}}" alt="Trulli" width="400" height="400">

<div class="card bg-dark text-white">
    <img src="..." class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text">Last updated 3 mins ago</p>
    </div>
  </div>


    <th><br><h1 style="color:blue;">SUZUKI SATRIA</h1><br><img src="{{asset('storage/suzuki_1.jpg')}}" alt="Trulli" width="300" height="300"></th>
    <th><br><h1 style="color:blue">SUZUKI GSX</h1><br><img src="{{asset('storage/suzuki_2.jpg')}}" alt="Trulli" width="300" height="300"></th>
    <th><br><h1 style="color:blue;">SUZUKI MASA DEPAN </h1><br><img src="{{asset('storage/suzuki_3.jpg')}}" alt="Trulli" width="300" height="300"></th>
    <th><br><h1 style="color:blue;">SUZUKI NEX</h1><br><img src="{{asset('storage/suzuki_4.jpg')}}" alt="Trulli" width="300" height="300"></th>
    <th><br><h1 style="color:blue;">SUZUKI TRAIL</h1><br><img src="{{asset('storage/suzuki_5.jpg')}}" alt="Trulli" width="300" height="300"></th>
  </tr>
  </table>
  <td><a href="motor"><h1 style="color:blue;">Back to Home</h1></a></td>
</body>
</html>
@endsection
