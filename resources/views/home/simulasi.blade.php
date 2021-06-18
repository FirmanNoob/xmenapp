@extends('layouts.master')

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <h3>Simulasi Jika Superhero Menikah</h3>
                </div>
                <form action="">
                    <div class="col-md-4  text-right">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Suami</td>
                                @foreach($data1 as $hr)
                                <td hidden>{{$hr['id']}}</td>
                                @endforeach
                                <td>

                                    <select class="form-control">
                                        @foreach($data1 as $ad)
                                        <option value="Laki" selected="">{{$ad->hero}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Istri</td>
                                @foreach($data as $as)
                                <td hidden>{{$as['id']}}</td>
                                @endforeach
                                <td>

                                    <select class="form-control">
                                        @foreach($data as $data)
                                        <option value="Perempuan" selected="">{{$data['hero']}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </form>

                    <h3>Maka Anaknya Kemungkinan Akan Memiliki Skill Berikut:</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Skill</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data2 as $data)
                            <tr>
                                <td>1</td>
                                <td>{{$data['skill']}}</td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td>2</td>
                                <td>Bisa Membuat Hujan</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bisa Membuat Petir</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bisa Mengendalikan Angin dan Badai</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bisa Sembuh Dengan Cepat</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Mempunyai Cakar Yang Lebih Kuat Dari Baja</td>
                            </tr> -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>