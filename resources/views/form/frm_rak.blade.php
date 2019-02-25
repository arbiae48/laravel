@extends('template')

@section('judul')
Form Rak
@stop

@section('content')
<form id="frmRak" class="form-horizontal" action="{{ url('Rak/save') }}" method="post" enctype="multipart/form-data">
    @csrf
   
        <div class="fForm col-md-9">
            <div class="box">
                <!-- Bidodata Penerbit -->
                <div class="box-header with-border">
                    <h3 class="box-title">Data Rak</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kd_rak" value="{{ $rak['kd_rak'] }}">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Rak" name="nama" value="{{ $rak['nama_rak'] }}">
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
