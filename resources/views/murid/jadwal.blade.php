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
                    <h1>Jadwal Bimbel Mipa</h1>
                </div>
                <div class="col-md-7">
                    <!-- Button trigger modal -->
                    <a type="button" class="btn btn-primary btn-sm float-right" href="/murid/add">Tambah Jadwal</a>
                    <form class="form-inline my-2 my-lg-0" method="GET" action="/murid">
                        <input name="cari" class="form-control w-75 mr-sm-2" id="search" placeholder="Cari">
                        <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0">Cari</button>
                    </form>
                </div>
                <hr>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <p>Hari   : </p>
                                    <p>Tanggal: </p>
                                    <p>Mapel  : </p>
                                    <p>Guru   : </p>
                                    <p>Ruangan: </p>
                                </div>
                                <div class="card-body" align="center">
                                    <a href=" " class="btn btn-warning btn-sm">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
@endsection
