@extends('template1')

@section('isi')

<Div class="Container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Tambah stock</h3>
            <form action="#" method="POST">
                <ul class="list-group">
                    Judul <input type="text" name="Judul" required>
                    Cerita <input type="text" name="Cerita" required>
                    Harga <input type="text" name="Harga" required>
                </ul>
                <hr>
                <a href="{{url('playstation')}}" class="btn btn-danger">kembali</a>
                <input type="submit" value="simpan" class="btn btn-primary">
            </form>
        </div>
    </div>
</Div>
@endsection