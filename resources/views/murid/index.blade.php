@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Bimbel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <br>
                <div class="col-md-4">
                    <h1>Data Murid</h1>
                </div>
                <div class="col-md-7">
                    <!-- Button trigger modal -->
                    <a type="button" class="btn btn-primary btn-sm float-right" href="/murid/add">Tambah Data</a>
                    <form class="form-inline my-2 my-lg-0" method="GET" action="/murid">
                        <input name="cari" class="form-control w-75 mr-sm-2" id="search" placeholder="Cari">
                        <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0">Cari</button>
                    </form>
                </div>
                <hr>
                <table class="table-fixed w-full">
                    <tr class="bg-info">
                        <th class="border px-4 py-2">NAMA</th>
                        <th class="border px-4 py-2">ALAMAT</th>
                        <th class="border px-4 py-2">GENDER</th>
                        <th class="border px-4 py-2">TELEPON</th>
                        <th class="border px-4 py-2">KELAS</th>
                        <th class="border px-4 py-2">AKSI</th>
                    </tr>
                    @foreach($data_murid as $murid)
                    <tr>
                        <td class="border px-4 py-2">{{$murid->nama}}</td>
                        <td class="border px-4 py-2">{{$murid->alamat}}</td> 
                        <td class="border px-4 py-2">{{$murid->gender}}</td>
                        <td class="border px-4 py-2">{{$murid->telepon}}</td> 
                        <td class="border px-4 py-2">{{$murid->kelas}}</td>
                        <td class="border px-4 py-2">
                            <a href="/murid/{{$murid->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/murid/delete/{{$murid->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
@endsection
