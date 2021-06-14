<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
       table,
       th,
       td {
          border: 1px solid black;
       }
      </style>
   </head>
<body>
   <nav class="navbar navbar-expand bg-warning">
      <ul class="nav">
          <li>
              <a class="nav-link" href="{{url('/beranda')}}">Home</a>
          </li>
          <li>
            <a class="nav-link" href="{{url('/yamaha')}}">yamaha</a>
        </li>
      </ul>
  </nav>
   <h1> Halaman Beranda</h1> 
   <input type="button" value="home" class="btn btn-primary">
   <input type="button" value="Profile" class="btn btn-danger">
   <br>
   <br>
   <table border="1">
   <tr>
    <td>1</td>
    <td>2</td>
    <td colspan="2">3</td>
 
    </tr>
    <tr>
      <td colspan="2">5</td>
      <td>7</td>
      <td>8</td>
   </tr>
   <tr>
      <td colspan="4">9</td>
   </tr>

   <table class="table table-bordered table-hover">
      <tr>
        <td>sidebar</td>
        <td colspan="2">judul utama</td>
        <td>sidebar</td>
      </tr>
      <tr>
         <td>5</td>
         <td>6</td>
         <td>7</td>
         <td>8</td>
       </tr>
   </table>
 <br>
 <br>
   <div class="row">
      <div class="col">sidebar</div>
      <div class="col">judul utama</div>
      <div class="col">sidebar</div>
   </div>


    
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
   </script>
   </table>
</body>
</html>