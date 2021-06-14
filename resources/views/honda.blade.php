<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 500px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<h1 style="color:red;">ONE HEART</h1>
<img src="{{asset('storage/Hlogo_1.jpg')}}" alt="Trulli" width="400" height="400">

<div class="row">
  <div class="column" style="background-color:white;">
    <h2>HONDA REVO</h2>
    <img src="{{asset('storage/honda_1.jpg')}}" alt="Trulli" width="400" height="400">

  </div>
  <div class="column" style="background-color:white;">
    <h2>HONDA ADV</h2>
    <img src="{{asset('storage/honda_2.jpg')}}" alt="Trulli" width="400" height="400">

    </div>
    <div class="column" style="background-color:white;">
    <h2>HONDA CBR</h2>
    <img src="{{asset('storage/honda_3.jpg')}}" alt="Trulli" width="400" height="400">

  </div>
  <div class="column" style="background-color:white;">
    <h2>HONDA 80</h2>
    <img src="{{asset('storage/honda_4.jpg')}}" alt="Trulli" width="400" height="400">

  </div>
  <div class="column" style="background-color:white;">
    <h2>HONDA MILLENIAL</h2>
    <img src="{{asset('storage/honda_5.jpg')}}" alt="Trulli" width="400" height="400">

  </div>
</div>
<div>
<div class="column" style="background-color:white;">
<td><a href="motor"><h1 style="color:blue;">Back to Home</h1></a></td>
</div>
</body>
</html>