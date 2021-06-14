@extends('template1')

@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<div class="row bg-light">
<h1 style="color:red"><center>DATA DIRI</center></h1>
</div>
<body>
   
    <div class="row bg-info">
    <h1 style = "color:black"><center><bold>Provinsi DKI Jakarta</bold></center></h1>
    <h1 style = "color:black"><center><bold>JAKARTA TIMUR</bold></center></h1>
    </div>
     <div class="row bg-info">
        <div class="col-2"><h1 style="black">NIK</div>
        <div class="col-6"><h1 style="black" >:3175080409900002</div>
     </div>
        <div class="row bg-info">
            <div class="col-sm-2"><h4 style="black"> Nama</div>
            <div class="col-sm-6"><h2 style="black"> : Rehan Fardila</div>
        </div>
     <div class="row bg-info">
        <div class="col-sm-2"><h4 style="black"> Tempat/Tgl Lahir</div>
        <div class="col-sm-5"><h3 style="black"> : Jakarta,04-09-1990</div>
      
     </div>
     <div class="row bg-info">

        <div class="col-sm-2"><h4 style="black"> Jenis Kelamin</div>
        <div class="col-sm-2"><h3 style="black"> : Pria</div>
        <div class="col-1"><h3 style="black">Gol. Darah</div>
        <div class ="col-2"><h2 style="black" >B</div>
     </div>
     <div class="row bg-info">
     <div class="col-sm-2"><h4 style="black"> Alamat</div>
     <div class="col-sm-4"><h3 style="black"> : Jln Cipinang Asem </div>
      <div class ="col"><img src="{{asset('storage/ars.jpg')}}" alt="Trulli" width="350" height="200" ></div> 
     </div>
 
 <div class="row bg-info">
    <div class="col-sm-1"><h4 style="black"></div>
    <div class="col-sm-1"><h4 style="black"> RT/RW</div>
    <div class="col"><h3 style="black">: 007/002</div>

    
 </div>
 <div class="row bg-info">
    <div class="col-sm-1"><h4 style="black"></div>
    <div class="col-sm-1"><h4 style="black"> Kel/Desa</div>
    <div class="col-sm-5"><h3 style="black"> : Jakarta Timur</div>
 
 </div>
 <div class="row bg-info">
   <div class="col-sm-1"><h4 style="black"></div>
    <div class="col-sm-1"><h4 style="black"> Kecamatan</div>
    <div class="col-sm-2"><h3 style="black"> : Makasar</div>
 
  </div>
 <div class="row bg-info">
    <div class="col-sm-2"><h4 style="black"> Agama</div>
    <div class="col"><h3 style="black"> : Islam</div>

 </div>
 <div class="row bg-info">
    <div class="col-sm-2"><h4 style="black"> Status Perkawinan</div>
    <div class="col"><h3 style="black"> : Belum Menikah</div>
    
 </div>
 <div class="row bg-info">
    <div class="col-sm-2"><h4 style="black"> Pekerjaan</div>
    <div class="col"><h3 style="black"> : Karyawan swasta</div>
    </div>
 <div class="row bg-info">
    <div class="col-sm-2"><h4 style="black"> Berlaku Hingga</div>
    <div class="col-sm-6"><h3 style="black">: Seumur Hidup</div>
    </div>  
 

 
 
       
        
      

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">          
</body>

   </script>
</html>
@endsection