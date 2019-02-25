@extends('template')

@section('judul')
Form Penerbit
@stop

@section('content')
<form id="frmPenerbit" class="form-horizontal" action="{{ url('Penerbit/save') }}" method="post" enctype="multipart/form-data">
    @csrf
   
        <div class="fForm col-md-9">
            <div class="box">
                <!-- Bidodata Penerbit -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Penerbit</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kd_penerbit" value="{{ $penerbit['kd_penerbit'] }}">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Penerbit" name="nama" value="{{ $penerbit['nama_penerbit'] }}">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                </div>                   
            </div>
        </div>       
    </div>
</form>
@stop
