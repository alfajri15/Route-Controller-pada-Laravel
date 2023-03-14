@extends('adminlte::page')
@section('title','Data Pengarang')
@section('content_header')
    <h1>Data Pengarang</h1>
@stop
@section('content') 
{{-- Isi Konten Data Pengarang --}}
@php
$ar_judul = ['No','Nama','Email','No HP'];
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
@foreach($ar_pengarang as $pgr)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $pgr->nama }}</td>
    <td>{{ $pgr->email }}</td>
    <td>{{ $pgr->hp }}</td>
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
