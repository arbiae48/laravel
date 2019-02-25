@extends('template')

@section('judul')
Data Rak
@stop


@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('Rak/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <div class="box-body">
        <table id="DT" class="table table-bordered table-striped">
            <thead>
                <tr>
                    
                    <th>No Rak</th>
                    <th>Nama Rak</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
            <!--tampil data-->
            @foreach($rak as $rrak)
                <tr>
                    <td>{{ $rrak ['kd_rak'] }}</td>
                    
                    <td>{{ $rrak['nama_rak'] }}</td>
                    <td>
                        <a href="{{ url('Rak/edit',$rrak['kd_rak']) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('Rak/delete',$rrak['kd_rak']) }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop