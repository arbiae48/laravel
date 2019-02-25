@extends('template')

@section('judul')
Data Pengarang
@stop


@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('Pengarang/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <div class="box-body">
        <table id="DT" class="table table-bordered table-striped">
            <thead>
                <tr>
                    
                    <th>No Pengarang</th>
                    <th>Nama Pengarang</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
            <!--tampil data-->
            @foreach($pengarang as $rpengarang)
                <tr>
                    <td>{{ $rpengarang ['kd_pengarang'] }}</td>
                    
                    <td>{{ $rpengarang['nama_pengarang'] }}</td>
                    <td>
                        <a href="{{ url('Pengarang/edit',$rpengarang['kd_pengarang']) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('Pengarang/delete',$rpengarang['kd_pengarang']) }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop