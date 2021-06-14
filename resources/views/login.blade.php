@extends('template1')

@section('isi')


<center>
    <div class="row" style="color: rgb(80, 47, 158)">
        <h1>Login/Registrasi</h1>
    </div>
</center>
<br>
<div class="container" style="color: darkblue">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2" style="color: crimson">
            <h3>Nama</h3>
        </div>
        <div class="col"><input type="text"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2" style="color: crimson">
            <h3>Password</h3>
        </div>
        <div class="col"><input type="text"></div>
    </div>

    <BR>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-1"><input type="button" value="SUBMIT" class="btn btn-warning"></div>
        <div class="col-1"><input type="button" value="SIGN IN" class="btn btn-info"></div>
    </div>
</div>
<br>
@endsection