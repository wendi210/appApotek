@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($obat))?route('apotek.update',$obat->id_obat):route('apotek.store')}}" method="POST">
        @csrf
        @if(isset($obat))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Nama Obat</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($obat))?$obat->nama_obat:old('nama_obat')}}" name="nama_obat" class="form-control">
                    @error('nama_obat')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Keterangan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($obat))?$obat->tanggal_kadaluarsa:old('tanggal_kadaluarsa')}}" name="tanggal_kadaluarsa" class="form-control">
                    @error('tanggal_kadaluarsa')<small style="color:red">{{$message}}</small>@enderror
                </div>
            </div>
            
            
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>

    </form>    
    </div>
</div>    
@endsection