@extends('template1')

@section('isi')
<Div class="Container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Available stock Playstation</h3>
            <a href="{{("/playstation/create")}}">Tambah Data</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Games</th>
                    <th>Controller</th>
                    <th>Aksesoris</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>75</td>
                    <td>55</td>
                    <td>1344</td>

                    <td>
                        <input type="button" value="Edit" class="btn btn-warning">
                        <input type="button" value="Cancel" class="btn btn-danger">
                    </td>
                </tr>
            </table>

        </div>
    </div>
</Div>
@endsection