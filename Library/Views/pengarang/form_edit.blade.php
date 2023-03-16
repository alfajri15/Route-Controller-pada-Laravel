@extends('adminlte::page')  
@section('title', 'Form Buku')  
@section('content_header')
<h1>Form Edit Pengarang</h1><br/>
<a class="btn btn-secondary btn-md" href="{{ '/pengarang' }}" role="button">Back</a><br/><br/>
<table class="table table-striped">
@stop  
@section('content')
{{-- Ini Konten Form Input Pengarang --}} 
@foreach($data as $rs)
<form method="POST" action="{{ route('pengarang.update',$rs->id) }}">
@endforeach
@csrf {{-- security untuk menghindari dari serangan pada saat input form --}}
@method('put') {{-- method put digunakan untuk meletakkan data yang akan diubah
disetiap element form edit buku --}}
<div class="form-group">
<label>Nama Pengarang</label>
<input type="text" name="nama" value="{{ $rs->nama }}" class="form-control"/><br/>
<label>Email</label>
<input type="text" name="email" value="{{ $rs->email }}" class="form-control"/><br/>
<label>No Hp</label>
<input type="text" name="hp" value="{{ $rs->hp }}" class="form-control"/><br/>
<label>Foto</label>
<input type="text" name="foto" value="{{ $rs->foto }}" class="form-control"/>
</div>
<button type="submit" class="btn btn-primary"
name="proses">Simpan</button>

<button type="reset" class="btn btn-warning"
name="unproses">Batal</button>

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">  
@stop
@section('js')
<script> console.log('Hi!'); </script>  
@stop
