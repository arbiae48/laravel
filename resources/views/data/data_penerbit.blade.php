@extends('template')

@section('judul')
Data Penerbit
@stop


@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('Penerbit/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <div class="box-body">
        <table id="DT" class="table table-bordered table-striped">
            <thead>
                <tr>
                    
                    <th>No Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
            <!--tampil data-->
            @foreach($penerbit as $rpenerbit)
                <tr>
                    <td>{{ $rpenerbit ['kd_penerbit'] }}</td>
                    
                    <td>{{ $rpenerbit['nama_penerbit'] }}</td>
                    <td>
                        <a href="{{ url('Penerbit/edit',$rpenerbit['kd_penerbit']) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('Penerbit/delete',$rpenerbit['kd_penerbit']) }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop