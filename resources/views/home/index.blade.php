@extends('layouts.master')

<body>

    <div class="row">
        <div class="row">
            <div class="col-md-8">
                <h3>Daftar Superhero</h3>
            </div>
            <div class="col-md-4">
                <form action="/" method="GET">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </span>
                        <input type="text" name="cari" class="form-control" placeholder="Cari Hero...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($hero as $h)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$h['hero']}}</td>
                            <td>{{$h['jenkel']}}</td>
                            <td>
                                <a href="/home/{{$h->id}}/detail" class="btn btn-primary">View Detail</a>
                                <a href="/home/{{$h->id}}/hapus" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/simulasi" class="btn btn-primary">Simulasi Superhero Menikah</a>
            </div>
        </div>
    </div>