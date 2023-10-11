@extends('master')

@section('content')
    <h1>Data Barang</h1>

    <table style="border: 1px; width: 50%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID_Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr style="text-align: center;">
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
