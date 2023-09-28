@extends('master')

@section('table')
<table class="table table-striped">
    <thead>
        <th>id</th>
        <th>nama_barang</th>
        <th>harga</th>
        <th>stock</th>
        <th>id_supplier</th>
    </thead>
    <tbody>
        @foreach($table as $data)
        <tr>
            <td>{{$data -> id}}</td>
            <td>{{$data -> nama_barang}}</td>
            <td>{{"Rp".number_format($data -> harga, 2, ',' , '.')}}</td>
            <td>{{$data -> stock}}</td>
            <td>{{$data -> id_supplier}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection