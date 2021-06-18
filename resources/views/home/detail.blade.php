@extends('layouts.master')

<body>
    <div class="row">
        <div class="row">
            <div class="col-md-8">
                <h3>Detail Superhero: {{$detail->hero}}</h3>
            </div>
            <form action="/home/{{$detail->id}}/edit" method="POST">
                {{csrf_field()}}
                <div class="col-md-4  text-right">
                    <button class="btn btn-primary">Edit</button>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{$detail->id}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="hero" class="form-control" value="{{$detail->hero}}">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="jenkel" class="form-control">
                                    <option value="Laki-laki" @if($detail->jenkel == 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($detail->jenkel == 'Perempuan') selected @endif>Perempuan</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </form>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Skill</th>
                            <th>
                                <button class="btn btn-primary btn-small">Tambah Skill</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $ad)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$ad['skill']}}</td>
                            <td>
                                <a href="/home/{{$ad->id}}/hapusSkill" class="btn btn-danger btn-small">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>