@extends('adminlte::page')
@section('title','Data Penerbit')
@section('content_header')
    <h1>Data Penerbit</h1>
@stop
@section('content') 
{{-- Isi Konten Data Penerbit --}}
@php
$ar_judul = ['No','Nama','Alamat','Email','Website','Telepon','CP'];
$no = 1;  @endphp
    <!-- <a class="btn btn-primary" href="{{ route('buku.create') }}"
    role="button">Tambah</a>&nbsp;&nbsp;&nbsp; -->
    <a class="btn btn-secondary btn-md" href="{{ '/home' }}" role="button">Back</a><br/><br/>
    <table class="table table-striped">
    <thead>
    <tr>
    @foreach($ar_judul as $jdl)
    <th>{{ $jdl }}</th>  @endforeach
    </tr>
    </thead>
    <tbody>
@foreach($ar_penerbit as $pnt)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $pnt->nama }}</td>
    <td>{{ $pnt->alamat }}</td>
    <td>{{ $pnt->email }}</td>
    <td>{{ $pnt->website }}</td>
    <td>{{ $pnt->telp }}</td>
    <td>{{ $pnt->cp }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
