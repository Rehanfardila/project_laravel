@extends('template1')

@section('isi')


<div class="carousel-inner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <center>
                <div class="carousel-item active">
                    <img src="{{asset('storage/pbg_1.jpg')}}" alt="Trull" width="1800" height="650">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('storage/pbg1.png')}}" alt="Trulli" width="1800" height="650">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('storage/pbg_5.jpg')}}" alt="Trulli" width="1800" height="650">
                </div>
            </center>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-img-top"><img src="{{asset('storage/r2.jpg')}}" alt="Trulli"
                            style="width: 100%; height:250px object-fitt: contain"></div>

                    <div class="card-body">
                        <h4> READ DEAD REDEMPTION II </h4>
                        <br>
                        <h5> Adventure</h5>
                        <br>
                        <p> Harga : Rp350.000,00</p>
                        <br>
                        <input type="button" class="btn bg-info" value="beli">
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-img-top"><img src="{{asset('storage/spd.jpg')}}" alt="Trulli"
                            style="width: 100%; height:250px object-fitt: contain">
                    </div>

                    <div class="card-body">
                        <h4> SPIDERMAN MILES MORALES</h4>
                        <br>
                        <h5> Action</h5>
                        <br>
                        <p> Harga : Rp250.000,00</p>
                        <br>
                        <input type="button" class="btn bg-info" value="beli">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-img-top"><img src="{{asset('storage/pes.jpg')}}" alt="Trulli"
                            style="width: 100%; height:250px object-fitt: contain">
                    </div>

                    <div class="card-body">
                        <h4> PRO EVOLUTION SOCCER 2020 </h4>
                        <br>
                        <h5> Sport</h5>
                        <br>
                        <P> Harga : Rp200.000,00</P>
                        <br>
                        <input type="button" class="btn bg-info" value="beli">
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="card">
                    <div class="card-img-top"><img src="{{asset('storage/ng.jpg')}}" alt="Trulli"
                            style="width: 100%; height:250px object-fitt: contain">
                    </div>

                    <div class="card-body">
                        <h4> LITTLE NIGHTMARES II </h4>
                        <br>
                        <h5> Fantasy</h5>
                        <br>
                        <P> Harga : Rp200.000,00</P>
                        <br>
                        <input type="button" class="btn bg-info" value="beli">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-img-top"><img src="{{asset('storage/vil.jpg')}}" alt="Trulli"
                                style="width: 100%; height:250px object-fitt: contain"></div>

                        <div class="card-body">
                            <h4> RESIDENT EVIL VILLAGE </h4>
                            <br>
                            <h5> Action</h5>
                            <br>
                            <p> Harga : Rp350.000,00</p>
                            <br>
                            <input type="button" class="btn bg-info" value="beli">
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-img-top"><img src="{{asset('storage/cr.jpg')}}" alt="Trulli"
                                style="width: 100%; height:250px object-fitt: contain">
                        </div>

                        <div class="card-body">
                            <h4> CRASH BANDICOT</h4>
                            <br>
                            <h5> Fantasy</h5>
                            <br>
                            <p> Harga : Rp300.000,00</p>
                            <br>
                            <input type="button" class="btn bg-info" value="beli">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-img-top"><img src="{{asset('storage/tek.jpg')}}" alt="Trulli"
                                style="width: 100%; height:250px object-fitt: contain">
                        </div>

                        <div class="card-body">
                            <h4> TEKKEN 7 </h4>
                            <br>
                            <h5> Fighting</h5>
                            <br>
                            <P> Harga : Rp300.000,00</P>
                            <br>
                            <input type="button" class="btn bg-info" value="beli">
                        </div>
                    </div>
                </div>


                <div class="col-3">
                    <div class="card">
                        <div class="card-img-top"><img src="{{asset('storage/hel.jpg')}}" alt="Trulli"
                                style="width: 100%; height:250px object-fitt: contain">
                        </div>

                        <div class="card-body">
                            <h4> HELLO NEIGHBOR </h4>
                            <br>
                            <h5> Fantasy</h5>
                            <br>
                            <P> Harga : Rp300.000,00</P>
                            <br>
                            <input type="button" class="btn bg-info" value="beli">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection