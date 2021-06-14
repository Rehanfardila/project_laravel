@extends('template1')

@section('isi')
<Div class="Container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Inventori Playstation</h3>
            <a href="{{("/create")}}">Tambah Data</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>tahun</th>
                    <th>tahun</th>
                    <th>tahun</th>
                    <th>tahun</th>
                </tr>
                <tr>
                    <td>kaset</td>
                    <td>kaset</td>
                    <td>kaset</td>
                </tr>
                <td>
                    <input type="button" value="edit" class="btn btn-warning">
                    <input type="button" value="edit" class="btn btn-warning">
                </td>
            </table>

        </div>
    </div>
</Div>
@endsection