@extends('template')

@section('judul')
Form Pengarang
@stop

@section('content')
<form id="frmPengarang" class="form-horizontal" action="{{ url('Pengarang/save') }}" method="post" enctype="multipart/form-data">
    @csrf
   
        <div class="fForm col-md-9">
            <div class="box">
                <!-- Bidodata Pengarang -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Pengarang</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kd_pengarang" value="{{ $pengarang['kd_pengarang'] }}">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Pengarang" name="nama" value="{{ $pengarang['nama_pengarang'] }}">
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
