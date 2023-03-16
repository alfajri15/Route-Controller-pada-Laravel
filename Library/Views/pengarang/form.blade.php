@extends('adminlte::page')  
@section('title', 'Form Buku')  
@section('content_header')
<h1>Form Pengarang</h1><br/>
<a class="btn btn-secondary btn-md" href="{{ '/pengarang' }}" role="button">Back</a><br/><br/>
<table class="table table-striped">
@stop  
@section('content')
{{-- Ini Konten Form Input Pengarang --}} 
<form method="POST" action="{{ route('pengarang.store') }}"
    enctype="multipart/form-data">
@csrf {{-- security untuk menghindari dari serangan pada saat input form --}}

<div class="form-group">
<label>Nama Pengarang</label>
<input type="text" name="nama" class="form-control"/><br/>
<label>Email</label>
<input type="text" name="email" class="form-control"/><br/>
<label>No Hp</label>
<input type="text" name="hp" class="form-control"/><br/>
<label>Foto</label>
<input type="file" name="foto" class="form-control"/>
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
