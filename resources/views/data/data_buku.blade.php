@extends('template')

@section('judul')
Daftar Buku
@stop

@section('ac-buku')
active
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('buku/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <div class="box-body">
        <table id="DT" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Kategori</th>
                    <th>Halaman</th>
                    <th>Edisi</th>
                    <th>ISBN</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <!--tampil data-->
            @foreach($buku as $rbuku)
                <tr>
                    <td>{{ $rbuku->kd_buku }}</td>
                    <td>{{ $rbuku->judul }}</td>
                    <!-- pakai function dari Mglobal -->
                    <td>{{ App\Mglobal::Get_Pengarang($rbuku->kd_pengarang) }}</td>
                    <td>{{ App\Mglobal::Get_Penerbit($rbuku->kd_penerbit)." / ".$rbuku->tempat_terbit."/".$rbuku->tahun_terbit }}</td>
                    <td>{{ App\Mglobal::Get_Kategori($rbuku->kd_kategori) }}</td>
                    <!--
                        jika pakai query buider
                    <td>{{ $rbuku->nama_pengarang }}</td>
                    <td>{{ $rbuku->nama_penerbit." / ".$rbuku->tempat_terbit."/".$rbuku->tahun_terbit }}</td>
                    <td>{{ $rbuku->nama_kategori }}</td> -->
                    <td>{{ $rbuku->halaman }}</td>
                    <td>{{ $rbuku->edisi }}</td>
                    <td>{{ $rbuku->ISBN }}</td>
                    <td>
                        <a href="{{ url('buku/edit',$rbuku->kd_buku) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('buku/delete',$rbuku->kd_buku) }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop